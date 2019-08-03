@extends('layout.thegoodroad')
@section('content')
    <div class="container">
        <div class="row align-items-center">
            <div class="col-6">
                <img src="{{asset('Files/image/customBox/box1.png')}}" style="widht: 300px; height: 300px" alt="">
                <div class="row justify-content-center align-items-center">
                    <div class="col-8 pb-3 mb-3">
                        <ion-icon name="arrow-round-back" class></ion-icon>
                        <ion-icon name="arrow-round-forward"></ion-icon>
                    </div>
                </div>
            </div>
            <div class="col-6"></div>
        </div>
    </div>
@endsection