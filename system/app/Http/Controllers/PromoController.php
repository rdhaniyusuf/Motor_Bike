<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Promo;
use App\Models\Motor;
use App\Models\BerandaImage;

class PromoController extends Controller
{
    public function index(){

       // $promo = Promo::get();
        
       $promo = Promo::all();
       $image = BerandaImage::get();

        return view('pages.promo')
                //->withPromo($promo)
                ->withpromo($promo)
                ->withimage($image)     
        ;
       
    }
}
