<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>{{$event->name_e}}</title>
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

  <!-- Vendor CSS Files -->
  <link href="{{asset('assets/vendor/aos/aos.css')}}" rel="stylesheet">
  <link href="{{asset('assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
  <link href="{{asset('assets/vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
  <link href="{{asset('assets/vendor/boxicons/css/boxicons.min.css')}}" rel="stylesheet">
  <link href="{{asset('assets/vendor/glightbox/css/glightbox.min.css')}}" rel="stylesheet">
  <link href="{{asset('assets/vendor/swiper/swiper-bundle.min.css')}}" rel="stylesheet">



  @livewireStyles

  <!-- =======================================================
  * Template Name: Day - v4.10.0
  * Template URL: https://bootstrapmade.com/day-multipurpose-html-template-for-free/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <main class="m-4">
    <h1>Invitados de {{$event->name_e}}</h1>

    @livewire('guests-index', ['event' => $event->id])

  </main>

  @livewireScripts

  <script src="https://cdn.jsdelivr.net/npm/clipboard@2.0.11/dist/clipboard.min.js"></script>

  <script>
    new ClipboardJS('.copy-btn');
  </script>

</body>

</html>