<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>{{$event->name_e}}-Love Snnipets</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="{{asset('assets/img/loveSnnipets.png')}}" rel="icon">
  <link href="{{asset('assets/img/loveSnnipets.png')}}" rel="apple-touch-icon">

  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Pinyon+Script&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Pinyon+Script&family=Rochester&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Overpass:wght@200&family=Pinyon+Script&family=Rochester&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Alegreya+Sans:wght@500&family=Overpass:wght@200&family=Pinyon+Script&family=Rochester&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Alegreya+Sans+SC:wght@300&family=Alegreya+Sans:wght@500&family=Overpass:wght@200&family=Pinyon+Script&family=Rochester&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Alegreya+Sans+SC:wght@300&family=Alegreya+Sans:wght@500&family=Overpass:wght@200&family=Pinyon+Script&family=Rochester&family=Rosarivo&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Alegreya+Sans+SC:wght@300&family=Alegreya+Sans:wght@500&family=Dancing+Script&family=Overpass:wght@200&family=Pinyon+Script&family=Rochester&family=Rosarivo&display=swap" rel="stylesheet">
  <!-- Vendor CSS Files -->
  <link href="{{asset('assets/vendor/aos/aos.css')}}" rel="stylesheet">
  <link href="{{asset('assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
  <link href="{{asset('assets/vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
  <link href="{{asset('assets/vendor/boxicons/css/boxicons.min.css')}}" rel="stylesheet">
  <link href="{{asset('assets/vendor/glightbox/css/glightbox.min.css')}}" rel="stylesheet">
  <link href="{{asset('assets/vendor/swiper/swiper-bundle.min.css')}}" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{asset('assets/css/stylePosada.css')}}" rel="stylesheet">

  @livewireStyles

  <!-- =======================================================
  * Template Name: Day - v4.10.0
  * Template URL: https://bootstrapmade.com/day-multipurpose-html-template-for-free/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Top Bar ======= -->
  <!--<section id="topbar" class="d-flex align-items-center">
    <div class="container d-flex justify-content-center justify-content-md-between">
      <div class="contact-info d-flex align-items-center">
        <i class="bi bi-envelope-fill"></i><a href="mailto:contact@example.com">info@example.com</a>
        <i class="bi bi-phone-fill phone-icon"></i> +1 5589 55488 55
      </div>
      <div class="social-links d-none d-md-block">
        <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
        <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
        <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
        <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></i></a>
      </div>
    </div>
  </section>-->

  <!-- ======= Hero Section ======= -->
  
  

  <section id="hero" class="d-flex align-items-center">
    <div id="particles-js" class="position-fixed"></div>
    <div class="container position-relative text-center" data-aos="fade-up" data-aos-delay="500">
      <h3 class="topPart">Te invito a nuestra</h3>
      <h2>{{$event->name_e}}</h2>
      <div id="playButton" class="btn-get-started scrollto"><i id="musicIcon" class="fa-solid fa-play"></i></div>
    </div>
  </section><!-- End Hero -->


  <main id="main">

    <!-- ======= Cta Section ======= -->
    <section id="cta" class="cta">
      <div class="container" data-aos="zoom-in">

        <div class="text-center">
          <h3>{{$guest->name_g}}:</h3>
          <p>Has recibido invitación para nuestra maravillosa posada <br>Esperamos que puedas venir <br>Ve la cuenta regresiva</p>
          @livewire('cuenta', ['date'=>$event->date_e])
          <p> <br>*Aplican términos y condiciones para personas externas a la casa</p>
        </div>

      </div>
    </section><!-- End Cta Section -->
    @php
      $date=strtotime($event->date_e);
      $dateT=new DateTime(date('m/d/Y H:i:s', $date));
    @endphp


    <section id="information" class="information">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 text-center">
              <h4 class="fw-bold">
                @switch($dateT->format('m'))
                            @case(1)
                                ENERO
                                @break
                            @case(2)
                                FEBRERO
                                @break
                            @case(3)
                                MARZO
                                @break
                            @case(4)
                                ABRIL
                                @break
                            @case(5)
                                MAY0
                                @break
                            @case(6)
                                JUNIO
                                @break
                            @case(7)
                                JULIO
                                @break
                            @case(8)
                                AGOSTO
                                @break
                            @case(9)
                                SEPTIEMBRE
                                @break
                            @case(10)
                                OCTUBRE
                                @break
                            @case(11)
                                NOVIEMBRE
                                @break
                            @case(12)
                                DICIEMBRE
                                @break
                            @default
                                nada
                        @endswitch
              </h4>
              <h1>{{$dateT->format('d')}}</h1>
              <h4 class="fw-bold">{{$dateT->format('Y')}}</h4>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-12 text-center pt-4 pt-lg-0">
            <i class="fa-solid fa-tree info-icon"></i>
            <br> <br>
            <p class="fw-bold">{{$event->places->name_p}}</p>
            <p>{{$event->places->address_p}}</p>
            <p class="fw-bold">8:30 p.m.</p>
            <div class="btn-get-started scrollto"><a href="{{$event->places->location_p}}" target="_blank">Ver ubicación</a></div>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-12 pt-4 text-center">
            <h4 class="fw-bold">{{$event->places->city_p}}, {{$event->places->state_p}}</h4>
          </div>
        </div>
      </div>
    </section>


    <!-- =======Confirmation section========== -->
    <section class="confirmation" id="confirmation">
      <div class="row">
        <h1 class="text-center mb-3">Confirma tu asistencia</h1>
      </div>
      <div class="row">
        <div class="text-center">
          <div class="ticket">
            <i class="fa-solid fa-ticket conf-icon"></i>
            <p>Pase para {{$guest->tickets_g}} 
              @if ($guest->tickets_g == 1)
                  persona
              @else
                  personas
              @endif
            </p>
          </div>
        </div>
      </div>
      <div class="row m-3">
        <div class="col-lg-12 text-center">
          @if ($guest->confirmed_g == 0)
            <p>Confirmaaaaaaaaa: </p>
        </div>
            <div class="col-lg-12 m-2">
              <form action="{{route('guest.confirm', $guest)}}" method="POST">
                @csrf
                @method('PATCH')
                <input type="radio" id="yes" name="confirmed_g" value={{true}}>
                <label for="yes">Asistiré</label><br>
                <input type="radio" id="no" name="confirmed_g" value=0>
                <label for="no" class="mt-2">No asistiré</label><br>
                @error('confirmed_g')
                  <p>{{$message}}</p>
                @enderror
                <button type="submit" class="btn btn-primary mt-2">Enviar</button>
              </form>
              <div class="row text-center">
                <p>*Términos y condiciones: <br>Si eres externo a la casa y Sagitario no puedes entrar <br>Si eres Sagitario de noviembre y trabajas en una panadería puedes entrar si le traes pan a Yizus</p>
              </div>
            </div>
          @else
            <div class="col-lg-12 m-2">
              <p>Gracias por confirmar.</p>
            </div>
          @endif
        </div>
      </div>
    </section>


  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="{{asset('assets/vendor/aos/aos.js')}}"></script>
  <script src="{{asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{asset('assets/vendor/glightbox/js/glightbox.min.js')}}"></script>
  <script src="{{asset('assets/vendor/isotope-layout/isotope.pkgd.min.js')}}"></script>
  <script src="{{asset('assets/vendor/swiper/swiper-bundle.min.js')}}"></script>
  <script src="{{asset('assets/vendor/php-email-form/validate.js')}}"></script>

  <!-- Template Main JS File -->
  <script src="{{asset('assets/js/maincasa.js')}}"></script>

  <script src="{{asset('assets/js/particles.js')}}"></script>
  <script src="{{asset('assets/js/app.js')}}"></script>

  

  @livewireScripts
</body>

</html>