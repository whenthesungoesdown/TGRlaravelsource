@extends('layouts.thegoodroad')
@section('content')

<div class="container px-5 mx-5 mb-5">
@foreach($product as $item)

    <div class="row jsutify-content-center">
        <div class="col-12">

            <p class="text-center main-text">
           
            {{$item->title}}
           
            </p>
        </div>
    </div>
    <div class="row jsutify-content-center">
        <div class="col-12">
            <p class="text-center sub-text">By {{$item->brand}}</p>
        </div>
    </div>
    @if (Session::has('success'))
             {{ Session::get('success') }}
    @endif
    <div class="row justify-content-around">
        <div class="col-sm-12 col-md-6">
            <div class="exzoom" id="exzoom">
                <div class="exzoom_img_box">
                    <ul class='exzoom_img_ul'>
                        <li><img src="{{ asset($item->pic1) }}" name="main-img" /></li>
                        <li><img src="{{asset($item->pic2)}}" /></li>
                        <li><img src="{{asset($item->pic3)}}" /></li>
                    </ul>
                </div>
                <div class="exzoom_nav"></div>
            </div>
        </div>
        <div class="about-product col-sm-12 col-md-6">
            <ul>
                <li>
                    <p class="product-price" style="font-size:30px"><b>₹{{$item->price}}.00</b></p>
                </li>

                <li>
                    <p class="description">{{$item->description}}</p>
                </li>
                
                <li>
                    <p class="specification"><b>Specifications -</b> {{$item->note}}</p>
                </li>
                
             
                <li>
                    <p class="material"><b>Material -</b> {{$item->material }}</p>
                </li>
                
                <li>
        
                    <div class="row justify-content-around">
                        <div class="col-6">
                                        
                            <h4 class="mb-5" style="border-bottom:1px solid black; width: 120%">Choose Quantity</h4>
                        </div>
                        
                        <div class="col-6">
                        
                            <div class="plusminus horiz">
                            
                                <button class="minus">-</button>
                                
                                <input class="productQty" type="number" name="productQty" id="qty2" >
                                <button class="plus">+</button>
                            </div>
                        </div>
                    </div>
                    <div class="row justify-content-start">
                    <form name="addtowishlistform" id="addtowishlistform"  action="{{route('wishlist')}}"  method="get">{{csrf_field()}}
                        <input type="hidden" name="product_id" value="{{$item->id}}">
                        <input type="hidden" name="product" value="{{$item->title}}">
                        <input type="hidden" name="price" value="{{$item->price}}">
                       
                      
                       
                        <div class="col-1"><a href="{{route('wishlist')}}">
                        <button type="submit"  value="submit" style="background-color:transparent; border:0px;">
                                <ion-icon class="wishlist" name="heart-empty"></ion-icon></button>
                            </a></div>
                       </form>
                            <form name="addtocartform" id="addtocartform"  action="{{route('addtocart')}}"  method="get">{{csrf_field()}}
                        <input type="hidden" name="product_id" value="{{$item->id}}">
                        <input type="hidden" name="product_name" value="{{$item->title}}">
                        <input type="hidden" name="price" value="{{$item->price}}">
                        <input type="hidden" name="quantity" id="qty1" class="finalquantity">
                        <div class="col-1"><a href="{{route('addtocart')}}"><button type="submit"  value="submit" style="background-color:transparent; border:0px;">
                                <ion-icon class="cart" name="cart"></ion-icon></button>
                            </a></div>
                        
                     </form>  
                    </div>
                </li>
            </ul>
        </div>
    </div>
    
    @endforeach
</div>
@endsection