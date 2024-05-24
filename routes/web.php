<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ComentariosController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ReservasController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('home');
});
Route::get('/rooms', function () {
    return view('rooms');
});
Route::get('/habitacion_estandar', function () {
    return view('habitacion_estandar');
});
Route::get('/habitacion_lujo', function () {
    return view('habitacion_lujo');
});
Route::get('/suite_familiar', function () {
    return view('suite_familiar');
});

Route::get('/contactanos', function () {
    return view('contactanos');
});

Route::get('/acerca', function () {
    return view('acerca');
});

Route::get('/faq', function () {
    return view('faq');
});

Route::controller(AuthController::class)->group(function(){
    Route::get('register', 'register')->name('register');
    Route::post('register', 'registerSave')->name('register.save');
    Route::get('login', 'login')->name('login');
    Route::post('login', 'loginAction')->name('login.action');

    Route::post('logout', 'logout')->middleware('auth')->name('logout');
});

//Normal Users Routes List
Route::middleware(['auth', 'user-access:user'])->group(function () {
    Route::get('/home', [HomeController::class, 'index'])->name('home');
});

//Admin Routes List
Route::middleware(['auth', 'user-access:admin'])->group(function () {
    Route::get('/admin/home', [HomeController::class, 'adminHome'])->name('admin/home');
    Route::get('/admin/profile', [AdminController::class, 'profilepage'])->name('admin/profile');
    Route::get('/admin/products', [ProductController::class, 'index'])->name('admin/products');
    Route::get('/admin/products/create', [ProductController::class, 'create'])->name('admin/products/create');
    Route::post('/admin/products/store', [ProductController::class, 'store'])->name('admin/products/store');
    Route::get('/admin/products/show/{id}', [ProductController::class, 'show'])->name('admin/products/show');
    Route::get('/admin/products/edit/{id}', [ProductController::class, 'edit'])->name('admin/products/edit');
    Route::put('/admin/products/edit/{id}', [ProductController::class, 'update'])->name('admin/products/update');
    Route::delete('/admin/products/destroy/{id}', [ProductController::class, 'destroy'])->name('admin/products/destroy');
});

Route::post('/reservar', [ReservasController::class, 'create'])->name('reservar');
Route::get('/reservas', [ReservasController::class, 'mostrarReservas'])->name('reservas');
Route::get('/reservas/{id}/edit', [ReservasController::class, 'edit'])->name('reserva.edit');
Route::put('/reservas/{id}', [ReservasController::class, 'update'])->name('reserva.update');

Route::post('/rooms', [ComentariosController::class, 'create'])->name('comentario');
Route::get('/habitacion_estandar', [ComentariosController::class, 'mostrarComentarios'])->name('comentarios');
Route::get('/habitacion_lujo', [ComentariosController::class, 'mostrarComentarios2'])->name('comentarios2');
Route::get('/suite_familiar', [ComentariosController::class, 'mostrarComentarios3'])->name('comentarios3');




