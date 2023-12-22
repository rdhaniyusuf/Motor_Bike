<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Promo;
use App\Models\Motor;   
use App\Models\Pemesanan;
use Auth;

class PemesananController extends Controller {

    public function index(Request $request, $id){

        //dd($request->toArray());

        // //dd(Auth::user()->id_pelanggan);
        
        $dataMotor = Motor::where('idmotor','=', $id)->first();

        $new_pemesanan = new Pemesanan();
        $new_pemesanan->id_pemesan      = Auth::user()->id_pelanggan;
        $new_pemesanan->id_motor        = $dataMotor->idmotor;
        $new_pemesanan->total           = $dataMotor->hargaMtr;

        $new_pemesanan->save();

        return redirect()->route('home');
    
    }

    public function data_pemesanan(Request $request){

        if (!Auth::check()){
            return redirect()->route('login');
        }

        //$data_pemesanan = Pemesanan::where('id_pemesan','=', Auth::user()->id_pelanggan)->first();
        $data_akhir = Pemesanan::with(['motor'])->get()->where('id_pemesan','=', Auth::user()->id_pelanggan);
        
        //dd($data_akhir->toArray());

        return view('pages.data_pemesanan')
                ->withpemesanan($data_akhir);
    }

    public function hapus_pemesanan (Request $request, $id){
        $dataPemesanana = Pemesanan::where('id_pemesanan','=', $id)->first();

        $dataYhapus = [
            'id_motor'      => $request->id_motor,
            'id_pemesan'    => $request->id_pemesan,
            'total'         => $request->total,            
        ];

        $delete = Pemesanan::where('id_pemesanan','=', $id)->delete($dataYhapus);
        return redirect()->route('data_pemesanan');
    }
}