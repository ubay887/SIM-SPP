<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

// ROLE ADMIN
Route::middleware('role:admin')->prefix('/admin')->name('admin.')->group(function() {
    Route::get('/dashboard', 'HomeController@index')->name('dashboard');

    // CRUD RAYON
    // PAKE PREFIX SESUAI CRUD
    Route::prefix('/rayon')->name('rayon.')->group(function(){
        Route::get('/', 'Admin\RayonController@index')->name('index');
        Route::get('/create', 'Admin\RayonController@create')->name('create');
        Route::post('/store', 'Admin\RayonController@store')->name('store');
        Route::get('/edit/{rayon}', 'Admin\RayonController@edit')->name('edit');
        Route::put('/update/{rayon}', 'Admin\RayonController@update')->name('update');
        Route::delete('/delete/{rayon}', 'Admin\RayonController@destroy')->name('destroy');
    });

    // ROUTE NYA PAKE PREFIX YA, HARUS SAMA :) ... LANJUTKAN ... 
});

// ROLE PEGAWAI
Route::middleware('role:pegawai')->prefix('/pegawai')->name('pegawai.')->group(function() {
    Route::get('/dashboard', 'HomeController@index')->name('dashboard');
});

// ROLE ORANG TUA
Route::middleware('role:ortu')->prefix('/ortu')->name('ortu.')->group(function() {
    Route::get('/dashboard', 'HomeController@index')->name('dashboard');
});

// ROLE KEPALA SEKOLAH
Route::middleware('role:kepsek')->prefix('/kepsek')->name('kepsek.')->group(function() {
    Route::get('/dashboard', 'HomeController@index')->name('dashboard');
});

// ROLE PEMBIMBING RAYON
Route::middleware('role:pembimbing')->prefix('/pembimbing')->name('pembimbing.')->group(function() {
    Route::get('/dashboard', 'HomeController@index')->name('dashboard');
});

Route::get('/admin', function () {
    return view ('admin.master');
});
Route::get('/siswa', function () {
    return view ('admin.siswa.index');
});
Route::get('/siswa/create', function (){
    return view ('admin.siswa.create');
});
Route::get('/siswa/edit', function (){
    return view ('admin.siswa.edit');
});
Route::get('/siswa/show', function (){
    return view ('admin.siswa.show');
});
Route::get('/pembimbing', function () {
    return view ('admin.pembimbing.index');
});
Route::get('/pembimbing/create', function (){
    return view ('admin.pembimbing.create');
});
Route::get('/pembimbing/edit', function (){
    return view ('admin.pembimbing.edit');
});
Route::get('/pembimbing/show', function (){
    return view ('admin.pembimbing.show');
});
Route::get('/rombel', function () {
    return view ('admin.rombel.index');
});
Route::get('/rombel/create', function () {
    return view ('admin.rombel.create');
});
Route::get('/rombel/edit', function () {
    return view ('admin.rombel.edit');
});
Route::get('/rayon', function () {
    return view ('admin.rayon.index');
});
Route::get('/rayon/create', function () {
    return view ('admin.rayon.create');
});
Route::get('/rayon/edit', function () {
    return view ('admin.rayon.edit');
});
Route::get('/jurusan', function () {
    return view ('admin.jurusan.index');
});
Route::get('/semester', function () {
    return view ('admin.semester.index');
});
Route::get('/mapel', function () {
    return view ('admin.mapel.index');
});
Route::get('/jenis', function () {
    return view ('admin.jenis.index');
});
Route::get('/transfer', function () {
    return view ('admin.transfer.index');
});