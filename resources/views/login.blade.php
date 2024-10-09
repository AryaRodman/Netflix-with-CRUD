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
    <h1>Siapa yang menonton?</h1>
    <div class="allprofile">
        @foreach ($user as $item)
        <?php
        // Pilih gambar profil acak untuk setiap user
        $random_picture = $profile_pictures[array_rand($profile_pictures)];
        ?>
        <div class="profile">
            <a href="{{ route('home') }}">
                <img src="{{ $random_picture }}" alt="">
            </a>
            <p>{{ $item->name }}</p>
        </div>
        @endforeach
        <!-- Tambah Profile Baru -->
        <div class="profile" data-bs-toggle="modal" data-bs-target="#addProfile">
            <i class="bi bi-plus add-profile"></i>
            <p>Tambah Profil</p>
        </div>
    </div>

    <!-- Modal untuk tambah profile -->
    <div class="modal fade" id="addProfile" data-bs-keyboard="false">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content bg-dark text-white">
                <div class="modal-header border-0">
                    <p class="modal-title fs-5">Tambah Profil</p>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="{{ route('store') }}" method="POST" >
                        @csrf
                        <div class="formNew">
                            <div class="profile-picture">
                                <img src="{{ $profile_pictures[array_rand($profile_pictures)] }}" alt="profile picture">
                            </div>
                            <input  type="text" placeholder="Nama" class="input-text" required name="name" id="usn">
                        </div>
                        <hr>
                        <div class="modal-footer border-0">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                            <button type="submit" class="btn btn-light" name="btn" id="btn">Simpan</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
  
    <div class="manage-profile">
        @if (count($user) == 0)
        <button type="button" class="btn btn-light" id="liveToastBtn">Kelola Profil</button>
        @else
        <a href="{{ route('kelola') }}"><button>Kelola Profil</button></a>
        @endif
    </div>

    <div class="toast-container position-fixed bottom-0 end-0 p-3 ">
        <div id="liveToast" class="toast bg-danger" role="alert" aria-live="assertive" aria-atomic="true">
            <div class="toast-header bg-dark ">
              <strong class="me-auto text-white">Netflix</strong>
            <small class="text-white">Recently</small>
            <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
          </div>
          <div class="toast-body">
           <b>TIDAK ADA PROFIL</b>
          </div>
        </div>
      </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script>
        const toastTrigger = document.getElementById('liveToastBtn')
        const toastLiveExample = document.getElementById('liveToast')

        if (toastTrigger) {
        const toastBootstrap = bootstrap.Toast.getOrCreateInstance(toastLiveExample)
        toastTrigger.addEventListener('click', () => {
            toastBootstrap.show()
        })
        }
    </script>
</body>
</html>