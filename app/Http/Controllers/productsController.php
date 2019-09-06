<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Product;
use DB;
use App\Cart;
use Session;
use Illuminate\Support\Facades\Input;
class ProductsController extends Controller
{
 public function addtocart(Request $request){
    $session_id=Session::get('session_id');
    
    if(empty($session_id)){
$session_id=str_random('40');
Session::put('session_id',$session_id);
    }
    
$prod=new Cart;
$prod->product_name=request('product_name');
$prod->product_id=request('product_id');
$prod->price=request('price');
$prod->quantity=request('quantity');
$prod->session_id=$session_id;
$prod->pic=DB::table('products')->select('pic1')->where('id',request('product_id'))->get();
$prod->save();
return redirect('cart')->with('flash_message_success','Product has been added into the cart successfully');
 }
 public function cart(){
 
   
    $session_id=Session::get('session_id');
    $userCart=DB::table('cart')->where(['session_id'=>$session_id])->get();
        //return view('cart')->with('userCart',$userCart);
   return view('cart',compact(['userCart']));
}
 public function index()
 {
     $products =  product::all();
     return view('home')->with('products' , $products);
 }
 public function show($id)
 {
     $product = product::where('id',$id)->get();
    // return view('product')->with('product' ,  $product);
    return view('product',compact(['product']));
 }

 public function custombox(){
    $products =  product::all();
    return view('custombox')->with('products' , $products);
 }
   
}