
@extends('layouts.thegoodroad')
@section('content')

<div class="container my-3 py-3" style="width:100%; border:1px solid black; border-radius:20px">
    <div class="row border-bottom justify-content-center">
        <div class="col-4 py-1 my-1">
            <p><b>Product</b></p>
        </div>
        <div class="col-2 py-1 my-1">
            <p><b>Title</b></p>
        </div>
        <div class="col-2 py-1 my-1">
            <p><b>Price</b></p>
        </div>
        <div class="col-2 py-1 my-1">
            <p><b>Quantity</b></p>
        </div>
        <div class="col-2 py-1 my-1">
            <p><b>Total</b></p>
        </div>
    </div>
    @foreach($userCart as $cart)
    
    <div class="border-bottom row justify-content-start">
        <div class="col-1 py-4 my-4">
          <a href="{{url('/cart/deleteproduct/'.$cart->id)}}"><ion-icon name="trash" ></ion-icon></a>
        </div>
        <div class="col-3 py-1 my-1">
           <img class="cartimg" src="{{asset($cart->pic)}}" alt="">
           <!-- <img class="cartimg" src="{{$cart->pic}}" alt="" name="pic">-->
        </div>
        <div class="col-2 py-3 my-3">
            <h5 name="product_name">{{$cart->product_name}}</h5>
        </div>
        <div class="col-2 py-3 my-3">₹<span class="price">{{$cart->price}}</span></div>
        <div class="col-2 py-3 my-3">
            <div class="plusminus horiz">
                <button class="minus">-</button>
                <input class="productQty" type="number" name="quantity" value="{{$cart->quantity}}" >
                <button class="plus">+</button>
            </div>
        </div>
        <div class="col-2 py-3 my-3">₹<span class="totalprice"></span>.00</div>
    </div>
    
    @endforeach
    
    <div class="row border-bottom justify-content-end">
        <div class="col-2 py-1 my-1">
            <p>Please enter a coupon code</p>
        </div>
        <div class="col-3 py-2 my-2">
            <input style="border-radius:10px" type="text" name="couponcode" id="#coupon">
        </div>
        <div class="col-1 py-1 my-1">
            <p>Discount</p>
        </div>
        <div class="col-2 py-1 my-1">₹<span class="finaltotal"></span>.00</div>
    </div>
  
    <div class="row border-bottom justify-content-end">
            <div class="col-2 py-1 my-1">Total</div>
            <div class="col-2 py-1 my-1">₹<span class="finaltotal"></span>.00</div>
        </div>

    <div class="row border-bottom justify-content-end">
        <div class="col-sm-12 col-md-8 py-2 my-2">
            <button class="px-2 btn">
                <a href="/">Continue shopping</a>
            </button>
            <button class="px-2 btn">
                <a href="/cart">Manage Boxes</a>
            </button>
            <button class="px-2 btn">
                <a href="/checkout">Checkout</a>
            </button>
        </div>
    </div>
</div>

@endsection

