<nav class="navbar navbar-expand-md navbar-light shadow-sm fixed-top menuse shadow-none pt-3">
    <div class="container">
        <a class="navbar-brand" href="{{ url('/') }}">
            <img class="img-fluid" src="{{ asset('images/icons/mainlogo.svg') }}" alt="">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <!-- Left Side Of Navbar -->
            <ul class="navbar-nav mr-auto">

            </ul>

            <!-- Right Side Of Navbar -->
            <ul class="navbar-nav ml-auto d-flex align-items-center">
                <!-- Authentication Links -->
                <a href="/#main" style="text-decoration: none;">
                    <p class="mb-0 menu-point font-size-14 font-weight-bold mx-4 my-lg-0 my-2">
                        Главное
                    </p>
                </a>
                <a href="/#services" style="text-decoration: none;">
                    <p class="mb-0 menu-point font-size-14 font-weight-bold mx-4 my-lg-0 my-2">
                        Услуги
                    </p>
                </a>
                <a href="/#about" style="text-decoration: none;">
                    <p class="mb-0 menu-point font-size-14 font-weight-bold mx-4 my-lg-0 my-2">
                        О нас
                    </p>
                </a>
                <a href="/#contact" style="text-decoration: none;">
                    <p class="mb-0 menu-point font-size-14 font-weight-bold mx-4 my-lg-0 my-2">
                        Контакты
                    </p>
                </a>
                <a href="{{ route('articles') }}" style="text-decoration: none;">
                    <p class="mb-0 menu-point font-size-14 font-weight-bold mx-4 my-lg-0 my-2">
                        Статьи
                    </p>
                </a>
                <a class="d-lg-block d-none" href="tel:+77017882240" style="text-decoration: none;">
                    <button class="btn drb-button text-white font-weight-normal roboto py-1 px-3" style="background-color: #30ACB0;">
                        Запись на бесплатную консультацию
                    </button>
                </a>
            </ul>
        </div>
    </div>
</nav>