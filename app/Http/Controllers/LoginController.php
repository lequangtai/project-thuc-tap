<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\LoginRequest;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
class LoginController extends Controller
{
     public function getLogin(){
    if(!Auth::check()){
      return view('admin.module.login.login');
    } else{
      return redirect('admin');
    }
    
   }
   public function postLogin(LoginRequest $request){
    $login =[
        'username' =>$request->txtUser,
        'password' =>$request->txtPass,
        'level'=>1
    ];
    if (Auth :: attempt($login)){
        return redirect('admin');

    }else{
        return redirect()->back();
    }


  }
   
	public function getLogout(){
		Auth::logout();
		return redirect()->route('getLogin');
	}
}