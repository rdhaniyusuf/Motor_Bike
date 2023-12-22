<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PelangganController extends Controller
{
    public function pelanggan(){
        return view('pages.pelanggan');
    }

    public function profil(){
        return view('pages.profil_pelanggan');
    }
}