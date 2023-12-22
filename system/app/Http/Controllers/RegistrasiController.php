<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
Use App\Models\RegistrasiImg;

class RegistrasiController extends Controller
{
    public function index(Request $request){

        $dataRegistrasi = RegistrasiImg::get();
        //dd($dataRegistrasi->toArray());

        return view('pages.registrasi')
            ->withdata($dataRegistrasi)
            ;
    }
}