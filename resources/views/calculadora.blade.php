<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>importafacilEcuador - Index</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="{{ URL::to('/') }}/assets/img/favicon.png" rel="icon">
  <link href="{{ URL::to('/') }}/assets/img/apple-touch-icon.png" rel="apple-touch-icon">  

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{ URL::to('/') }}/assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="{{ URL::to('/') }}/assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="{{ URL::to('/') }}/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="{{ URL::to('/') }}/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="{{ URL::to('/') }}/assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="{{ URL::to('/') }}/assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="{{ URL::to('/') }}/assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="{{ URL::to('/') }}/assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: importafacilEcuador - v4.7.0
  * Template URL: https://bootstrapmade.com/importafacilEcuador-responsive-bootstrap-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top">
    <div class="container d-flex align-items-center justify-content-between">

      <h1 class="logo">
        <img src="{{ URL::to('/') }}/assets/images/logoImportaciones.png" height="200px" />
        <a style="font-size: 14px" href="index.html">importafacilEcuador</a>
      </h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto active" href="#hero">Inicio</a></li>
          <li><a class="nav-link scrollto" href="#about">Acerca</a></li>
          <li><a class="nav-link scrollto" href="#services">Servicios</a></li>
          <li><a class="nav-link scrollto " href="#portfolio">Portafolio</a></li>
          <li><a class="nav-link scrollto" href="#team">Nosotros</a></li>
          <!--<li class="dropdown"><a href="#"><span>Drop Down</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="#">Drop Down 1</a></li>
              <li class="dropdown"><a href="#"><span>Deep Drop Down</span> <i class="bi bi-chevron-right"></i></a>
                <ul>
                  <li><a href="#">Deep Drop Down 1</a></li>
                  <li><a href="#">Deep Drop Down 2</a></li>
                  <li><a href="#">Deep Drop Down 3</a></li>
                  <li><a href="#">Deep Drop Down 4</a></li>
                  <li><a href="#">Deep Drop Down 5</a></li>
                </ul>
              </li>
              <li><a href="#">Drop Down 2</a></li>
              <li><a href="#">Drop Down 3</a></li>
              <li><a href="#">Drop Down 4</a></li>
            </ul>
          </li>-->
          <li><a class="nav-link scrollto" href="#contact">Contactanos</a></li>
          <li><a target="_blank" href="https://api.whatsapp.com/send?phone=593990658022&text=Me%20interesa%20m%C3%A1s%20informaci%C3%B3n" class="facebook"><i style="font-size: 25px;" class="bx bxl-whatsapp"></i></a></li>
          <li><a class="getstarted scrollto" href="#about">Empezar</a></li>    
          @if (Route::has('login'))          
            @auth
                <li><a href="{{ url('/dashboard') }}" class="text-sm text-gray-700 underline">Dashboard</a></li>
            @else
                <li><a href="{{ route('login') }}" class="text-sm text-gray-700 underline">Login</a></li>
                {{-- @if (Route::has('register'))
                  <li><a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 underline">Register</a></li>
                @endif --}}
            @endif
          @endif
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->


    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact section-bg">
      <div class="container" data-aos="fade-up">
        <div style="height: 100px;"></div>
        <div class="section-title">
          <h2>Calculadora</h2>
          <p>Calculadora de Importaciones</p>
        </div>

        <div class="row">

          <div class="col-lg-6">

            <div class="row">
              <div class="col-md-12">
                <div class="info-box">
                  <i class="bx bx-map"></i>
                  <h3>Información</h3>
                  <p>Tus Costos de Importacion Online Con nuestra calculadora de flete e impuestos de aduana en tal solo poco minutos, todo en mismo sitio ImportaFacilEcuador.</p>
                </div>
              </div>              
            </div>

          </div>

          <div class="col-lg-6">
            <form action="forms/contact.php" method="post" role="form" class="php-email-form">
              <div class="row">
                <div class="col-md-4 form-group">
                  Costo:
                </div>
                <div class="col-md-8 form-group">
                  <input type="email" class="form-control" name="email" id="txtCosto" placeholder="" required>
                </div>
              </div>

              <div class="row" style="margin-top: 15px;">
                <div class="col-md-4 form-group">
                  Flete:
                </div>
                <div class="col-md-8 form-group">
                  <input type="email" class="form-control" name="email" id="txtFlete" placeholder="" required>
                </div>
              </div>

              <div class="row" style="margin-top: 15px;">
                <div class="col-md-4 form-group">
                  Seguro:
                </div>
                <div class="col-md-8 form-group">
                  <input type="email" class="form-control" name="email" id="txtSeguro" placeholder="" disabled >
                </div>
              </div>

              <h4 style="margin-top: 20px;">Tributos</h4>

              
              <div class="row" style="margin-top: 15px;">
                <div class="col-md-4 form-group">
                  IVA 12%:
                </div>
                <div class="col-md-8 form-group">
                  <input type="email" class="form-control" name="email" id="txtIva" placeholder="" disabled >
                </div>
              </div>

              <div class="row" style="margin-top: 15px;">
                <div class="col-md-4 form-group">
                  FodInfa 0.05%:
                </div>
                <div class="col-md-8 form-group">
                  <input type="email" class="form-control" name="email" id="txtFodinfa" placeholder="" disabled >
                </div>
              </div>

              <div class="row" style="margin-top: 15px;">
                <div class="col-md-4 form-group">
                  Ad Valorem:
                </div>
                <div class="col-md-8 form-group">
                  <input type="email" class="form-control" name="email" id="txtAdVAlorem" placeholder="" >
                </div>
              </div>

              <div class="row" style="margin-top: 15px;">
                <div class="col-md-4 form-group">
                  Total:
                </div>
                <div class="col-md-8 form-group">
                  <input type="email" class="form-control" name="email" id="txtTotal" placeholder="" disabled >
                </div>
              </div>

              
              <div class="my-3">
                <div class="loading">Cargando</div>
                <div class="error-message"></div>
                <div class="sent-message">Tu mensaje fue enviado correctamente. Gracias!</div>
              </div>
              <div class="text-center">
                <button type="button" onclick="imprimir();">
                  Calcular
                </button>
              </div>
            </form>
          </div>

        </div>

      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-12 col-md-12">
            <div class="footer-info">
              <h3>importafacilEcuador</h3>
              <p class="pb-3"><em>Si tienes cualquier duda sobre nuestros servicios puedes comunicarte con nosotros para que te brindemos una atención más personalizada..</em></p>
              <p>
              Quito. Betania Avenida ilaló S4-194 y calle río Tivacuno.<br><br>
                <strong>Whatsapp:</strong> 0997952501 <br>
                <strong>Correo:</strong> contacto@importafacilecuador.com <br>
              </p>
              <div class="social-links mt-3">
                <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
                <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
                <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
                <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
                <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
              </div>
            </div>
          </div>


        </div>
      </div>
    </div>

    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong><span>importafacilEcuador</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/importafacilEcuador-responsive-bootstrap-template/ -->
        Designed by <a href="https://bootstrapmade.com/">Codesoft</a>
      </div>
    </div>
  </footer><!-- End Footer -->

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="{{ URL::to('/') }}/assets/vendor/purecounter/purecounter.js"></script>
  <script src="{{ URL::to('/') }}/assets/vendor/aos/aos.js"></script>
  <script src="{{ URL::to('/') }}/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="{{ URL::to('/') }}/assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="{{ URL::to('/') }}/assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="{{ URL::to('/') }}/assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="{{ URL::to('/') }}/assets/vendor/php-email-form/validate.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

  <!-- Template Main JS File -->
  <script src="{{ URL::to('/') }}/assets/js/main.js"></script>

  <script>

    function imprimir()
    {
      var costo= parseFloat($("#txtCosto").val());
      var flete= parseFloat($("#txtFlete").val());      
      var seguro=(costo+flete);
      var iva=seguro*0.12;
      var fodInfa=seguro*0.05;
      var adValorem=(parseFloat($("#txtAdVAlorem").val())/100)*seguro;      
      var total=costo+flete+seguro+iva+fodInfa+adValorem;
      $("#txtSeguro").val(seguro);
      $("#txtIva").val(iva);
      $("#txtFodinfa").val(fodInfa);
      //$("#txtAdVAlorem").val(adValorem);
      $("#txtTotal").val(total);
      alert(seguro);
    }

  </script>

</body>

</html>