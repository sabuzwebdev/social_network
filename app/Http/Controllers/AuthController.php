<?php

namespace App\Http\Controllers;
use App\User;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function getSignup(){
        return view('auth.signup');
    }
    public function postSignup(Request $request){
        $this->validate($request,[
            'email'=>'required|unique:users|email|max:255',
            'username'=>'required|unique:users|alpha|min:4',
            'password'=>'required|min:5'
        ]);

        User::create([
            'email'=> $request->input('email'),
            'username'=> $request->input('username'),
            'password'=> bcrypt($request->input('password')), //we want to make hash password
        ]);

        return redirect()->route('home')->with('info','Your Account has been created');
    }
}
