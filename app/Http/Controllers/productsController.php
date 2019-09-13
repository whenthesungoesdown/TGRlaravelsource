<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use DB;
use App\Cart;
use Session;
use App\Wishlist;
use Illuminate\Support\Facades\Input;
use Response;
class ProductsController extends Controller
{

    public function __construct(){

        //$this->middleware('authenticatedmiddleware');
    }


 public function addtocart(Request $request){
    $session_id=Session::get('session_id');
    
    if(empty($session_id)){
$session_id=str_random('40');
Session::put('session_id',$session_id);
    }
    $data=$request->all();
    
    $countProducts=DB::table('cart')->where(['product_id'=>$data['product_id'],'product_name'=>$data['product_name'],'price'=>$data['price']])->count();
  
    if($countProducts>0){
            return back()->with('success', 'Product already exists in the cart');
    }
    else{
$prod=new Cart;
$prod->product_name=request('product_name');
$prod->product_id=request('product_id');
$prod->price=request('price');
$prod->quantity=request('quantity');
$prod->session_id=$session_id;
$prod->save();
return redirect('cart')->with('flash_message_success','Product has been added into the cart successfully');
 }
 }
 public function cart(){
 
   
    $session_id=Session::get('session_id');
    $userCart=DB::table('cart')->where(['session_id'=>$session_id])->get();
    foreach($userCart as $key=>$prod){
    $productDetails=product::where('id',$prod->product_id)->first();
    $userCart[$key]->pic=$productDetails->pic1;
    
 }
 return view('cart')->with('userCart',$userCart);
       
  
}

public function delete_from_cart($id=null){
    DB::table('cart')->where('id',$id)->delete();
    return redirect('/cart');
}



 public function index()
 {
     $products =  product::all();
    return view('home')->with('products' , $products);
    
   
 }

 public function show($id)
 {
     $product = product::where('id',$id)->get();
     
    return view('product')->with('product' ,  $product)->with('id',$id);
    
   
    
 }

 public function addtowishlist(Request $request){

    $session_id=Session::get('session_id');
    
    if(empty($session_id)){
$session_id=str_random('40');
Session::put('session_id',$session_id);
    }
    $wishlistdata=$request->all();
    
    
    $countProducts=DB::table('wishlists')->where(['product_id'=>$wishlistdata['product_id'],'product'=>$wishlistdata['product'],'price'=>$wishlistdata['price']])->count();
  
    if($countProducts>0){
            return back()->with('success', 'Product already exists in the wishlist');
    }
    else{
$wishprod=new Wishlist;
$wishprod->product=request('product');
$wishprod->product_id=request('product_id');
$wishprod->price=request('price');
$wishprod->session_id=$session_id;
$wishprod->save();
return redirect('showWishlist')->with('flash_message_success','Product has been added into the wishlist successfully');
 }

}

 public function wishlist(){
 
   
    $session_id=Session::get('session_id');
    $userprod=DB::table('wishlists')->where(['session_id'=>$session_id])->get();
    foreach($userprod as $key=>$wishprod){
    $productDetails=product::where('id',$wishprod->product_id)->first();
    $userprod[$key]->pic=$productDetails->pic1;
    
 }
 return view('wishlist')->with('userprod',$userprod);
 //return view('wishlist',compact(['userprod','productDetails']));
 }

 public function delete_from_wishlist($id=null){
    DB::table('wishlists')->where('id',$id)->delete();
    return redirect('/showWishlist');
}
}
