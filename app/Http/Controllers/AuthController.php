<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function register(Request $request){
        
        $data=$request->validate([
            'name'=>'required',
            'email'=>'required|email|unique:users',
            'password'=>'required|min:6|confirmed' 
        ]);
        // dd($data);
        $data['password']=Hash::make($data['password']);
        User::create($data);
        return redirect()->route('login')->with('success' ,'Account created successfully');
    }

    public function login(Request $request){
        $credentials =$request->validate([
            'email'=>'required|email',
            'password'=>'required'
        ]);
        // dd($data);
        if (Auth::attempt($credentials )){
            return redirect()->route('home')->with('success' ,'Login successfully');
        }
        return back()->withErrors(['email'=>'Invalid Credentials']);

    }  
    
    public function logout(){
        Auth::logout();
        return redirect()->route('login');
    }
}