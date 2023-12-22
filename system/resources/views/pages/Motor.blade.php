@extends('main')

@section('content')

      
    

    
            <div class="row justify-content-end">
            <div class="container" style="padding-top: 10px;">       
        <div class="card-deck mb-4 text-left">
          <div class="card-columns">
                            
                            @foreach($motor as $datamotor)

                            <div class="card center">
                                          
                                              <div>
                                                <img src="http://localhost/Backend/assets/motor/motor/{{$datamotor->imgmtr}}" alt="" class="d-block w-100" height="150px">
                                              </div>
                                              <div class="card-body">
                                                <h2 class="card-title pricing-card-title">Rp. {{number_format($datamotor->hargaMtr)}}</h2>
                                                <ul class="list-unstyled mt-3 mb-4 text-muted">
                                                    <li><b class="jenis-kos">{{$datamotor->jenisMtr}}</b></li>
                                                    <li><b class="jenis-kos">Plat</b> <b>{{$datamotor->platMtr}}</b></li>
                                                    <li type="bullet">{{$datamotor->namaMtr}}</li>                                                    
                                                    <li type="bullet">{{$datamotor->keteranganMtr}}</li>
                                                    <li type="bullet"><img src="http://localhost/Backend/assets/image/small-centang.png" alt="" style="width: 10px"><small>{{$datamotor->updated_at}}</small></li>
                                                  </ul>
                                                  <a href="{{route('moge1', ['id' => $datamotor->idmotor])}}">
                                                    <button type="button" class="btn btn-lg btn-block btn-outline-primary">Telusuri</button>
                                                  </a>
                                              
                                            </div>
                                      </div> <!-- swiper-slide -->

                                          

                              @endforeach
                         
                        </div>
                      </div>
                    </div>
            </div>

             
    <hr>

  
@endsection