@extends('layout.thegoodroad')
@section('content')
<div class="container">
    <div class="row align-items-center">
        <div class="col-12">
            <nav class="circular-menu">
                <input class="circular-menu__button" id="circular-menu" type="checkbox" href="javascript: void 0" checked="checked" />
                <label class="circular-menu__icon" for="circular-menu">
                    <img class="box-img selected-img" src="{{asset('Files/Image/customBox/box1.png')}}" alt="">
                </label>
                <a class="circular-menu__item" href="#">
                    <img class="box-img" src="{{asset('Files/Image/customBox/box1.png')}}" alt="">
                </a>
                <a class="circular-menu__item" href="#">
                    <img class="box-img" src="{{asset('Files/Image/customBox/box2.png')}}" alt="">
                </a>
                <a class="circular-menu__item" href="#">
                    <img class="box-img" src="{{asset('Files/Image/customBox/box3.png')}}" alt="">
                </a>
                <a class="circular-menu__item" href="#">
                    <img class="box-img" src="{{asset('Files/Image/customBox/box4.png')}}" alt="">
                </a>
                <a class="circular-menu__item" href="#">
                    <img class="box-img" src="{{asset('Files/Image/customBox/box5.png')}}" alt="">
                </a>
            </nav>
        </div>
        <div class="col-6"></div>
    </div>
</div>

@endsection