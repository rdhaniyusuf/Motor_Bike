@extends('main')

@section('content')

    <div class="container text-center">
        <h2><b style="color:grey">Data Motor Pesanan</b></h2>    
    </div>
    <div class="container">
    <br>
    @foreach($pemesanan as $data)

        <div class="row">
            <div class="col-4">
                <img class="d-block w-100" height="150px" style="border-radius:20px;" src="http://localhost/Backend/assets/motor/motor/{{$data->motor['imgmtr']}}" alt="">
            </div>
            <div class="col-8">
                <div>
                    <h3><b>Keterangan</b></h3>
                </div>
                <div class="row">
                    <div class="col-4 ">
                        Nama 
                    </div>
                    <div class="col-1 ">
                        : 
                    </div>
                    <div >
                        {{$data->motor['namaMtr']}}
                    </div>
                </div>
                <div class="row">
                    <div class="col-4 ">
                        Jenis  
                    </div>
                    <div class="col-1 ">
                        : 
                    </div>
                    <div >
                        {{$data->motor['jenisMtr']}}
                    </div>
                </div>
                <div class="row">
                    <div class="col-4 ">
                        Keterangan  
                    </div>
                    <div class="col-1 ">
                        : 
                    </div>
                    <div >
                        {{$data->motor['keteranganMtr']}}
                    </div>
                </div>
                <div class="row">
                    <div class="col-4 ">
                        Tanggal Pesan   
                    </div>
                    <div class="col-1 ">
                        : 
                    </div>
                    <div >
                        {{$data->created_at}}
                    </div>
                </div>


                <div><br></div>
                <div class="row">
                    
                   
                    <div class="right">
                       <h2>IDR. {{number_format($data->motor['hargaMtr'])}}</h2> 
                    </div>
                    <div class="col-3"></div>
                    <div class="">
                    <a href="{{route('hapus_pesanan',['id' => $data->id_pemesanan])}}"><div class="container" style="padding-bottom:30px"><button type="button" class="btn btn-dark btn-lg" >Hapus Pesanan</button></div></a>
                    </div>
                </div>
            </div>
        </div>
        <hr>
    @endforeach
    
    </div>

<div>
    <br>
    <br>    
</div>

@endsection