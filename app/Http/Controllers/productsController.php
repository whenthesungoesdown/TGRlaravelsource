<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Product;
use DB;
use App\Cart;
class ProductsController extends Controller
{
    //
    // public function index(){
    //  //   return view('home');
    //  return $products=Product::all();
     
    // }
    public function cart(){
        return view('cart');
    }
    public function add_to_cart($id){
        {
            $product = product::find($id);
     
            if(!$product) {
     
                abort(404);
     
            }
     
            $cart = session()->get('cart');
     
            // if cart is empty then this the first product
            if(!$cart) {
     
                $cart = [
                        $id => [
                            "product_name" => $product->Product_Name,
                            "quantity" => 1,
                            "price" => $product->Price,
                            
                        ]
                ];
     
                session()->put('cart', $cart);
     
                return redirect()->back()->with('success', 'Product added to cart successfully!');
            }
     
            // if cart not empty then check if this product exist then increment quantity
            if(isset($cart[$id])) {
     
                $cart[$id]['quantity']++;
     
                session()->put('cart', $cart);
     
                return redirect()->back()->with('success', 'Product added to cart successfully!');
     
            }
     
            // if item not exist in cart then add to cart with quantity = 1
            $cart[$id] = [
                "product_name" => $product->Product_Name,
                "quantity" => 1,
                "price" => $product->Price,
                            
            ];
     
            session()->put('cart', $cart);
     
            return redirect()->back()->with('success', 'Product added to cart successfully!');
        }
        return view('cart');
    }
 public function addtocart(Request $request){
$data=$request->all();
echo "<pre>"; print_r($data);
 }
 public function index()
 {
     $products =  product::all();
     return view('home')->with('products' , $products);
 }
 public function show($id)
 {
     $product = product::find($id);
     return view('product')->with('product' ,  $product);
 }
   
}