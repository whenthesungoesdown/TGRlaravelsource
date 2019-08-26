@extends('layout.thegoodroad')
@section('content')
<div class="container px-5 mx-5 mb-5">
    <div class="row jsutify-content-center">
        <div class="col-12">
            <p class="text-center main-text">{{$product->title}}</p>
        </div>
    </div>
    <div class="row jsutify-content-center">
        <div class="col-12">
            <p class="text-center sub-text">By {{$product->brand}}</p>
        </div>
    </div>
    <div class="row justify-content-around">
        <div class="col-sm-12 col-md-6">
            <div class="exzoom" id="exzoom">
                <div class="exzoom_img_box">
                    <ul class='exzoom_img_ul'>
                        <li><img src="{{$product->pic1}}" /></li>
                        <li><img src="{{$product->pic2}}" /></li>
                        <li><img src="{{$product->pic3}}" /></li>
                    </ul>
                </div>
                <div class="exzoom_nav"></div>
            </div>
        </div>
        <div class="about-product col-sm-12 col-md-6">
            <ul>
                <li>
                    <p class="product-price" style="font-size:30px"><b>₹{{$product->price}}.00</b></p>
                </li>

                <li>
                    <p class="description">{{$product->description}}</p>
                </li>
                @if(count($product->note) > 0)
                <li>
                    <p class="specification"><b>Specifications -</b> {{$product->note}}</p>
                </li>
                @endif
                @if(count($product->material) > 0)
                <li>
                    <p class="material"><b>Material -</b> {{$product->material}}</p>
                </li>
                @endif
                <li>
                    <div class="row justify-content-around">
                        <div class="col-6">
                            <h4 class="mb-5" style="border-bottom:1px solid black; width: 120%">Choose Quantity</h4>
                        </div>
                        <div class="col-6">
                            <div class="plusminus horiz">
                                <button class="minus">-</button>
                                <input class="productQty" type="number" name="productQty" />
                                <button class="plus">+</button>
                            </div>
                        </div>
                    </div>
                    <div class="row justify-content-start">
                        <div class="col-1"><a href="#">
                                <ion-icon class="wishlist" name="heart-empty"></ion-icon>
                            </a></div>
                        <div class="col-1"><a href="#">
                                <ion-icon class="cart" name="cart"></ion-icon>
                            </a></div>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</div>
@endsection