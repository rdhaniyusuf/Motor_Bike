
    <!-- Navbar Start -->
    <div style="padding-top:10px; padding-bottom:20px" > <!-- ---------------------------------- -->
      <div class="d-flex flex-column flex-md-row align-items-center p-0 px-md-4 mb-0">
          <div class="my-0 mr-md-auto font-weight-normal"> 
            <a href="{{route('home')}}"><img src="http://localhost/Backend/assets/motor/content/Logo.png" alt="" height="50px" width="50px"></a> 
          </div>
          <div>
            <ul class="nav nav-tabs justify-content-end">
              <li class="nav-item">
                  <a class="nav-link" href="{{route('motor')}}">Motor</a>
              </li>
              <li class="nav-item">
                  <a class="nav-link" href="{{route('onderdil')}}">Onderdil</a>
              </li>
              <li class="nav-item">
                  <a class="nav-link" href="{{route('promo')}}">Promo</a>
              </li>
              <li class="nav-item">
                  <a class="nav-link" href="{{route('data_pemesanan')}}?url={{Request::fullUrl()}}">Pesanan</a>
              </li>
              <!--  @if (Auth::check())
              <li class="nav-item">
                  <a href="]]></a>
              </li> 
              @endif -->
              <li class="nav-item">
                  <a class="nav-link" href="{{route('info')}}">Bantuan</a>
              </li>    
              <li class="nav-item dropdown">
                  @if (Auth::check())
                      <a class="nav-link " href="{{route('logout')}}" >Logout</a>
                    <!-- <span>{{ Auth::user()->nama}}</span> -->
                  @else
                    <a class="nav-link" href="{{route('login')}}" >Masuk</a>
                  @endif
              </li>
            </ul>
          </div>  
      </div>
    </div> 
    <!-- Navbar End -->
