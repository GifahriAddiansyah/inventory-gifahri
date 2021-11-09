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
//Kasus index
Route::get('/person','PersonController@index');
//Kasus show
Route::get('/person/show/{param}','PersonController@show');
//Kasus student
Route::resource('/student', 'StudentController');

//Kasus homepage
Route::get('/homepage', function (){
    return view('home' , ["name" => "Mohamad Gifahri Addiansyah "]);
});

Route::get('/person/send-data', 'PersonController@sendData');