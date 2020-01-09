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