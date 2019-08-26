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

// Route::get('/',function(){
//     return view('pages/home');
// });

Route::resource('/','ProductsController');
// Route::get('/{id}', 'ProductsController@show');
// Route::get('/create', 'ProductsController@create');
// Route::get('/store', 'ProductsController@store');
// Route::get('/edit', 'ProductsController@edit');
// Route::get('/update', 'ProductsController@update');
// Route::get('/destroy', 'ProductsController@destroy');



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

Route::get('/shippingandreturn',function(){
    return view('pages/shippingandreturn');
});

Route::get('/termsandconditions',function(){
    return view('pages/tandc');
});

Route::get('/existinguser',function(){
    return view('pages/existinguser');
});

Route::get('/cart',function(){
    return view('pages/cart');
});

Route::get('/newuser',function(){
    return view('pages/newuser');
});

Route::get('/resetpassword',function(){
    return view('pages/forgotpassword');
});



/*----------------------ROUTES FOR LOGIN & REGISTER-------------------------------------*/
Route::get('/reg','RegisterAuthController@showRegister')->name('reg');
Route::post('/reg','RegisterAuthController@registration');
Route::get('/log','Auth\LoginController@showLogin')->name('log');
Route::post('/log','Auth\LoginController@login');
Route::get('/logout', 'Auth\LoginController@logout')->name('logout');
/*----------------------ROUTES FOR CART-------------------------------------*/
Route::get('/products', 'ProductsController@index');
Route::get('/cart', 'ProductsController@cart')->name('cart');
Route::post('/add-to-cart', 'ProductsController@add_to_cart')->name('addtocart');
Route::get('/product_page','ProductsController@showProduct')->name('product_page');
/*-----------------------FORGOT-PASSWORD--------------------------------------*/ 
 Route::get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('password.request');
 Route::post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('password.email');
 Route::get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('password.reset');
 Route::post('password/reset', 'Auth\ResetPasswordController@reset')->name('password.update');
 Route::get('/mail','SendEmailController@send');
// Auth::routes();

// Route::get('/existinguser', 'HomeController@index')->name('home');
