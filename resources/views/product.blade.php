@extends('layout.thegoodroad')
@section('content')

<div class="container px-5 mx-5 mb-5">
@foreach($product as $prod)
    <div class="row jsutify-content-center">
        <div class="col-12">

            <p class="text-center main-text">{{$prod->title}}</p>
        </div>
    </div>
    <div class="row jsutify-content-center">
        <div class="col-12">
            <p class="text-center sub-text">By {{$prod->brand}}</p>
        </div>
    </div>
    <div class="row justify-content-around">
        <div class="col-sm-12 col-md-6">
            <div class="exzoom" id="exzoom">
                <div class="exzoom_img_box">
                    <ul class='exzoom_img_ul'>
                        <li><img src="{{asset($prod->pic1)}}" /></li>
                        <li><img src="{{asset($prod->pic2)}}" /></li>
                        <li><img src="{{asset($prod->pic3)}}" /></li>
                    </ul>
                </div>
                <div class="exzoom_nav"></div>
            </div>
        </div>
        <div class="about-product col-sm-12 col-md-6">
            <ul>
                <li>
                    <p class="product-price" style="font-size:30px"><b>₹{{$prod->price}}.00</b></p>
                </li>

                <li>
                    <p class="description">{{$prod->description}}</p>
                </li>
                @if(count($prod->note) > 0)
                <li>
                    <p class="specification"><b>Specifications -</b> {{$prod->note}}</p>
                </li>
                @endif
                @if(count($prod->material) > 0)
                <li>
                    <p class="material"><b>Material -</b> {{$prod->material}}</p>
                </li>
                @endif
                <li>

                    <div class="row justify-content-around">
                        <div class="col-6">

                            <h4 class="mb-5" style="border-bottom:1px solid black; width: 120%">Choose Quantity</h4>
                        </div>

                        <div class="col-6">

                            <div class="plusminus horiz">
                                <button class="minus minus-product">-</button>
                                <input class="productQty productQty-product" type="number" name="productQty" id="qty2">
                                <button class="plus plus-product">+</button>
                            </div>
                        </div>
                    </div>
                    <div class="row justify-content-start">
                        <form name="addtocartform" id="addtocartform" action="{{route('addtocart')}}" method="get">
                            {{csrf_field()}}
                            <input type="hidden" name="product_id" value="{{$prod->id}}">
                            <input type="hidden" name="product_name" value="{{$prod->title}}">
                            <input type="hidden" name="price" value="{{$prod->price}}">
                            <input type="hidden" name="quantity" id="qty1" class="finalquantity finalquantityProduct">

                            <!-- <button type="submit"  value="submit">  -->

                            <div class="col-1">
                                <a href="#">
                                    <ion-icon class="wishlist" name="heart-empty"></ion-icon>
                                </a></div>
                            <div class="col-1">
                                <a href="{{route('addtocart')}}">
                                    <button type="submit" value="submit" style="background-color:transparent; border:0px;">
                                        <ion-icon class="cart" name="cart"></ion-icon>
                                    </button>
                                </a>
                            </div>

                        </form>
                    </div>
                </li>
            </ul>
        </div>
    </div>
@endforeach
</div>


@endsection

@section('jsscript')
    <script src="{{asset('Files/JS/main.js')}}"></script>
@stop