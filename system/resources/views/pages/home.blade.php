@extends('main')

@section('content')
<!-- Slider Start -->
<nav class="nav">
        <div class="col">
            <div class="carousel-item active">
              <img src="http://localhost/Backend/assets/motor/content/mtrImg1.jpg" class="border-40 w-100" alt="..." >
              <div class="carousel-caption d-none d-md-block">
                <div class="text-light">
                  <h2 class="display-2 font-weight-lighter">Motor Bike</h2>
                  <p>Mulai Pencarian dan Beli Sekarang</p> 
                </div>
                <div>
                  <form class="my-2 my-lg-0">
                      <div class="form-group mb-2">
                        <input class="form-control mr-sm-2 " type="search" placeholder="Cari" aria-label="Search">
                      </div>
                        <button class="btn btn-outline-success my-2 my-sm-0" type="submit" >Pencarian</button>
                  </form>
                </div>
                  
              </div>
            </div>
        </div> 
    </nav>
    <!-- Slider End -->



    <!-- Middle Content Start -->
    <div class="container" style="align-content: center; text-align: center">
          <h3 style="text-align: center; padding-top: 20px;">Khusus Untuk Member Motor Bike</h3>
          <div class="text-muted">
          @if(Auth::check())
            <span>Selamat datang {{Auth::User()->nama}}</span>
          @else
            <p><a href="{{route('login')}}">Masuk</a> atau <a href="{{route('registrasi')}}">Registrasi</a></p>
          @endif
          </div>
      </div>
    <div class="row" style="text-align: center">
      <div class="col">
          <img src="http://localhost/Backend/assets/image/caution.png" alt="" style="width: 100px; height: 100px">
          <h5>Laporan Pelanggaran</h5>
      </div>
      <div class="col">
          <img src="http://localhost/Backend/assets/image/discount.png" alt="" style="width: 100px; height: 100px">
          <h5>Kartu Diskon</h5>
      </div>
      <div class="col">
          <img src="http://localhost/Backend/assets/image/saved-list.png" alt="" style="width: 100px; height: 100px">
          <h5>Daftar Simpanan</h5>
      </div>
      <div class="col">
          <img src="http://localhost/Backend/assets/image/riwayat.png" alt="" style="width: 100px; height: 100px">
          <h5>Riwayat Transaksi</h5>
      </div>
    </div>
    <!-- Middle Content End -->



    <!--Ending Content Start -->
    <div class="container" style="padding-top: 20px; padding-bottom: 20">
      <hr>
    </div>
    
            <div class="row justify-content-end">
                    <div class="col-md-12  col-md-7 oflow-hidden" style="height: auto; position: relative; z-index: 1" >

                      <div class="row justify-content-center" style="position: relative; z-index: 1; cursor: all-scroll;" >
                        
                        <div class="swiper-scrollbar"></div> 

                        <div class="col-md-10">

                          <h5 class="color-white" style="margin-bottom:20px;"><b style="color: black">TERLARIS</b></h5>

                          <div class="swiper-container oflow-visible" data-slide-effect="slide" data-autoheight="false" 
                              data-swiper-speed="900" data-swiper-margin="25" data-swiper-slides-per-view="4"
                              data-swiper-breakpoints="true" data-scrollbar="true" data-swiper-loop="false"
                              data-swpr-responsive="[1, 2, 2, 2]">
                          
                            <div class="swiper-wrapper">

                            @foreach($promo as $dataPromo)

                                          <div class="swiper-slide">
                                          
                                              <div class="card mb-4 border-25">
                                                  <div>
                                                      <img class="card-img-top" src="http://localhost/Backend/assets/motor/motor/{{$dataPromo->motor['imgmtr']}}"  alt="Card image cap">
                                                          <div class="card-body">
                                                                    <h2 class="card-title text-muted">IDR. <span style="text-decoration: line-through">{{number_format($dataPromo->motor['hargaMtr'])}}</span></small></h2>
                                                                    <h6 class="card-title pricing-card-title">Promo : IDR.  {{number_format($dataPromo->hargaPromo)}}</h6>
                                                                    <ul class="list-unstyled mt-3 mb-4 text-muted">
                                                                        <li><b class="jenis-kos">Plat</b> <b>{{$dataPromo->motor['platMtr']}}</b></li>
                                                                        <li type="bullet">{{$dataPromo->motor['keteranganMtr']}}</li>
                                                                        <li type="bullet"><img src="http://localhost/Backend/assets/image/small-centang.png" alt="" style="width: 10px"><small> - Update {{$dataPromo->updated_at}}</small></li>
                                                                    </ul>
                                                                    <a href="{{route('moge1', ['id' => $dataPromo->idmotor])}}">
                                                                      <button type="button" class="btn btn-lg btn-block btn-outline-primary" >Telusuri</button>
                                                                    </a>
                                                          </div>
                                                  </div>
                                              </div> <!-- swiper-slide -->
                                        </div>
                              @endforeach
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
            </div>

    <!-- Middle Footer Start -->
      <Div class="container">
        <div class="row text-center"><H3>Kenapa Lebih Memilih Motor Bike</H3></div>
        <div class="row justify-content-start">
            <div class="col-2,5">
               <img src="http://localhost/Backend/assets/image/love-icon.png" alt="" class="d-block" width="150px">
            </div>
            <div class="col-6" style="padding-top:50px">
              <h5>Harga Sesuai Hati</h5>
              <p class="text-justify">Harga Yang kami tawarkan pastinya lebih bersahabat dibandingkan dengan start up yang lain</p>
            </div>
        </div>
        <div class="row justify-content-end">
            <div class="col-6 text-right ">
              <h5>Kemudahan Bertransaksi</h5>
              <p class="text-justify">Dalam melakukan transaksi dengan menggunakan beberapa Mitode</p>
            </div>
            <div class="col-3">
                <img src="http://localhost/Backend/assets/image/transaction-icon.png" alt="" class="d-block" width="150px" height="">
            </div>
        </div>
        <div class="row justify-content-start">
          <div class="col-2,5">
             <img src="http://localhost/Backend/assets/image/discount.png" alt="" class="d-block" width="150px">
          </div>
          <div class="col-6" style="padding-top:50px">
            <h5>Diskon Terbaik</h5>
            <p class="text-justify">Kerja sama yang kami jalin beberapa pemilik motor dapat memuculkan potongan harga yang tebaik</p>
          </div>
        </div>
        <div class="row justify-content-end" style="padding-bottom: 50px;">
          <div class="col-6 text-right" style="padding-top: 30px;">
            <h5>Barang Terjamin Keasliannya</h5>
            <p class="text-justify">Percayakan barang yang kami jual, walau dengan harga yang murah, kami tidak menjual barang dari pasar gelap</p>
          </div>
          <div class="col-3">
              <img src="http://localhost/Backend/assets/image/security-icon.png" alt="" class="d-block" width="150px" height="">
          </div>
        </div>
      </Div>        
    <!-- Middle Footer End-->

@endsection