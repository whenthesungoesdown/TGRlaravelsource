@extends('layout.thegoodroad')
@section('content')
<div class="container-fluid py-5 my-5" style=" height: 800px; width: 100%">
    <h3 class="user-data py-3 my-3" style="font-size:40px">YOUR PROFILE</h3>
    <div class="row align-items-center px-2 mx-2">
        <div class="col-3">
            <div class="card" style="width:25rem">
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">
                        <div>Name: <span class="user-name" style="margin-left:78px">Abhijeet</span></div>
                    </li>
                    <li class="list-group-item">
                        <div>Phone Number: <input type='text' class="user-number" style="margin-left:9px"></div>
                        <div style="margin-left:118px; margin-top: 5px"><button class="ml-3 btn btn-success">Change number</button></div>
                    </li>
                    <li class="list-group-item">
                        <div>Email: <span class="user-email" style="margin-left:79px">ak806252@gmail.com</span></div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <h3 class="user-data py-3 my-3" style="font-size:40px">YOUR SAVED ADDRESSES</h3>
    <div class="row align-items-center justify-content-start">
        <div class="col-md-3 col-sm-12">
            <div class="card" style="width: 25rem;">
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">
                        <div>Name : <span class="user-name" style="margin-left:50px">Abhijeet kumar gupta</span></div>
                    </li>
                    <li class="list-group-item">
                        <div>Number : <span class="user-number" style="margin-left:34px">7277280873</span></div>
                    </li>
                    <li class="list-group-item">
                        <div>Address : <span class="user-address" style="margin-left:34px">noida</span></div>
                    </li>
                    <li class="list-group-item">
                        <div>PinCode : <span class="user-pincode" style="margin-left:30px">201301</span></div>
                    </li>
                    <li class="list-group-item">
                        <div>City : <span class="user-city" style="margin-left:65px">noida</span></div>
                    </li>
                    <li class="list-group-item">
                        <div>State: <span class="user-state" style="margin-left:61px">up</span></div>
                    </li>
                </ul>
            </div>
        </div>
        <a class="col-md-3 col-sm-12" href="#popup1" class="col-md-3 col-sm-12 add-address" style="margin-left:120px"><ion-icon style="width:100px; height:100px" name="add"></ion-icon></a>
        <div id="popup1" class="overlay">
            <div class="popup">
                <h2>Add New Address</h2>
                <a class="close" href="#">&times;</a>
                <div class="content">
                    <div class="card" style="width: 335px;">
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">
                                <div>Name : <input style="margin-left:23px" type="text" class="user-name"></input></div>
                            </li>
                            <li class="list-group-item">
                                <div>Number : <input style="margin-left:10px" type="text" class="user-number" ></input></div>
                            </li>
                            <li class="list-group-item">
                                <div>Address : <input style="margin-left:8px" type="text" class="user-address" ></input></div>
                            </li>
                            <li class="list-group-item">
                                <div>PinCode : <input style="margin-left:8px" type="text" class="user-pincode"></input></div>
                            </li>
                            <li class="list-group-item">
                                <div>City : <input style="margin-left:43px" type="text" class="user-city"></input></div>
                            </li>
                            <li class="list-group-item">
                                <div>State: <input style="margin-left:35px" type="text" class="user-state"></input></div>
                            </li>
                        </ul>
                    </div>
                    <a href="#">
                        <button class="btn btn-success save">Save</button>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection