<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="x-token" content="{{csrf_token()}}">
    <!-- JQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Mulai cari motor yang anda sukai !!!!</title>
    <!-- style -->
    <link rel="stylesheet" href="http://localhost/Backend/assets/css/style.css">
    <!-- Custom Riski-->
    <link rel="stylesheet" href="http://localhost/Backend/assets/css/slider.css">
    <!-- custom Magfira -->
    <link rel="stylesheet" href="http://localhost/Backend/assets/css/pemilik.css">
    <link rel="stylesheet" href="http://localhost/Backend/assets/css/profil.css">
    <!--custom Style-->
    <link href="http://localhost/Backend/assets/css/swiper.css" rel="stylesheet">	
  </head>
  <body>
    @include('header')

    @yield('content')

    

  @include('footer')

</div>
  
    <!-- custom Javascript-->
    <script>
        var slideIndex = 0;
        showSlides();

        function showSlides() {
          var i;
          var slides = document.getElementsByClassName("mySlides");
          var dots = document.getElementsByClassName("dot");
          for (i = 0; i < slides.length; i++) {
            slides[i].style.display = "none";  
          }
          slideIndex++;
          if (slideIndex > slides.length) {slideIndex = 1}    
          for (i = 0; i < dots.length; i++) {
            dots[i].className = dots[i].className.replace(" active", "");
          }
          slides[slideIndex-1].style.display = "block";  
          dots[slideIndex-1].className += " active";
          setTimeout(showSlides, 2000); // Change image every 2 seconds
        }
</script>

    <!-- WhatsHelp.io widget -->
<script type="text/javascript">
  (function () {
      var options = {
          whatsapp: "0895359636249", // WhatsApp number
          call_to_action: "Hubungi Kami", // Call to action
          position: "right", // Position may be 'right' or 'left'
      };
      var proto = document.location.protocol, host = "whatshelp.io", url = proto + "//static." + host;
      var s = document.createElement('script'); s.type = 'text/javascript'; s.async = true; s.src = url + '/widget-send-button/js/init.js';
      s.onload = function () { WhWidgetSendButton.init(host, proto, options); };
      var x = document.getElementsByTagName('script')[0]; x.parentNode.insertBefore(s, x);
  })();
</script>

<!-- /WhatsHelp.io widget -->
    
	
    <script src="http://localhost/Backend/assets/Jquery/swiper.js"></script>

    <script src="http://localhost/Backend/assets/js/js-script.js"></script>
    
    <script src="http://localhost/Backend/assets/Jquery/script.js"></script>
<script>
  function openNav() {
    document.getElementById("mySidenav").style.width = "15%";
    document.getElementById("main").style.marginLeft = "20%";
    document.body.style.backgroundColor = "rgba(0,0,0,0.4)";
  }
  
  function closeNav() {
    document.getElementById("mySidenav").style.width = "0";
    document.getElementById("main").style.marginLeft= "0";
    document.body.style.backgroundColor = "white";
  }
</script>
    
    <!-- Optional JavaScript -->
    <script type="text/javascript" src="http://localhost/Backend/assets/Jquery/script.js"></script>
    <!-- jQuery first, then Popper.js, then Bootstrap JS --> 
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>