<?php

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



Route::get('/mahasiswa/{nrp}/{nama}', function($nrp, $nama) {
    return $nrp . " " . $nama;
})->where([
    'name' => '[A-Za-z]+',
    'nrp' => '[0-9]+',
]);