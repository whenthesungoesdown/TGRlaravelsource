<?php
use App\Login;
use App\Register;
use App\User;
use App\Product;
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
    return view('home');
});

Route::get('/delete',function(){

    Product::destroy([5,6,7]);
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


/*----------------------ROUTES FOR LOGIN & REGISTER-------------------------------------*/
Route::get('/reg','RegisterAuthController@showRegister')->name('reg');
Route::post('/reg','RegisterAuthController@registration');
Route::get('/log','Auth\LoginController@showLogin')->name('log');
Route::post('/log','Auth\LoginController@login');
Route::get('/logout', 'Auth\LoginController@logout')->name('logout');

/*----------------------ROUTES FOR CART-------------------------------------*/
Route::get('/', 'ProductsController@index');
Route::get('/cart', 'ProductsController@cart')->name('cart');
Route::post('/add-to-cart', 'ProductsController@add_to_cart')->name('addtocart');
Route::get('/{id}','ProductsController@show')->name('product_page');

/*-----------------------FORGOT-PASSWORD--------------------------------------*/ 

 Route::get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('password.request');
 Route::post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('password.email');
 Route::get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('password.reset');
 Route::post('password/reset', 'Auth\ResetPasswordController@reset')->name('password.update');


 Route::get('/mail','SendEmailController@send');

 /*-----------------------------OTHER-ROUTES--------------------------------------*/
 Route::get('/about',function(){
    return view('about');
});
Route::get('/corporate',function(){
    return view('corporate');
});
Route::get('/wedding',function(){
    return view('wedding');
});
Route::get('/otheroccasions',function(){
    return view('otheroccasions');
});
Route::get('/giftcard',function(){
    return view('giftcard');
});
Route::get('/contactus',function(){
    return view('contactus');
});
Route::get('/custombox',function(){
    return view('custombox');
});
Route::get('/faq',function(){
    return view('faq');
});
Route::get('/privacy',function(){
    return view('privacy');
});
Route::get('/shippingandreturn',function(){
    return view('shippingandreturn');
});
Route::get('/termsandconditions',function(){
    return view('tandc');
});
// Route::get('/existinguser',function(){
//     return view('existinguser');
// });
// Route::get('/cart',function(){
//     return view('cart');
// });
// Route::get('/newuser',function(){
//     return view('newuser');
// });
// Route::get('/resetpassword',function(){
//     return view('forgotpassword');
// });