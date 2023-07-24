<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Day Bootstrap Template - Index</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

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
  <link href="{{asset('assets/css/style.css')}}" rel="stylesheet">

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
      <h3 class="topPart">We're getting married!</h3>
      <h1>Mayra</h1>
      <h2>&</h2>
      <h1>Marcos</h1>
      <div id="playButton" class="btn-get-started scrollto"><i id="musicIcon" class="fa-solid fa-play"></i> Our song</div>
    </div>
  </section><!-- End Hero -->


  <main id="main">

    <!-- ======= About Section ======= -->
    <section id="about" class="d-flex about align-items-center">
      <div class="container">
        <div class="row ">
          <div class="d-flex col-lg-6 order-1 order-lg-2 align-items-center" data-aos="fade-left">
            <img src="{{asset('assets/img/phrase.jpg')}}" class="img-fluid" alt="">
          </div>
          <div class="d-flex col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 content position-relative align-items-center" data-aos="fade-right">
            <div>
              <h1>"Love is not about satring at each other, but starting off in the same direction"</h1>
              <h3 class="author">-Antoine de Saint-Exupéry</h3>
            </div>
          </div>
        </div>
      </div>
    </section><!-- End About Section -->

    <!-- ======= Cta Section ======= -->
    <section id="cta" class="cta">
      <div class="container" data-aos="zoom-in">

        <div class="text-center">
          <h3>{{$guest->name_g}}:</h3>
          <p>We're beyond honored to invite you to our wedding! <br>Check out the countdown!</p>
          @livewire('countdown', ['date'=>$event->date_e])
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
                                JANUARY
                                @break
                            @case(2)
                                FEBRUARY
                                @break
                            @case(3)
                                MARCH
                                @break
                            @case(4)
                                APRIL
                                @break
                            @case(5)
                                MAY
                                @break
                            @case(6)
                                JUNE
                                @break
                            @case(7)
                                JULY
                                @break
                            @case(8)
                                AUGUST
                                @break
                            @case(9)
                                SEPTEMBER
                                @break
                            @case(10)
                                OCTOBER
                                @break
                            @case(11)
                                November
                                @break
                            @case(12)
                                DECEMBER
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
          <div class="col-lg-6 text-center">
            <i class="fa-solid fa-church info-icon"></i>
            <h4 class="fw-bold">Religious ceremony</h4>
            <p class="fw-bold">Capilla del Niño Jesús</p>
            <p class="fw-bold fst-italic">(Salón la estancia's chapel)</p>
            <p>{{$event->places->address_p}}</p>
            <p class="fw-bold">6:00 p.m.</p>
            <div class="btn-get-started scrollto"><a href="{{$event->places->location_p}}" target="_blank">See location</a></div>
          </div>
          <div class="col-lg-6 text-center pt-4 pt-lg-0">
            <i class="fa-solid fa-champagne-glasses info-icon"></i>
            <h4 class="fw-bold">Reception</h4>
            <p class="fw-bold">{{$event->places->name_p}}</p>
            <p>{{$event->places->address_p}}</p>
            <br>
            <p class="fw-bold">7:30 p.m.</p>
            <br>
            <div class="btn-get-started scrollto"><a href="{{$event->places->location_p}}" target="_blank">See location</a></div>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-12 pt-4 text-center">
            <h4 class="fw-bold">{{$event->places->city_p}}, {{$event->places->state_p}}</h4>
          </div>
        </div>
      </div>
    </section>

    <!--TIMELINE SECTION-->
    <section class="timeline">
        <h1 class="text-center">Itinerary</h1>
        <div class="timelinecontainer left-c" data-aos="fade-up" data-aos-anchor-placement="center-center">
          <div class="time-logo text-center">
            <i class="fa-solid fa-church itinerary-icon"></i>
          </div>
          <div class="textbox">
            <h2>Religious ceremony</h2>
            <p>6:00 p.m.</p>
          </div>
        </div>

        <div class="timelinecontainer right-c" data-aos="fade-up" data-aos-anchor-placement="center-center">
          <div class="time-logo text-center">
            <i class="fa-solid fa-champagne-glasses itinerary-icon"></i>
          </div>
          <div class="textbox">
            <h2>Reception</h2>
            <p>7:30 p.m.</p>
          </div>
        </div>

        <div class="timelinecontainer left-c" data-aos="fade-up" data-aos-anchor-placement="center-center">
          <div class="time-logo text-center">
            <i class="fa-solid fa-heart itinerary-icon"></i>
          </div>
          <div class="textbox">
            <h2>Entry of the couple</h2>
            <p>8:00 p.m.</p>
          </div>
        </div>

        <div class="timelinecontainer right-c" data-aos="fade-up" data-aos-anchor-placement="center-center">
          <div class="time-logo text-center">
            <i class="fa-solid fa-utensils itinerary-icon"></i></i>
          </div>
          <div class="textbox">
            <h2>Dinner</h2>
            <p>9:00 p.m.</p>
          </div>
        </div>

        <div class="timelinecontainer left-c" data-aos="fade-up" data-aos-anchor-placement="center-center">
          <div class="time-logo text-center">
            <i class="fa-solid fa-music itinerary-icon"></i>
          </div>
          <div class="textbox">
            <h2>Party</h2>
            <p>10:00 p.m.</p>
          </div>
        </div>

        <div class="timelinecontainer right-c" data-aos="fade-up" data-aos-anchor-placement="center-center">
          <div class="time-logo text-center">
            <i class="fa-solid fa-moon itinerary-icon"></i>
          </div>
          <div class="textbox">
            <h2>End of the event</h2>
            <p>2:00 a.m.</p>
          </div>
        </div>
    </section>

    <!-- =======Confirmation section========== -->
    <section class="confirmation" id="confirmation">
      <div class="row">
        <h1 class="text-center mb-3">Confirm your assistance</h1>
      </div>
      <div class="row">
        <div class="text-center">
          <div class="ticket">
            <i class="fa-solid fa-ticket conf-icon"></i>
            <p>Pass for {{$guest->tickets_g}} 
              @if ($guest->tickets_g == 1)
                  person
              @else
                  people
              @endif
            </p>
          </div>
        </div>
      </div>
      <div class="row m-3">
        <div class="col-lg-12 text-center">
          @if ($guest->confirmed_g == 0)
            <p>The most important thing to us is your company, please help us confirming your assistance: </p>
        </div>
            <div class="col-lg-12 m-2">
              <form action="{{route('guest.confirm', $guest)}}" method="POST">
                @csrf
                @method('PATCH')
                <input type="radio" id="yes" name="confirmed_g" value={{true}}>
                <label for="yes">I'll assist</label><br>
                <input type="radio" id="no" name="confirmed_g" value=0>
                <label for="no" class="mt-2">I won't assist</label><br>
                @error('confirmed_g')
                  <p>{{$message}}</p>
                @enderror
                <button type="submit" class="btn btn-primary mt-2">Submit</button>
              </form>
            </div>
          @else
            <div class="col-lg-12 m-2">
              <p>Thanks for confirm your assistance, we'll be delighted to see you there.</p>
            </div>
          @endif
        </div>
      </div>
    </section>

    <!-- ======= Clients Section ======= -->
    <section id="clients" class="clients">
      <div class="row m-2">
        <h1>Gift's suggestions</h1>
      </div>
      <div class="row m-2">
        <p>To us, your presence and being able to share this moment with you are the best gifts. However, if you'd like to give us a present here are a couple of options: </p>
      </div>
      <div class="row m-2">
        <h4 class="fw-bold">Envelope's rain</h4>
        <p>Envelope's rain is the tradition to give cash to the couple inside an envelope on the wedding's day</p>
        <div class="text-center">
          <img src="{{asset('assets/img/sobre.png')}}" alt="Envelope + money = love" class="envelope">
        </div>
        <h5 class="fw-bold">We appreciate it a lot</h5>
      </div>
      <div class="row m-2">
        <h4 class="fw-bold">Gift's tables</h4>
      </div>
      <div class="container" data-aos="zoom-in">
        <div class="row d-flex align-items-center">

          <div class="col-lg-4 col-12">
            <a href="https://www.sears.com.mx/Mesa-de-Regalos/67167/boda%20" target="_blank">
              <div>
                <img src="{{asset('assets/img/Sears.png')}}" class="img-fluid logoimg" alt="Sears logo">
              </div>
            </a>
          </div>
          
          <div class="col-lg-4 col-12">
            <a href="https://mesaderegalos.liverpool.com.mx/milistaderegalos/51149319" target="_blank">
              <div>
                <img src="{{asset('assets/img/Liverpool.png')}}" class="img-fluid logoimg" alt="Liverpool logo">
              </div>
            </a>
          </div>

          
          <div class="col-lg-4 col-12">
            <a href="https://www.amazon.com.mx/wedding/mayra-barajas-marcos-perez-jalisco-november-2023/registry/2L2PEQDYWXEIJ" target="_blank">
              <div>
                <img src="{{asset('assets/img/amazon.png')}}" class="img-fluid logoimg" alt="Amazon logo">
              </div>
            </a>
          </div>

        </div>

      </div>
    </section><!-- End Clients Section -->

    <!-- ======= Why Us Section ======= -->
    <section id="why-us" class="why-us">
      <div class="container">
        <div class="row text-center m-2">
          <h1>Lodging's suggestions</h1>
        </div>
        <div class="row">
          <div class="col-lg-4" data-aos="fade-up">
            <div class="box text-center align-items-center">
              <span>Hotel Santa Barbara.</span>
              <h3 class="m-2">Tel: 348 783 3838</h3>
              <a href="https://goo.gl/maps/orriaX7Mj4RXYxae6" target="_blank">
                <button class="btn"><p class="hotelIcon"><i class="fa-solid fa-location-dot"></i> See location</p></button>
              </a>
            </div>
          </div>

          <div class="col-lg-4" data-aos="fade-up">
            <div class="box text-center align-items-center">
              <span>Hotel Centinela Grand.</span>
              <h3 class="m-2">Tel. 348 783 1192</h3>
              <a href="https://goo.gl/maps/UMPPKuxJkr84eWQK6" target="_blank">
                <button class="btn"><p class="hotelIcon"><i class="fa-solid fa-location-dot"></i> See location</p></button>
              </a>
            </div>
          </div>

          <div class="col-lg-4" data-aos="fade-up">
            <div class="box text-center align-items-center">
              <span>Casa Arandas Hotel-Suits.</span>
              <h3 class="m-2">Tel. 348 688 3717</h3>
              <a href="https://goo.gl/maps/mNMgNNuHW1MZ4sir7" target="_blank">
                <button class="btn"><p class="hotelIcon"><i class="fa-solid fa-location-dot"></i> See location</p></button>
              </a>
            </div>
          </div>

          <div class="col-lg-4" data-aos="fade-up">
            <div class="box text-center align-items-center">
              <span>Jagua Express Hotel.</span>
              <h3 class="m-2">Tel. 348 784 7519</h3>
              <a href="https://goo.gl/maps/tK3u1JrjorFUyrLz7" target="_blank">
                <button class="btn"><p class="hotelIcon"><i class="fa-solid fa-location-dot"></i> See location</p></button>
              </a>
            </div>
          </div>

          <div class="col-lg-4" data-aos="fade-up">
            <div class="box text-center align-items-center">
              <span>Charlotte Hotel Boutique.</span>
              <h3 class="m-2">Tel. 348 593 4647</h3>
              <a href="https://goo.gl/maps/bbepLSRJwWrpLguE8" target="_blank">
                <button class="btn"><p class="hotelIcon"><i class="fa-solid fa-location-dot"></i> See location</p></button>
              </a>
            </div>
          </div>

          <div class="col-lg-4" data-aos="fade-up">
            <div class="box text-center align-items-center">
              <span>Hotel Azul Agave.</span>
              <h3 class="m-2">Tel. 348 146 2094</h3>
              <a href="https://goo.gl/maps/La6CA3SjfYzv5xhj9" target="_blank">
                <button class="btn"><p class="hotelIcon"><i class="fa-solid fa-location-dot"></i> See location</p></button>
              </a>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Why Us Section -->


    <!-- ======= Services Section ======= -->
    <section id="services" class="services">
      <div class="container">

        <div class="section-title">
          <span>Services</span>
          <h2>Services</h2>
          <p>Sit sint consectetur velit quisquam cupiditate impedit suscipit alias</p>
        </div>

        <div class="row">
          <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="fade-up">
            <div class="icon-box">
              <div class="icon"><i class="bx bxl-dribbble"></i></div>
              <h4><a href="">Lorem Ipsum</a></h4>
              <p>Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi</p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-md-0" data-aos="fade-up" data-aos-delay="150">
            <div class="icon-box">
              <div class="icon"><i class="bx bx-file"></i></div>
              <h4><a href="">Sed ut perspiciatis</a></h4>
              <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore</p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-lg-0" data-aos="fade-up" data-aos-delay="300">
            <div class="icon-box">
              <div class="icon"><i class="bx bx-tachometer"></i></div>
              <h4><a href="">Magni Dolores</a></h4>
              <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia</p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4" data-aos="fade-up" data-aos-delay="450">
            <div class="icon-box">
              <div class="icon"><i class="bx bx-world"></i></div>
              <h4><a href="">Nemo Enim</a></h4>
              <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis</p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4" data-aos="fade-up" data-aos-delay="600">
            <div class="icon-box">
              <div class="icon"><i class="bx bx-slideshow"></i></div>
              <h4><a href="">Dele cardo</a></h4>
              <p>Quis consequatur saepe eligendi voluptatem consequatur dolor consequuntur</p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4" data-aos="fade-up" data-aos-delay="750">
            <div class="icon-box">
              <div class="icon"><i class="bx bx-arch"></i></div>
              <h4><a href="">Divera don</a></h4>
              <p>Modi nostrum vel laborum. Porro fugit error sit minus sapiente sit aspernatur</p>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Services Section -->


    <!-- ======= Portfolio Section ======= -->
    <section id="portfolio" class="portfolio">
      <div class="container">

        <div class="section-title">
          <span>Portfolio</span>
          <h2>Portfolio</h2>
          <p>Sit sint consectetur velit quisquam cupiditate impedit suscipit alias</p>
        </div>

        <div class="row" data-aos="fade-up">
          <div class="col-lg-12 d-flex justify-content-center">
            <ul id="portfolio-flters">
              <li data-filter="*" class="filter-active">All</li>
              <li data-filter=".filter-app">App</li>
              <li data-filter=".filter-card">Card</li>
              <li data-filter=".filter-web">Web</li>
            </ul>
          </div>
        </div>

        <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="150">

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <img src="assets/img/portfolio/portfolio-1.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>App 1</h4>
              <p>App</p>
              <a href="assets/img/portfolio/portfolio-1.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="App 1"><i class="bx bx-plus"></i></a>
              <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <img src="assets/img/portfolio/portfolio-2.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Web 3</h4>
              <p>Web</p>
              <a href="assets/img/portfolio/portfolio-2.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Web 3"><i class="bx bx-plus"></i></a>
              <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <img src="assets/img/portfolio/portfolio-3.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>App 2</h4>
              <p>App</p>
              <a href="assets/img/portfolio/portfolio-3.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="App 2"><i class="bx bx-plus"></i></a>
              <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <img src="assets/img/portfolio/portfolio-4.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Card 2</h4>
              <p>Card</p>
              <a href="assets/img/portfolio/portfolio-4.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Card 2"><i class="bx bx-plus"></i></a>
              <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <img src="assets/img/portfolio/portfolio-5.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Web 2</h4>
              <p>Web</p>
              <a href="assets/img/portfolio/portfolio-5.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Web 2"><i class="bx bx-plus"></i></a>
              <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <img src="assets/img/portfolio/portfolio-6.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>App 3</h4>
              <p>App</p>
              <a href="assets/img/portfolio/portfolio-6.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="App 3"><i class="bx bx-plus"></i></a>
              <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <img src="assets/img/portfolio/portfolio-7.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Card 1</h4>
              <p>Card</p>
              <a href="assets/img/portfolio/portfolio-7.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Card 1"><i class="bx bx-plus"></i></a>
              <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <img src="assets/img/portfolio/portfolio-8.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Card 3</h4>
              <p>Card</p>
              <a href="assets/img/portfolio/portfolio-8.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Card 3"><i class="bx bx-plus"></i></a>
              <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <img src="assets/img/portfolio/portfolio-9.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Web 3</h4>
              <p>Web</p>
              <a href="assets/img/portfolio/portfolio-9.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Web 3"><i class="bx bx-plus"></i></a>
              <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Portfolio Section -->

    <!-- ======= Pricing Section ======= -->
    <section id="pricing" class="pricing">
      <div class="container">

        <div class="section-title">
          <span>Pricing</span>
          <h2>Pricing</h2>
          <p>Sit sint consectetur velit quisquam cupiditate impedit suscipit alias</p>
        </div>

        <div class="row">

          <div class="col-lg-4 col-md-6" data-aos="zoom-in" data-aos-delay="150">
            <div class="box">
              <h3>Free</h3>
              <h4><sup>$</sup>0<span> / month</span></h4>
              <ul>
                <li>Aida dere</li>
                <li>Nec feugiat nisl</li>
                <li>Nulla at volutpat dola</li>
                <li class="na">Pharetra massa</li>
                <li class="na">Massa ultricies mi</li>
              </ul>
              <div class="btn-wrap">
                <a href="#" class="btn-buy">Buy Now</a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 mt-4 mt-md-0" data-aos="zoom-in">
            <div class="box featured">
              <h3>Business</h3>
              <h4><sup>$</sup>19<span> / month</span></h4>
              <ul>
                <li>Aida dere</li>
                <li>Nec feugiat nisl</li>
                <li>Nulla at volutpat dola</li>
                <li>Pharetra massa</li>
                <li class="na">Massa ultricies mi</li>
              </ul>
              <div class="btn-wrap">
                <a href="#" class="btn-buy">Buy Now</a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 mt-4 mt-lg-0" data-aos="zoom-in" data-aos-delay="150">
            <div class="box">
              <h3>Developer</h3>
              <h4><sup>$</sup>29<span> / month</span></h4>
              <ul>
                <li>Aida dere</li>
                <li>Nec feugiat nisl</li>
                <li>Nulla at volutpat dola</li>
                <li>Pharetra massa</li>
                <li>Massa ultricies mi</li>
              </ul>
              <div class="btn-wrap">
                <a href="#" class="btn-buy">Buy Now</a>
              </div>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Pricing Section -->

    <!-- ======= Team Section ======= -->
    <section id="team" class="team">
      <div class="container">

        <div class="section-title">
          <span>Team</span>
          <h2>Team</h2>
          <p>Sit sint consectetur velit quisquam cupiditate impedit suscipit alias</p>
        </div>

        <div class="row">
          <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="zoom-in">
            <div class="member">
              <img src="assets/img/team/team-1.jpg" alt="">
              <h4>Walter White</h4>
              <span>Chief Executive Officer</span>
              <p>
                Magni qui quod omnis unde et eos fuga et exercitationem. Odio veritatis perspiciatis quaerat qui aut aut aut
              </p>
              <div class="social">
                <a href=""><i class="bi bi-twitter"></i></a>
                <a href=""><i class="bi bi-facebook"></i></a>
                <a href=""><i class="bi bi-instagram"></i></a>
                <a href=""><i class="bi bi-linkedin"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="zoom-in">
            <div class="member">
              <img src="assets/img/team/team-2.jpg" alt="">
              <h4>Sarah Jhinson</h4>
              <span>Product Manager</span>
              <p>
                Repellat fugiat adipisci nemo illum nesciunt voluptas repellendus. In architecto rerum rerum temporibus
              </p>
              <div class="social">
                <a href=""><i class="bi bi-twitter"></i></a>
                <a href=""><i class="bi bi-facebook"></i></a>
                <a href=""><i class="bi bi-instagram"></i></a>
                <a href=""><i class="bi bi-linkedin"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="zoom-in">
            <div class="member">
              <img src="assets/img/team/team-3.jpg" alt="">
              <h4>William Anderson</h4>
              <span>CTO</span>
              <p>
                Voluptas necessitatibus occaecati quia. Earum totam consequuntur qui porro et laborum toro des clara
              </p>
              <div class="social">
                <a href=""><i class="bi bi-twitter"></i></a>
                <a href=""><i class="bi bi-facebook"></i></a>
                <a href=""><i class="bi bi-instagram"></i></a>
                <a href=""><i class="bi bi-linkedin"></i></a>
              </div>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Team Section -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container">

        <div class="section-title">
          <span>Contact</span>
          <h2>Contact</h2>
          <p>Sit sint consectetur velit quisquam cupiditate impedit suscipit alias</p>
        </div>

        <div class="row" data-aos="fade-up">
          <div class="col-lg-6">
            <div class="info-box mb-4">
              <i class="bx bx-map"></i>
              <h3>Our Address</h3>
              <p>A108 Adam Street, New York, NY 535022</p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6">
            <div class="info-box  mb-4">
              <i class="bx bx-envelope"></i>
              <h3>Email Us</h3>
              <p>contact@example.com</p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6">
            <div class="info-box  mb-4">
              <i class="bx bx-phone-call"></i>
              <h3>Call Us</h3>
              <p>+1 5589 55488 55</p>
            </div>
          </div>

        </div>

        <div class="row" data-aos="fade-up">

          <div class="col-lg-6 ">
            <iframe class="mb-4 mb-lg-0" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12097.433213460943!2d-74.0062269!3d40.7101282!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xb89d1fe6bc499443!2sDowntown+Conference+Center!5e0!3m2!1smk!2sbg!4v1539943755621" frameborder="0" style="border:0; width: 100%; height: 384px;" allowfullscreen></iframe>
          </div>

          <div class="col-lg-6">
            <form action="forms/contact.php" method="post" role="form" class="php-email-form">
              <div class="row">
                <div class="col-md-6 form-group">
                  <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
                </div>
                <div class="col-md-6 form-group mt-3 mt-md-0">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
                </div>
              </div>
              <div class="form-group mt-3">
                <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
              </div>
              <div class="form-group mt-3">
                <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
              </div>
              <div class="my-3">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Your message has been sent. Thank you!</div>
              </div>
              <div class="text-center"><button type="submit">Send Message</button></div>
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

          <div class="col-lg-4 col-md-6">
            <div class="footer-info">
              <h3>Day</h3>
              <p>
                A108 Adam Street <br>
                NY 535022, USA<br><br>
                <strong>Phone:</strong> +1 5589 55488 55<br>
                <strong>Email:</strong> info@example.com<br>
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

          <div class="col-lg-2 col-md-6 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Home</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">About us</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Services</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Terms of service</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Privacy policy</a></li>
            </ul>
          </div>

          <div class="col-lg-2 col-md-6 footer-links">
            <h4>Our Services</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Web Design</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Web Development</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Product Management</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Marketing</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Graphic Design</a></li>
            </ul>
          </div>

          <div class="col-lg-4 col-md-6 footer-newsletter">
            <h4>Our Newsletter</h4>
            <p>Tamen quem nulla quae legam multos aute sint culpa legam noster magna</p>
            <form action="" method="post">
              <input type="email" name="email"><input type="submit" value="Subscribe">
            </form>

          </div>

        </div>
      </div>
    </div>

    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong><span>Day</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/day-multipurpose-html-template-for-free/ -->
        Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
      </div>
    </div>
  </footer><!-- End Footer -->

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
  <script src="{{asset('assets/js/main.js')}}"></script>

  <script src="{{asset('assets/js/particles.js')}}"></script>
  <script src="{{asset('assets/js/app.js')}}"></script>

  

  @livewireScripts
</body>

</html>