<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\User;
use Validator;
use Auth;
use Hash;

class TestLagiController extends Controller {

    public function __construct(){
        $this->middleware(['web']);
    }

    public function fnLogin(Request $request) {
        //dd($request -> toArray());
        $validator = Validator::make($request->all(),
            [
                'email'=>'required|email',
                'password'=>'required'
            ],

            ['email.required'=>'Nama Harus Di isikan','password.required'=>'password Diharuskan']
        );

        if ($validator->fails()) {
            return response()->json([
                'status' => 500,
                'message' => 'Email dan password harus diisi'
            ]);
        }      
        
        $credentials = $request->only('email', 'password');

            $email = $request->email;
            $password = $request->password;

            

        if (Auth::attempt($credentials)) {
            //Auth::Pelanggan()->nam
            //$request->session()->put('nama', $user->id);
           //($request -> toArray());
           //dd(Auth()::nama)
           //return redirect()->back();

            if($request->has('url')){
                return redirect($request->url);
            }
            

           return redirect()->route('home');  
           //return view('pages.home')
            
        }else{
           return response()->json([
            'status' => 500,
            'message' => 'Email dan password tidak sesuai'
        ]); 
        }
      
        
        
    }

    
    public function doRegistration(Request $request){
        $validator = Validator::make($request->all(),
            [
                'email'     =>'required|email|unique:pelanggan',
                'nama'      =>'required',
                'password'  => 'required'
            ],
            [
                'email.required'    =>'Email Harus Di isikan',
                'nama.required'     =>'Nama Harus Di isikan',
                'username.required' =>'Username Diharuskan'
            ]
            );
             if ($validator->fails()){
                                  return redirect()->back()
                                                ->withErrors($validator)
                                                ->withInput();               
                        }
        
        $new_user = new User();
        $new_user->email        =       $request->input('email');
        $new_user->nama         =       $request->input('nama');
        $new_user->password     =       bcrypt($request->input('password'));
        $new_user->save();

        return redirect('/login');
 
    }
}
   