@extends('layouts.thegoodroad')
@section('content')
    <div class="container">
  
   
        <div class="h3 text-center py-3 my-3" style="font-weight:600; font-size:36px">WISHLIST</div>
       
        <table class="table table-striped mb-5" style="border:2px solid black">
       
            <thead style="margin:0 10px">
              <tr>
                <th scope="col">Product</th>
                <th scope="col">Price</th>
                <th scope="col">Image</th>
                <th scope="col">Move To Cart</th>
                <th scope="col">Remove</th>
              </tr>
            </thead>
                                 
            <tbody>
            @foreach($userprod as $wishitem)
              <tr>
                <td class="pt-4">{{$wishitem->product}}</td>
                <td class="pt-4">{{$wishitem->price}}</td>
                <td><img style="height:70px; width:70px" src="{{asset($wishitem->pic)}}" alt=""></td>
                <td class="pt-4"><a href="#"> <button type="submit"  value="submit" style="background-color:transparent; border:0px;"><ion-icon style="margin-left:35px" name="cart"></ion-icon></button></a></td>
                <td class="pt-4"><a href="{{url('/wishlist/deleteproduct/'.$wishitem->id)}}"><ion-icon style="margin-left:25px" name="trash"></a></ion-icon></td>
              </tr>
              @endforeach
            </tbody>
           
        </table>
      
    </div>
@endsection