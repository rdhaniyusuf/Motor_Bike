<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Onderdil;

class OnderdilController extends Controller
{
    public function index(){

        $datonderdil = Onderdil::get();

       // $onderdil = Onderdil::get();

       
        ($datonderdil->toArray());
       // dd($onderdil->All()); 
                            
        return view('pages.onderdil')
                //->withOnderdil($onderdil)
                ->withData($datonderdil)   
        ;
       
    }
}
