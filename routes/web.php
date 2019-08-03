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

Route::get('/',function(){
    return view('pages/home');
});

Route::get('/about',function(){
    return view('pages/about');
});

Route::get('/corporate',function(){
    return view('pages/corporate');
});

Route::get('/wedding',function(){
    return view('pages/wedding');
});

Route::get('/otheroccasions',function(){
    return view('pages/otheroccasions');
});

Route::get('/giftcard',function(){
    return view('pages/giftcard');
});

Route::get('/contactus',function(){
    return view('pages/contactus');
});

Route::get('/custombox',function(){
    return view('pages/custombox');
});

Route::get('/faq',function(){
    return view('pages/faq');
});

Route::get('/privacy',function(){
    return view('pages/privacy');
});

Route::get('/user',function(){
    return view('pages/user');
});

