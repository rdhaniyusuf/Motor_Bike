@extends('main')

@section('content')

    
      <div class="mx-auto text-center">
          <font  style="color: gray;"><h2><b>{{$data -> namaOnderdil}}</b> </h2></font>
      </div>
      
      <div class="tab-content container">
          <div class="tab-pane fade show active" id="foto" role="tabpanel" aria-labelledby="home-tab">
              <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">                      
                      <div class="carousel-inner">                                                      
                                  <div class="carousel-item active">
                                      <!--item slider start-->
                                      <img src="http://localhost/Backend/assets/motor/onderdil/{{$data->imgOnderdil}}" class="d-block" alt="...">
                                  </div>
                      </div>
                      
              </div>
          </div>
            <!--end corausel-->
            <!--start deskripsi video-->
          <div role="tabpanel" class="tab-pane fade" id="video"> 
            <video controls="controls" width="100%" height="440">
              <source src="http://localhost/Backend/assets/vid/b.mp4" type="video/mp4" />              
            </video> 
          </div>
            <!--deskripsi video end-->
            <!--deskripsi map start-->
          <div role="tabpanel" class="tab-pane fade" id="lokasi">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3953.2831031973287!2d110.4066334143565!3d-7.759770579104437!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7a599bd3bdc4ef%3A0x6f1714b0c4544586!2sUniversitas+Amikom+Yogyakarta!5e0!3m2!1sid!2sid!4v1562469208598!5m2!1sid!2sid" width="100%" height="440" frameborder="0" style="border:0" allowfullscreen></iframe>
          </div>
       <!--deskripsi map end-->

    <!--isi deskripsi end-->

    <!--nav deskripsi start-->
            <div align="center">
              <ul class="nav nav-tabs justify-content-start" >
                <li class="nav-item">
                  <a class="nav-link text-success" href="#foto" aria-controls="home" role="tab" data-toggle="tab"><img src="{{asset('assets/img/foto.png')}}" width="30"> 
                      <br> Foto
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link text-success" href="#video" aria-controls="komen" role="tab" data-toggle="tab"> 
                    <img src="http://localhost/Backend/assets/img/video.png" width="30">
                      <br> Video
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link text-success" href="#lokasi" aria-controls="komen" role="tab" data-toggle="tab">
                    <img src="http://localhost/Backend/assets/img/Lokasi.png" width="30">
                      <br>Lokasi
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link text-success" href="#simpan" aria-controls="komen" role="tab" data-toggle="tab">
                    <img src="http://localhost/Backend/assets/img/love.png" width="30">
                    <br>simpan
                  </a>
                </li>
              </ul>
            </div>
    <!--nav deskripsi end-->
      </div>

<div style="padding-left:20px; padding-top:20px">
    <div class="col-sm-8 ">               
    </div>

    <div class="col-sm-4">
          <div class="card mb-4 border-25 center">
          
              <div class="card-body">               
                <h5 class="card-title text-center">Pemesanan</h5>
                <form class="form-signin" action="" method="post">
                    @csrf
                    <h2 class="card-title pricing-card-title">Rp.  {{number_format($data->hargaOnderdil)}} <small class="text-muted"></small></h2>
                      <ul class="list-unstyled mt-3 mb-4 text-muted">
                          <li><b class="jenis-kos"> <h4> {{$data->namaOnderdil}} </h4></b></li>
                          <li type="bullet"><img src="http://localhost/Backend/assets/image/small-centang.png" alt="" style="width: 10px"><small>{{$data->updated_at}}</small></li>
                        </ul>
                        <a href="{{route('onderdildetail', ['id' => $data->idOnderdil])}}">
                          <button type="button" class="btn btn-lg btn-block btn-outline-primary">Pesan Sekarang</button>
                        </a>
                </form>
              </div>
          
          </div>           
    </div>  
</div>

    <tr>
      <td height="38" >
        <div style="padding-left: 10px">
          <div class="tab-content">
            <div class="tab-pane fade bg-white show active" id="fasilitas" role="tabpanel" aria-labelledby="home-tab">

@endsection