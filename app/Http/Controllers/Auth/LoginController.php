<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Redirect;
use App\User;
use App\address;
use Session;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Input;
class LoginController extends Controller

{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
        
    }


    public function showLogin(){
        return view('existinguser');
    }
    
    public function login(Request $request){
         $this->validate($request,[
       
           'email'=>'required|email|max:255',
           'password'=>'required',
         ]);
 
         $data=$request->only('email','password');
        
             if(Auth::attempt(['email'=>$data['email'],'password'=>$data['password']])){
                Session::put('frontSession',$data['email']);
                return redirect('/home');
             }
             else{
                return redirect()->back();
                 }

    
         }

         public function logout(Request $request) {
            Auth::logout();
            Session::forget('frontSession');
            return view('existinguser');
          }

          public function showLinkRequestForm()
          {
              return view('forgotpass');
          }
          }

