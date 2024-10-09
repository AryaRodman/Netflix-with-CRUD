@php
// Array berisi gambar profil yang mungkin
$profile_pictures = [
    '/img/pp/pp1.jpeg',
    '/img/pp/pp2.jpeg',
    '/img/pp/pp3.jpeg',
    '/img/pp/pp4.jpeg',
    '/img/pp/pp5.jpeg',
    '/img/pp/pp6.jpeg',
    '/img/pp/pp7.jpeg',
    '/img/pp/pp8.jpeg',
    '/img/pp/pp9.jpeg'
];
@endphp
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pilih Profil</title>
    <link rel="icon" href="/img/logo4.png" type="image/png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="css/login.css">
</head>
<body>
    @if (Session::get('success'))
            <div class="alert alert-success">{{ Session::get('success') }}</div>
    @endif
    @if (Session::get('failed'))
            <div class="alert alert-danger">{{ Session::get('failed') }}</div>
    @endif
    <h1>Edit Profil</h1>
    <div class="allprofile">
        @foreach ($user as $item)
        <?php
        // Pilih gambar profil acak untuk setiap user
        $random_picture = $profile_pictures[array_rand($profile_pictures)];
        ?>
        <div class="profile">
                <img src="{{ $random_picture }}" alt="">
            <p>{{ $item->name }}</p>
            <div class="edit-section d-flex justify-content-center">
                {{-- Edit --}}
                <button class="edit-akun btn btn-transparant" type="button" onclick="showModalEdit('{{ $item->id }}', '{{ $item->name }}')">
                    <i class="bi bi-pencil text-white"></i>
                </button>
                {{-- End Edit --}}
                {{-- Hapus --}}
                <button class="edit-akun btn btn-transparant" type="button" onclick="showModalHapus('{{$item->id }}', '{{ $item->name }}')">
                    <i class="text-danger bi bi-trash-fill"></i>
                </button>
                {{-- End Hapus --}}
            </div>
        </div>
        @endforeach
    </div>

    <!-- Modal Edit -->
        <div class="modal fade" id="editAkun" data-bs-keyboard="false">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content bg-dark text-white">
                    <div class="modal-header border-0">
                        <p class="modal-title fs-5">Edit Akun</p>
                        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <form method="POST" action="">
                        @csrf
                        @method('PUT')
                        <div class="modal-body">
                            <div class="formNew">
                                <input  type="text" placeholder="Nama" class="input-text" required name="name" id="usn">
                            </div>
                            <hr>
                            <div class="modal-footer border-0">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                                <button type="submit" class="btn btn-light" name="btn" id="btn">Simpan</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    <!-- End Modal Edit -->


    <!-- Modal Hapus -->
    <div class="modal fade" id="hapusAkun" data-bs-keyboard="false">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content bg-dark text-white">
                <div class="modal-header border-0">
                    <p class="modal-title fs-5">Hapus Akun</p>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <hr>
                <div class="modal-body">
                    <p class="text-center fs-4">Anda yakin ?</p>
                    <div class="modal-footer border-0">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                            <form id="delete" action="" method="POST" >
                                @csrf
                                @method('DELETE')
                            <button type="submit" class="btn btn-danger" name="btn" id="btn">Hapus</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
<!-- End Modal Hapus -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <script>
        function showModalEdit(id, name) {
            $('#name').val(name);  // Set the value of the input field
            $('#editAkun').modal('show');  // Show the modal
            let url = "{{ route('edit', ':id') }}"
            url = url.replace(':id', id);
            $('form').attr('action',url)
        }
        function showModalHapus(id, name) {
            $('#name').val(name);  // Set the value of the input field
            $('#hapusAkun').modal('show');  // Show the modal
            let url = "{{ route('delete', ':id') }}"
            // mengisi id dengan perameter id
            url = url.replace(':id', id);
            $('form').attr('action',url)
        }
    </script>
</body>
</html>
