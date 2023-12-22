@extends('main')

@section('content')
    <!-- Slider Start -->
    <nav class="nav" style="padding-bottom: 20px;">
        <div class="col">        
            <div class="carousel-item active center border-25" >
              <div class="row justify-content-md-center">
                <div class="center w-20" style="height: 400px; border-radius: 50px;" >
                  <img src="http://localhost/Backend/assets/image/icon-peringatan.png" alt="" style="opacity: 0.1">
                </div>
              </div>              
              <div class="carousel-caption ">
                <div class="text-light">
                  <h2 class="display-3 font-weight-lighter" >Pusat Bantuan</h2>
                  <div class="row justify-content-md-center">
                    <div class="col-4">
                        <p class="center">
                          Masukkan Pertanyaan
                        </p>
                        <hr>
                    </div>
                    
                  </div>
                </div>
                <div>
                  <form class="my-2 my-lg-0">
                      <div class="form-group mb-2">
                        <input class="form-control mr-sm-2 " type="search" placeholder="Masukkan Pertanyaan Anda" aria-label="Search">
                      </div>
                        <button class="btn btn-outline-success bg-dark my-2 my-sm-0" type="submit" >Pencarian</button>
                  </form>
                </div>
                  
              </div>
            </div>
        </div> 
    </nav>  
    <!-- Slider End -->

    
    <!-- Sub Menu Start -->
    <div class="container">
      <div class="row info-sub-menu " style="background-color:rgb(56, 117, 110); height: 50px;padding-top: 10px">
          <div class="custom-sub-menu-parent align-items-center col ">
            <div class="dropdown-toggle" style="color: white; text-align: center">Promo</div>
              <ul class="custom-sub-menu col-9">
                <li><a href="#">Cara Mengetahui Promo yang ada</a></li>
                <li><a href="#">Cara Memakai Promo</a></li>
                <li><a href="#">Cara Mendapatkan Promo</a></li>
              </ul>
          </div>
          <div class="custom-sub-menu-parent col">
            <div class="dropdown-toggle" style="color: white; text-align: center">Pemesanan</div>
              <ul class="custom-sub-menu col-9">
                <li><a href="#">Cara Melakukan Pemesanan</a></li>
                <li><a href="#">Cara Melakukan Pembayaran</a></li>
                <li><a href="#">Cara Konfirmasi Pemesanan</a></li>
              </ul> 
          </div> 
          <div class="custom-sub-menu-parent col">       
            <div class="dropdown-toggle" style="color: white; text-align: center">Pembatalan</div>
              <ul class="custom-sub-menu col-9">
                <li><a href="#">Persyaratan Pembatalan</a></li>
                <li><a href="#">Cara Melakukan Pembatalan</a></li>
              </ul>            
          </div>
        </ul>
      </div>
    </div>
    <!-- Sub Menu End -->
          
      
    <!-- Middle Content Start -->
    <div class="container" style="align-content: center; text-align: center">
        <div class="row justify-content-md-center">
            <div class="col-9">
              <hr>
            </div>
            <div class="col-5">
              <hr>
            </div>  
        </div>
        
          <div class="row" style="height: auto">
                <div class="col" style="color: Black; border-radius: 20px; padding-top: 20px; padding-bottom: 20px; " >
                      <div>
                        <h3 style = "padding-bottom: 20px">Topik Populer</h3>
                      </div>
                      <div class="nav-link" > 
                          <div class="row">
                          <button type="button" id="transaction-question" class="btn btn-lg btn-block btn-outline-primary"><small>Cara Melakukan Transaksi dengan Menggunakan Transfer Rekening</small></button>                              
                          </div>
                      </div>
                      <hr>
                      <div class="nav-link" > 
                          <div class="row">
                          <button type="button" id="carabayar-question" class="btn btn-lg btn-block btn-outline-primary"><small>Cara Melakukan Pembayaran Secara Tunai</small></button>                              
                          </div>
                      </div>                           
                      <hr>
                      <div class="nav-link" id="transaction-question"> 
                          <div class="row">
                          <button type="button" class="btn btn-lg btn-block btn-outline-primary"><small>Cara Menggunakan Promo Yang Diterima</small></button>                              
                          </div>
                      </div>                       
                      <hr>
                      <div class="nav-link" id="transaction-question"> 
                          <div class="row">
                          <button type="button" class="btn btn-lg btn-block btn-outline-primary"><small>Cara Melaporkan Kecurangan/Pelanggaran</small></button>                              
                          </div>
                      </div>                       
                      <hr>
                </div>
          <div class="col">
            <div class="jumbotron" id="content_question" style="; border-radius: 20px; color: black; width:500px; padding-top:20px; margin-top:80px;">
                  <h1>Cara Meminta Bantuan</h1>
                  
                  <p >
                      Terdapat 2 cara yaitu dengan memasukkan pertanyaan dalam kolom search atau 
                      dengan menggunakan link disamping dengan memilih salah satu pertanyaan yang sering dicari oleh
                      pengunjung
                      <br>
                      <br>
                      <br>
                      Trimakasih  
                  </p>                
            </div>
            </div>
          </div>
      </div>
      
      
@endsection       