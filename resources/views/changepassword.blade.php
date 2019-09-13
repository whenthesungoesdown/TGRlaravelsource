@extends('layouts.thegoodroad')
@section('content')
<div id="header">
    <div class="container-fluid px-0 mx-0">
        <div class="row justify-content-center">
            <div class="col-sm-12 col-md-6">
                <div class="div px-3 mx-3 py-5 my-5" style="">
                    <div style="height: 50px; background-color: #73d0d7; border-radius: 35px 35px 0 0">
                        <h4 class="text-center py-3" style="font-size: 18px; color: white;">LOGIN</h4>
                    </div>
                    <div class="" style="height: auto; background-color: white; border-radius: 0 0 35px 35px">
                        <form class="px-4 mx-4 py-4" method="post" action="{{route('changepass')}}" >
                        @csrf
                            <div class="form-group">
                                <label for="InputEmail1">Email address</label>
                                <input type="email" class="form-control" id="InputEmail1" aria-describedby="emailHelp" placeholder="Enter email" name="email" />
                            </div>
                            <div class="form-group">
                                <label for="InputPassword1">New Password</label>
                                <input type="password" class="form-control" id="InputPassword1" placeholder="Password" name="new_pass" />
                            </div>
                            <div class="form-group">
                                <label for="InputPassword1">Confirm New Password</label>
                                <input type="password" class="form-control" id="InputPassword1" placeholder="Password" name="password_confirmation" />
                            </div>
                            <div class="row justify-content-end align-items-center">
                                <div class="col-12">
                                    <button style="margin-left:180px" type="submit" class="btn btn-primary">Login</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection