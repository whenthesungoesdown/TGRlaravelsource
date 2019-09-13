<?php
use App\Login;
use App\Register;
use App\User;
use App\Product;
use App\Cart;
use App\address;
use App\Wishlist;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
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

    Cart::destroy([1]);
});

Route::get('/deleterecords',function(){

    Wishlist::truncate();
});

Auth::routes();

Route::get('/home', 'ProductsController@index')->name('home');


/*----------------------ROUTES FOR LOGIN & REGISTER-------------------------------------*/
Route::get('/reg','RegisterAuthController@showRegister')->name('reg');
Route::post('/reg','RegisterAuthController@registration');
Route::get('/log','Auth\LoginController@showLogin')->name('log');
Route::post('/log','Auth\LoginController@login');
Route::get('/logout', 'Auth\LoginController@logout')->name('logout');

/*----------------------ROUTES FOR CART AND WISHLIST-------------------------------------*/
Route::get('/', 'ProductsController@index');
Route::any('/cart', 'ProductsController@cart')->name('cart')->middleware('auth');
Route::get('/add-to-cart', 'ProductsController@addtocart')->name('addtocart');
Route::get('/show/{id}','ProductsController@show')->name('product_page');
Route::any('/cart/deleteproduct/{id}','ProductsController@delete_from_cart');
Route::any('/add_to_wishlist','ProductsController@addtowishlist')->name('wishlist');
Route::any('/showWishlist', 'ProductsController@wishlist')->name('showWishlist')->middleware('auth');
Route::any('/wishlist/deleteproduct/{id}','ProductsController@delete_from_wishlist');




/*-----------------------FORGOT-PASSWORD--------------------------------------*/ 

 Route::get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('password.request');
 Route::post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('password.email');
 Route::post('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('password.reset');
 Route::post('password/reset', 'Auth\ResetPasswordController@reset')->name('password.update');


 Route::get('/mail','SendEmailController@send');

Route::any('/forgot-password','LoginController@forgotpass')->name('forgot-password');

 /*-----------------------------OTHER-ROUTES--------------------------------------*/
 Route::get('/about',function(){
    return view('about');
  })->name('about');


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
})->name('contactus');
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
Route::resource('/','ProductsController');

Route::get('/wishlist', function(){
    return view('wishlist');
});
Route::get('/reset', function(){
    return view('changepassword');
});


Route::any('/search',function(){
    $search = Input::get ( 'search_text' );
    $product = Product::where('title','LIKE','%'.$search.'%')->orWhere('id','LIKE','%'.$search.'%')->get();
    if(count($product) > 0)
        return view('product',compact('search','product'));
    else 
    //return view ('home');
    return redirect()->back();
})->name('search');

Route::get('/profile',function(Request $request){
    if(Auth::check()){
        $id=Auth::user()->id;
        $user=User::where('id',$id)->get();
       
        $newDetails=address::where('id',$id)->get();
      //  return view('profile')->with('user',$user);
      return view('profile',compact(['user','newDetails']));
        
    }
    return view('existinguser');
});

// Route::get('/update_mobile',function(Request $request){
//     $id=Auth::user()->id;
//     $user=User::where('id',$id)->get();
//     //$user_num=DB::table('users')->select('mob_num')->where('id',$id);
//     $updated_num=request('mobile');
    
//     DB::table('users')->where('id',$id)->update(array('mob_num'=>$updated_num));
//     return redirect()->back();
// });

Route::post('/storeaddress',function(Request $request){
     if($request->isMethod('post')){

        $data=$request->all();
           $userAddress=new address;
            $userAddress->name=request('name');
            $userAddress->number=request('number');
            $userAddress->address=request('address');
            $userAddress->pincode=request('pincode');
            $userAddress->city=request('city');
            $userAddress->state=request('state');
            $userAddress->save();
        
         return redirect()->back();
 }
})->name('address');

Route::any('/change_password',function(){
    return view('changepassword');
})->name('change_pwd');

Route::any('/changepass',function(Request $request){
    if(Auth::check()){
        // $this->validate($request, [
        // 'email' => 'required',
        // 'new_pass' => 'required|confirmed',
        // 'password_confirmation' => 'required'
// ]);

      $user = User::find(Auth::id());
      $user->password = Hash::make($request->new_pass);
      $user->save();

      return view('existinguser');
 
  }
})->name('changepass');





