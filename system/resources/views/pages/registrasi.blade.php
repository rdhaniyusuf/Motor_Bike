@extends('main')

@section('content')

<div class="container">
	<div class="col-12">
	<div class="row">
	<!-- Slideshow container -->
    <div class="col-9">
    
              <div class="slideshow-container">

            <!-- Full-width images with number and caption text -->
                        @foreach($data as $img)  
                          <div class="mySlides fade">
                            <img src="http://localhost/Backend/assets/motor/registrasi/{{$img->nama}}" class="border-25 w-100">
                          </div>
                        @endforeach
              </div>
    </div>

 
<div class="col-3">
    <form action="" method="post">
          {{csrf_field()}}

          <div class="form-group">
              <label for="email">Email</label>
              <input type="text" class="form-control" id="email" placeholder="Masukkan Email" name="email" style="width: 300px">
          </div>

          <div class="form-group">
              <label for="nama">Nama</label>
              <input type="text" class="form-control" id="nama" placeholder="Masukkan Nama" name="nama" style="width: 	300px">
          </div>

          <div class="form-group">
              <label for="password" >Creat Password</label>
              <input type="password" class="form-control" id="password" placeholder="Password" name="password" style="width: 300px">
          </div>  

  	          <label>Setuju syarat dan ketentuan </label> 

  	      <div class="checkbox">Check me out</div>
  	      
            <button class="btn btn-success my-2 my-sm-0" type="submit" style="margin-left: 100px">Registrasi</button>
  		
              <div class="text-muted" style="margin-left: 50px">
                    <p>Sudah punya akun? </p></div>
  	</form>

            <!-- Trigger the modal with a button -->
  		<a href="" class="link" data-toggle="modal" data-target="#myModal">Masuk</a> </p>

              <!-- Modal -->
  		<div class="modal fade" id="myModal" role="dialog">
    	<div class="modal-dialog">

        
      		<!-- Modal content-->
      	<div class="modal-content">
        <div class="modal-header">
        	 <h4 class="modal-title" align="center">Log In</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
         
        </div>
        <div class="modal-body" >
          <label for="exampleInputNumber" style="margin-top: 10px">Email
    	  <input type="font-weight-normal"  class="form-control" name="email" id="email" placeholder="Input your E-mail" style="width: 300px"></label>
   		  <label for="exampleInputPassword1">Password
   		  <input type="password" class="form-control" name="password" id="exampleInputPassword1" placeholder="Password" style="width: 300px"></label>
        </div>
        <div class="modal-footer">
        	<a href="./Register.html" class="btn-danger" style="padding-right: 8px; padding-left: 8px; padding-bottom: 8px; padding-top: 8px;" role="button">Batal</a>
          <button class="btn-success btnLogin" style="padding-right: 8px; padding-left: 8px; padding-bottom: 0px; padding-top: 8px;" role="button">Masuk</button>
        </div>
      </div>
        
    </div>
  </div><!--end modal-->
  <ul class="list-unstyled list-inline text-center">
      <li class="list-inline-item">       
        <a href="https://www.facebook.com"> <img src="http://localhost/Backend/assets/image/fb-icon.png" alt="" width="40px"></a>
      </li>

      <li class="list-inline-item">
        <a href="https://accounts.google.com/ServiceLogin/signinchooser?hl=en&passive=true&continue=https%3A%2F%2Fwww.google.com%2Fsearch%3Fq%3Dlog%2Bin%2Bgoogle%26oq%3Dlog%2Bin%2Bgoogle%26aqs%3Dchrome..69i57j0l5.3954j1j4%26sourceid%3Dchrome%26ie%3DUTF-8&flowName=GlifWebSignIn&flowEntry=ServiceLogin"><img src="http://localhost/Backend/assets/image/gplus-icon.png" alt="" width="40px"></a>
      </li>
    </ul>   
 	</div>
</div>
</div>
<!-- The dots/circles -->
<div style="margin-left: 400px">
  <span class="dot" onclick="currentSlide(1)"></span> 
  <span class="dot" onclick="currentSlide(2)"></span> 
  <span class="dot" onclick="currentSlide(3)"></span> 
</div>
</div>
 <script>
 var _baseURL = '<?php echo url(''); ?>';
 $.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="x-token"]').attr('content')
    }
});
 $(function() {
   $('.btnLogin').on('click', function (e) {
     e.preventDefault();
     $.ajax({
     url: _baseURL + '/fnLogin',
     data: {
       email: $('input[name=email]').val(),
       password: $('input[name=password]').val()
     },
     type: 'post',
     dataType: 'json',
     success: function (d) {
       if (d.status == 500) {
         alert(d.message);
       } else if (d.status == 200) {
         window.location.reload();
       }
     }
   });
   })
   
 })
 </script>

 @endsection