@extends('layout.thegoodroad')
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
@endsection