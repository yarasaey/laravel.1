<?php

namespace App\Http\Controllers;
use App\Models\User;
use Auth;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function register(Request $request) {
        return view('front.auth.register');
  
    }
public function storeuser(Request $request){
   $data= $request->validate(
        [
            'name'=>'required',
            'email'=>'required|email|unique:users',
            'password'=>'required|min:8|confirmed'
        ]
        );
        $data['password']=bcrypt($request->password);
        $user=User::create($data);
        Auth::login($user);
        return redirect()->route('home');
}
    public function login(Request $request) {
        return view('front.auth.login');


        
    }
    public function loginUser(Request $request){
        $data= $request->validate(
             [
                 
                 'email'=>'required|email',
                 'password'=>'required'
             ]
             );
             
             if(Auth::attempt($data)){
                return redirect()->route('home');
             }else{
                return back()->with('error','Invalid Credentials');
             }
             
     }

    public function logout() {
        Auth::logout();
        return redirect()->route('login');
        


        
    }
}
