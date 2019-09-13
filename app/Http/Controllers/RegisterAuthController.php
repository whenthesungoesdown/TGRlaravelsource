<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Login;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\DB;
//use Auth;
use App\Register;
use Session;
use Illuminate\Support\Facades\Auth;
use App\User;



class RegisterAuthController extends Controller
{
    //
    public function showRegister(){
        return view('newuser');
    }
    
     public function registration(Request $request){
    if($request->isMethod('post'))
       {
        $data = $request->all();
        
        $usercount =User::where('email',$data['email'])->count();
        if($usercount>0)
        {
            return redirect()->back()->with('msg','Email already exists');

        }
        else{
            $user = new User;
            $user->name = $data['name'];
            $user->email = $data['email'];
            $user->mob_num = $data['mob_num'];
            $user->password = bcrypt($data['password']);
            $user->password_confirmation=bcrypt($data['password_confirmation']);
            $user->save();
           return redirect('/');
        
           
            
          
            

        }
       } 
      }

   
    public function validation($request){
        $this->validate($request,[
       
            'name'=>'required|max:255',
            'email'=>'required|email|max:255',
            'mobile'=>'required|digits:10',
            'password'=>'required|confirmed',
           

        ]);
    }



}




