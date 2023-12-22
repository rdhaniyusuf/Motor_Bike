<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Onderdil;
use App\Models\User;
use Auth;

class OnderdildetailController extends Controller
{

    public function Onderdildetail(Request $request, $id){ 
        $dataOnderdil = Onderdil::where('idOnderdil','=', $id)->first();
        //dd($onderdil->toArray()); 
        return view('pages.onderdildetail', ['data' => $dataOnderdil]);
    }
}
