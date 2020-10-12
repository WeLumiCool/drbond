<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="description" content="Стоматология DrBond
Нас рекомендуют друзьям и приходят всей семьей  Запишитесь на бесплатную консультацию к главному врачу  Запись WhatsApp   ВРЕМЯ РАБОТЫ  Понедельник - Пятница
9:00 - 19:00"/>
    <title>Стоматологическая клиника - DrBond</title>
    <link rel="icon" type="image/png" href="{{ asset('images/icons/favicon.png') }}">

    <!-- Scripts -->

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&display=swap" rel="stylesheet">
    {{--<link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">--}}
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/main.css') }}" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/owl.theme.default.min.css') }}">
</head>
<body>
<div class="preloader">
    <div class="row h-100 align-items-center justify-content-center">
        <div class="col-6 h-100 first-preload bg-white"></div>
        <div class="col-6 h-100 second-preload bg-white"></div>
        <img class="position-absolute img-preload" style="top:50%; left:50%; transform: translate(-50%, -50%); z-index: 1000000;" src="{{ asset('images/icons/mainlogo.svg') }}" alt="">
    </div>
</div>
    <div id="app">
        @include('partials.header')

        <main>
            @yield('content')
        </main>
        @include('partials.footer')

        <a href="tel:+77017882240" target="_blank">
            <div class="position-fixed d-flex align-items-center justify-content-center whatsapp-circle alert" style="background-color:  rgba(211, 39, 39, 0.47); height: 80px; width: 80px; border-radius: 50%; bottom: 5%; left: 5%;">
                <div class="position-relative d-flex align-items-center justify-content-center" style="background-color: rgba(211, 39, 39, 0.47); height: 70px; width: 70px; border-radius: 50%;">
                    <div class="position-relative d-flex align-items-center justify-content-center" style="background-color: #D32727; height: 60px; width: 60px; border-radius: 50%; z-index: 9999;">
                        <i class="fas fa-phone fa-2x text-white"></i>
                        <div class="position-absolute py-2 px-2 text-white small alert-text" style="top:25%; left:80%;width: 150px; background-color: #D32727; border-radius: 30px;">Запись при острой боли</div>
                    </div>
                </div>
            </div>
        </a>
        <a href="http://api.whatsapp.com/send?phone=77017882240" target="_blank">
        <div class="position-fixed d-flex align-items-center justify-content-center whatsapp-circle alert" style="background-color:  rgba(15, 166, 57, 0.47); height: 80px; width: 80px; border-radius: 50%; bottom: 5%; right: 5%;">
        <div class="position-relative d-flex align-items-center justify-content-center" style="background-color: rgba(15, 166, 57, 0.47); height: 70px; width: 70px; border-radius: 50%;">
            <div class="position-relative d-flex align-items-center justify-content-center" style="background-color: #0FA639; height: 60px; width: 60px; border-radius: 50%; z-index: 9999;">
                <i class="fab fa-whatsapp fa-2x text-white"></i>
                <div class="position-absolute py-2 px-2 text-white small alert-text" style="top:25%; right:80%;width: 150px; background-color: #0FA639; border-radius: 30px;">Запись на Whatsapp</div>
            </div>
        </div>
        </div>
        </a>

    </div>

    <script src="{{ asset('js/app.js') }}"></script>
    <script src="{{ asset('js/owl.carousel.js') }}"></script>
    <script>
        $(document).ready(function() {
            $(window).scroll(function() {
                var scrollTop = $(window).scrollTop();
                if (scrollTop >= 50) {
                    $('.menuse').removeClass('shadow-none');
                    $('.menuse').addClass('solid-nav');
                    $('.menuse').addClass('py-0');
                    $('.menuse').removeClass('pt-3');
                    document.getElementById('logo').style.opacity = 1;
                }
                else
                {
                    $('.menuse').addClass('shadow-none');
                    $('.menuse').removeClass('solid-nav');
                    $('.menuse').removeClass('py-0');
                    $('.menuse').addClass('pt-3');
                    document.getElementById('logo').style.opacity = 0;
                }
            });
        });

        $(document).on('click', '.navbar-toggler', function (e) {

            var original = window.location.origin + '/';
            var btn = $(e.currentTarget);
            var scrollTop = $(window).scrollTop();
            if (scrollTop < 50 && btn.hasClass('collapsed') == false) {
                $('.menuse').removeClass('shadow-none');
                $('.menuse').addClass('solid-nav');
                $('.menuse').removeClass('pt-3');

            } else if (scrollTop < 50 && btn.hasClass('collapsed') == true) {
                $('.menuse').removeClass('solid-nav');
                $('.menuse').addClass('shadow-none');
                $('.menuse').addClass('pt-3');
            }
        });
    </script>
    <script>
        var owl = $('.owl-one');
        owl.owlCarousel({
            margin: 10,
            loop: true,
            // autoplay:true,
            // autoplayTimeout:5000,
            // autoplaySpeed: 1500,
            // autoplayHoverPause:true,
            responsive: {
                0: {
                    items: 1
                },
            }
        })
    </script>
<script>
    function preloader() {
        $('.first-preload').addClass('left-preload');
        $('.second-preload').addClass('right-preload');
        $('.preloader').fadeOut('slow').delay(1000);
    }
</script>
<script>
    setTimeout(preloader, 500);
</script>
</body>
</html>
