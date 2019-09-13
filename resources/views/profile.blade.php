@extends('layouts.thegoodroad')
@section('content')
<div class="container-fluid py-5 my-5" style=" height: 800px; width: 100%">

    <h3 class="user-data py-3 my-3" style="font-size:40px">YOUR PROFILE</h3>
    @foreach($user as $userDetails)
    <div class="row align-items-center px-2 mx-2">
        <div class="col-3">
            <div class="card" style="width:25rem">
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">
                        <div>Name: <span class="user-name" style="margin-left:78px">{{$userDetails->name}}</span></div>
                    </li>
                    <li class="list-group-item">
                        <div>Phone Number: <input type='text' class="user-number" style="margin-left:9px" value="{{$userDetails->mob_num}}" name="mobile"></div>
                        <a href="#" style="margin-left:118px; margin-top: 5px"><button class="ml-3 btn btn-success" type="submit" >Change number</button></a>
                    </li>
                    <li class="list-group-item">
                        <div>Email: <span class="user-email" style="margin-left:79px">{{$userDetails->email}}</span></div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    @endforeach
    <h3 class="user-data py-3 my-3" style="font-size:40px">YOUR SAVED ADDRESSES</h3>
   
    <div class="row align-items-center justify-content-start">
     
        <div class="col-md-3 col-sm-12">
        @foreach($newDetails as $userAdd)
            <div class="card" style="width: 25rem;">
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">
                        <div>Name : <span class="user-name" style="margin-left:50px">{{$userAdd->name}}</span></div>
                    </li>
                    <li class="list-group-item">
                        <div>Number : <span class="user-number" style="margin-left:34px">{{$userAdd->number}}</span></div>
                    </li>
                    <li class="list-group-item">
                        <div>Address : <span class="user-address" style="margin-left:34px">{{$userAdd->address}}</span></div>
                    </li>
                    <li class="list-group-item">
                        <div>PinCode : <span class="user-pincode" style="margin-left:30px">{{$userAdd->pincode}}</span></div>
                    </li>
                    <li class="list-group-item">
                        <div>City : <span class="user-city" style="margin-left:65px">{{$userAdd->city}}</span></div>
                    </li>
                    <li class="list-group-item">
                        <div>State: <span class="user-state" style="margin-left:61px">{{$userAdd->state}}</span></div>
                    </li>
                </ul>
            </div>
            @endforeach
        </div>
        <a class="col-md-3 col-sm-12" href="#popup1" class="col-md-3 col-sm-12 add-address" style="margin-left:120px"><ion-icon style="width:100px; height:100px" name="add"></ion-icon></a>
        <div id="popup1" class="overlay">
            <div class="popup">
                <h2>Add New Address</h2>
                <a class="close" href="#">&times;</a>
                <form action="{{route('address')}}" method="post">
                 @csrf
                    <div class="content">
                        <div class="card" style="width: 335px;">
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item">
                                    <div>Name : <input style="margin-left:23px" type="text" class="user-name" name="name"></div>
                                </li>
                                <li class="list-group-item">
                                    <div>Number : <input style="margin-left:10px" type="text" class="user-number" name="number"></div>
                                </li>
                                <li class="list-group-item">
                                    <div>Address : <input style="margin-left:8px" type="text" class="user-address" name="address" ></div>
                                </li>
                                <li class="list-group-item">
                                    <div>PinCode : <input style="margin-left:8px" type="text" class="user-pincode" name="pincode"></div>
                                </li>
                                <li class="list-group-item">
                                    <div>City : <input style="margin-left:43px" type="text" class="user-city" name="city"></div>
                                </li>
                                <li class="list-group-item">
                                    <div>State: <input style="margin-left:35px" type="text" class="user-state" name="state"></div>
                                </li>
                            </ul>
                        </div>
                        <a href="#">
                            <button class="btn btn-success save">Save</button>
                        </a>
                    </div>
                </form>

            </div>
        </div>
    </div>
    
</div>
@endsection