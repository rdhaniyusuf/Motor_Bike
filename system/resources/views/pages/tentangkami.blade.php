@extends('main')
@section('content')


    <!-- Slider Start -->
    <nav class="nav">
        <div class="col">
            <div class="carousel-item active">
              <img src="http://localhost/Backend/assets/image/slider.1.jpg" class="border-25 w-100" alt="..." >
              <div class="carousel-caption d-none d-md-block">
                <div class="text-light">
                  <h2 class="display-2 font-weight-lighter">Motor Bike</h2>
                  <p>Mulai Pencarian dan Beli Sekarang</p> 
                </div>
                <div>
                  <form class="my-2 my-lg-0">
                      <div class="form-group mb-2">
                        <input class="form-control mr-sm-2 " type="search" placeholder="Cari nama kos / daerah" aria-label="Search">
                      </div>
                        <button class="btn btn-outline-success my-2 my-sm-0" type="submit" >Pencarian</button>
                  </form>
                </div>
                  
              </div>
            </div>
        </div> 
    </nav>
    <!-- Slider End -->

    <div class="container" >
    	<div class="coloumn" >
    		<h2 class="display-2 font-weight-lighter" align="center">Tentang Kami</h2>

    			<p><br><br><br>
            Ini adalah sebuah website atau laman yang dibuat khusus sebagai sarana prasarana untuk mempermudah mencari Motor 
            di Yogyakarta. Bukan hanya mencari, menemukan, dan adanya komunikasi; itu syarat wajib dalam transaksi bukan?
            <br> Kami bekerjasama untuk membangun sebuah laman yang 
            <em>trusted</em>sehingga transaksi dapat berjalan lancar dan aman<br>
            Motor Bike berdiri tahun 2019
          </p>
    			<a href=" https://api.whatsapp.com/send?phone=6281234567890&text=Nama%20%3A%0AAlamat%20%3A%0AKeperluan%20:daftarkan%20kos/%20laporkan%20kecurangan?%20%0Asaran%3A">Klik di sini untuk menghubungi kami</a> 

                    <div>
                        <hr>
                    </div>
                    <div class="container">
                        <hr>
                    </div>
                
    			<div class="row justify-content-center" >                        
                            <h4>Tentang Kami</h4>                                        
                </div>
                <div class="row justify-content-center" style="padding-bottom:20px">
                <iframe class="border-25 w-75" height="345" src="https://www.youtube.com/embed/tgbNymZ7vqY?playlist=tgbNymZ7vqY&loop=1"></iframe>
                </div>
    </div>
                
	</div>
	
@endsection