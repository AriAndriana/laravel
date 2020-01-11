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

// Route Optional
Route::get('/halo/{nama?}', function($nama='Ari'){
    return 'Halo nama saya '.$nama;
});

Route::get('/pesanan/{minuman?}/{makanan?}/{harga?}', function($minum=null, $makan=null, $harga=null){
    if (isset($minum)) {
        echo 'Anda memesan '.$minum;
    } if (isset($makan)) {
        echo ' dan '.$makan;
    } if (isset($harga)) {
        echo ' Dengan harga Rp.'.$harga;
    } if ($minum==null && $makan==null && $harga==null) {
        echo 'Anda belum memesan';
    }
});

Route::get('/testmodel', function(){
    $query = App\Post::all();
    return $query;
});

Route::get('/testmodel1', function(){
    $query = App\Post::find(7);
    return $query;
});

Route::get('/testmodel2', function(){
    $query = App\Post::where('title', 'like', '%cepat nikah%')->get();
    return $query;
});

Route::get('/testmodel3', function(){
    $post = App\Post::find(8);
    $post->title = "Ciri Keluarga Sakinah";
    $post->save();
    return $post;
});

Route::get('/testmodel4', function(){
    $post = App\Post::find(9);
    $post->delete();
    // Check data di database;
});

Route::get('/testmodel5', function(){
    $post = new App\Post;
    $post->title = "7 Amalan Pembuka Jodoh";
    $post->content = "Shalat malam, Sedekah, Puasa sunah, silaturahmi, senyum, doa, tobat";
    $post->save();
    return $post;
    // Check record baru di database
});

Route::get('/index', function(){
    $query = App\Penggajian::all();
    return $query;
});

Route::get('data-gaji', function(){
    $gaji = App\Penggajian::where('alamat', '=', 'Cicaheum')->get();
    return $gaji;
});

Route::get('data-gaji-2', function(){
    $gaji = App\Penggajian::select('id', 'nama', 'agama')->where('agama', '=', 'Islam')->get();
    return $gaji;
});

Route::get('data-gaji/{id}', function($id){
    $gaji = App\Penggajian::findOrFail($id);
    return $gaji;
});

Route::get('tambah-data-gaji', function(){
    $gaji = New App\Penggajian();
    $gaji->nama = 'Indah Mambo';
    $gaji->jabatan = 'Sekretaris';
    $gaji->jk = 'Perempuan';
    $gaji->alamat = 'Bojong Honey';
    $gaji->total_gaji = 500000;
    $gaji->agama = 'islam';
    $gaji->save();
    return $gaji;
});