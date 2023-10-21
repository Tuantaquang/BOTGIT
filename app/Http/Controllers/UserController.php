<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function login(){
        return view('user.user_login');
    }

    public function register(){
        return view('user.user_register');
    }

    public function create_account(Request $request){

        $request->merge(['password'=>Hash::make($request->password)]);
        try{
            User::create($request->all());
        }catch(\Throwable $th){
            dd($th);
        }
        // dd($request->all());
        return redirect()->route('login');
    }

    public function post_login(Request $request){
         
        if(Auth::attempt(['email' => $request->email, 'password' => $request->password])){
            return redirect()->route('infomation');
        }else{
            return redirect()->back()->with('error','sai tk mk');
        }
        
    }

    public function logout(){
        return view('user.user_login');
    }
}