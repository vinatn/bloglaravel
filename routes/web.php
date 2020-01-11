<?php

Route::get('/', function () {
    return view('welcome');
});

Route::get('/about', function(){
    return '<h1>Hallo</h1>'
    .'Selamat Datang Di Webapp Saya<br>'
    .'Laravel, Emang Keren.';
});

// Route::get('profil', function()
// {
//     return view ('biodata'); 
// });

// Route::get('profil2', function()
// {
//     return view ('sekolah'); 
// });

// Route::get('profil3', function()
// {
//     return view ('rumah'); 
// });

// Route::get('profil4', function()
// {
//     return view ('bumi'); 
// });

// Route::get('profil5', function()
// {
//     return view ('pasar'); 
// });

// Route Parameter
Route::get('pesan/{richeese}/{minum}/{total}',function ($mkn,$mnm,$hrg){
    return 'Makanan yang saya pesan adalah = '.$mkn.'<br>'
    .'Minumannya = '.$mnm.'<br>'
    .'Harganya = '.$hrg;    
});

// Route Optional Parameter
Route::get('pesanan/{a?}/{b?}/{c?}',function($mkn=null,$mnm=null,$hrg=null){
    if(isset($mkn)){
        $mkn = "Anda Memesan $mkn";
        echo $mkn;
    }
    if(isset($mnm)){
        $mnm = " & $mnm";
        echo $mnm;
    }
    if(isset($hrg)){
        $hrg = "dengan harga $harga";
        echo $hrg;
    }
    if (!$mkn && !$mnm && !$hrg)
    return "Anda belum memesan sesuatu";
});

Route::get('/testmodel', function() {
    $testmodel = App\Post::all();
    return $testmodel;
    });

Route::get('/testmodel1', function() {
    $testmodel = App\Post::find(1);
    return $testmodel;
    });

Route::get('/testmodel2', function() {
    $testmodel = App\Post::where('title','like','%membangun visi misi keluarga%')->get();
    return $testmodel;
    });

Route::get('/testmodel3', function() {
    $testmodel = App\Post::find(1);
    $testmodel->title = "Ciri Keluarga Sakinah";
    $testmodel->save();
    return $testmodel;
    });

Route::get('/testmodel4', function() {
    $testmodel = App\Post::find(1);
    $testmodel->delete();
    return $testmodel;
    });

    Route::get('/testmodel5', function() {
    $post = new App\Post;
    $post->title = "7 Amalan Pembuka Jodoh";
    $post->content = "shalat malam, sedekah, puasa sunah, silaturahmi, senyum, doa, tobat";
    $post->save();
    return $post;
    });

    // Route::get('gaji', function() {
    // 
    // 
    // });

    Route::get('data-gaji',function() {
        $query = App\Penggajihan::all();
        return $query;
    });

    Route::get('gaji-1',function() {
        $query = App\Penggajihan::where('agama','=','islam')->get();
        return $query;
    });

    Route::get('gaji-2',function() {
        $query = App\Penggajihan::select('id','nama','agama')
        ->where('agama','=','islam')->get();
        return $query;
    });

    Route::get('gaji/{id}',function($id) {
        $query = App\Penggajihan::findOrFail($id);
        return $query;
    });

    Route::get('tambah-gaji',function() 
    {
        $gaji = New App\Penggajihan();
        $gaji->nama = 'aulia';
        $gaji->jabatan = 'bendahara';
        $gaji->jk = 'perempuan';
        $gaji->alamat = 'rancamanyar';
        $gaji->agama = 'islam';
        $gaji->total_gaji = '3000000';
        $gaji->save();
        return $gaji;
    });