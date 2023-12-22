<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Auth;

class LoginController extends Controller
{
    public function pageLogin(Request $request){ 
        //dd($request->toArray());              
       // Auth::logout();
        return view('login');
    }
    public function logout(Request $request) {
        $request->session()->flush();
        //Auth::logout();
        return Redirect()->route('home');
      }
    
}
