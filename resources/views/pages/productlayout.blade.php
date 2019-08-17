@extends('layout.thegoodroad')
@section('content')
<div class="container pt-5 mt-5">
    <div class="row jsutify-content-center">
        <div class="col-12">
            <p class="text-center main-text">PASTEL VIBRANCE NOTEBOOK</p>
        </div>
    </div>
    <div class="row jsutify-content-center">
        <div class="col-12">
            <p class="text-center sub-text">By CREATIVE MIDDLE</p>
        </div>
    </div>
    <div class="row justify-content-around">
        <div class="col-sm-12 col-md-6">
            <img class="product-description-image" src="{{asset('files/image/pastelvibrancenotebook.jpg')}}" alt="">
        </div>
        <div class="about-product col-sm-12 col-md-6">
            <ul>
                <li>
                    <p class="product-price">₹<span class="price">399</span>.00</p>
                </li>
                <li>
                    <p class="description">The Pastel Vibrance journal features a vivacious full-colour geometric cover.
                        Its packed with 128 blank pages for your big ideas.</p>
                </li>
                <li>
                    <p class="specification"><b>Specifications</b> -128 Blank Pages</p>
                </li>
                <li>
                    <p class="note"><b>Note</b> -0</p>
                </li>
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
                </li>
            </ul>
        </div>
    </div>
</div>
@endsection