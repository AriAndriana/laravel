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

//Route Basic 
Route::get('/about', function(){
    return '<h1>Halo</h1>'
            . 'Selamat datang di webapp saya <br>'
            . 'Laravel, Emang Keren.';
});

// Route::get('profil', function(){
//     return view('biodata');
// });

// Route::get('biodata', function(){
//     return view('profil');
// });

// Route::get('biodata1', function(){
//     return view('profil1');
// });

// Route::get('biodata2', function(){
//     return view('profil2');
// });

// Route::get('biodata3', function(){
//     return view('profil3');
// });

// Route::get('biodata4', function(){
//     return view('profil4');
// });

// Route Parameter
Route::get('/makanan/{makan}/{minum}/{harga}', function($mkn,$mnm,$hrg){
    return 'Makanan Yang Saya Pesan Adalah <b>'.$mkn
            .'</b> Dan Minuman <b>'.$mnm.'</b> Dengan Total Harga = Rp.<b>'.$hrg.'</b>';
});