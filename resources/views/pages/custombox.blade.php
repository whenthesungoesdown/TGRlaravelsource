{{-- @extends('layout.thegoodroad')
@section('content')
<div class="row justify-content-center">
    <div class="col-8"><img class="stepsimg" src="{{asset('Files/Image/steps.png')}}" alt=""></div>
</div>    



<div class="container container-fluid">
        <div class="card">
            <img class="boximg" src="{{asset('Files/Image/customBox/box1.png')}}" />
            <div class="card__head">CAPACITY : 6 ITEMS</div>
        </div>
        <div class="card">
            <img class="boximg" src="{{asset('Files/Image/customBox/box2.png')}}" />
            <div class="card__head">CAPACITY : 4 ITEMS</div>
        </div>
        <div class="card">
            <img class="boximg" src="{{asset('Files/Image/customBox/box3.png')}}" />
            <div class="card__head">CAPACITY : 4 ITEMS</div>
        </div>
        <div class="card">
            <img class="boximg" src="{{asset('Files/Image/customBox/box4.png')}}" />
            <div class="card__head">CAPACITY : 4 ITEMS</div>
        </div>
        <div class="card">
            <img class="boximg" src="{{asset('Files/Image/customBox/box5.png')}}" />
            <div class="card__head">CAPACITY : 4 ITEMS</div>
        </div>
    </div>
@endsection --}}
@extends('layout.thegoodroad')
@section('content')
<div class="container">
    <div class="row align-items-center">
        <div class="col-12">
            <nav class="circular-menu">
                <input class="circular-menu__button" id="circular-menu" type="checkbox" href="javascript: void 0" checked="checked" />
                <label class="circular-menu__icon selected" for="circular-menu">
                    <img class="boximg" src="{{asset('Files/Image/customBox/box1.png')}}" alt="">
                </label>
                <a class="circular-menu__item" href="#">
                    <img class="boximg" src="{{asset('Files/Image/customBox/box1.png')}}" alt="">
                </a>
                <a class="circular-menu__item" href="#">
                    <img class="boximg" src="{{asset('Files/Image/customBox/box2.png')}}" alt="">
                </a>
                <a class="circular-menu__item" href="#">
                    <img class="boximg" src="{{asset('Files/Image/customBox/box3.png')}}" alt="">
                </a>
                <a class="circular-menu__item" href="#">
                    <img class="boximg" src="{{asset('Files/Image/customBox/box4.png')}}" alt="">
                </a>
                <a class="circular-menu__item" href="#">
                    <img class="boximg" src="{{asset('Files/Image/customBox/box5.png')}}" alt="">
                </a>
            </nav>
        </div>
        <div class="col-6"></div>
    </div>
</div>

@endsection