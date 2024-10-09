<?php

use App\Http\Controllers\AddUserController;
use Illuminate\Support\Facades\Route;
use App\Models\User;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [AddUserController::class, 'loginUser'])->name('loginUser');

Route::get('/home', function () {
    return view('home');
})->name('home');
Route::get('/kelola', function () {
    return view('kelola', [
        "user" => User::all(),
        'info' => 'Tidak ada user'
    ]);
})->name('kelola');

// Route::put('/update/{id}', [AddUserController::class, 'update'])->name('update');
Route::post('store', [AddUserController::class, 'store'])->name('store');
Route::delete('delete/{id}', [AddUserController::class, 'destroy'])->name('delete');
Route::get('edit/{id}', [AddUserController::class, 'edit'])->name('edit');
Route::put('edit/{id}', [AddUserController::class, 'update'])->name('update');
