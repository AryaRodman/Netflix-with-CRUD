<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;

class AddUserController extends Controller
{
    // Method untuk menyimpan user baru
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required'
        ]);

        User::create($request->all());

        return redirect()->back()->with('success', 'User berhasil ditambahkan!');
    }

    // Menampilkan semua user di halaman login
    public function loginUser()
    {
        return view('login', [
            'user' => User::all()
        ]);
    }
    
    // Method untuk menghapus user berdasarkan id
    public function destroy($id)
    {
        $proses = User::where('id', $id)->delete();

        if($proses) {
            return redirect('/')->with('success', 'Berhasil Menghapus Data Pengguna!');
        } else {
            return redirect()->back()->with('error', 'Gagal Menghapus Data Pengguna!');
        }
    }

    public function update(Request $request, $id)
    {
        //
        $request->validate([
            'name' => 'required'
        ]);

        // ambil data sebelumnya
        $akunBefore = User::where('id', $id)->first();
    
        // jika stok input >= sebelumnya maka data bisa diubah
        $proses = $akunBefore->update([
            'name' => $request->name,
        ]);

        if($proses) {
            return redirect('/')->with('success', 'Berhasil Mengubah Data Akun!');
        }
        else{
            return redirect()->back()->with('error', 'Gagal Mengubah Data Akun!');
        }
    }
}

