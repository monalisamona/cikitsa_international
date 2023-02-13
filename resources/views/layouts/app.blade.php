<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>cilitsa international</title>
    <!-- Bootstrap CSS -->
    <link href="{{asset('https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css')}}"  rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />

    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="{{('https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css')}}" />

    <!-- Font awesome Icons -->
        <link rel="stylesheet" href="{{('https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css')}}"
        integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- Google Fonts -->
    <link rel="preconnect" href="{{('https://fonts.googleapis.com')}}" />
    <link rel="preconnect" href="{{('https://fonts.gstatic.com')}}" crossorigin />
    <link href="{{('https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@200;300;400;600;700;800;900&display=swap')}}"rel="stylesheet" />

    <!-- Animate CSS -->
    <link href="{{asset('https://unpkg.com/aos@2.3.1/dist/aos.css')}}" rel="stylesheet">

    <!-- SwiperJS CSS-->
  
    <link rel="stylesheet" href="{{('https://unpkg.com/swiper@7/swiper-bundle.min.css')}}" />


    <!-- Custom CSS -->
    <link href="{{asset('assets/css/style.css')}}" rel="stylesheet"> 

    <style>
        /* .card{
        box-shadow: 20px 20px 80px -44px #000;
      } */
        .card:hover {
          box-shadow: 20px 20px 80px -44px #000;
          transition: 0.5s ease-in-out;
          cursor: pointer;
        }
      </style>
</head>

<body id="home">
    @include('layouts.menue')
   
    <main>
        @yield('content')
    </main>

    <footer class="footer pt-5 bg-light">
        @include('layouts.footer')
    </footer>
   



<!-- Bootstrap JS -->
    <script src="{{('https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js')}}"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
<!-- jQuery -->
    <script src="{{('https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js')}}"
    integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<!-- ANIMATION JS -->
    <script src="{{('https://unpkg.com/aos@2.3.1/dist/aos.js')}}"></script>
    <script src="{{('')}}"></script>

<!-- Swiper JS -->
    <script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

<!-- Custom JS -->
    <script src="{{('assets/js/typewriter.js')}}"></script>
    <script src="{{('assets/js/counter.js')}}"></script>
    <script src="{{('assets/js/testimonial.js')}}"></script>
    <script src="{{('assets/js/navbar.js')}}"></script>
    <script src="{{('assets/js/script.js')}}"></script>
<!-- ANIMATION JS -->
 <!-- TYPEWRITER JS -->
 <script>
    let bannerText = document.getElementById('bannerText');

    let typewriter = new Typewriter(bannerText, {
      loop: false,
      delay: 50,
      cursor: ' ',
    });

    typewriter
      .typeString('Complete  Health Solution')
      .pauseFor(1500)
      // .deleteAll()
      .start();
  </script>

  <!-- ANIMATION JS -->
  <script>
    AOS.init({
      once: true,
    });
  </script>

  <!-- TRANSLATOR JS  -->
  <script type="text/javascript"
    src="https://translate.google.com/translate_a/element.js?cb=googleTranslateElementInit2"></script>
  <script src="assets/js/translator.js"></script>
</body>
</html>