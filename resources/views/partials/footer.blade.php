<?php
    $mainpage = \App\Mainpage::find(1);
?>
<div class="container-fluid p-0 position-relative" style="background-color: #30ACB0;" id="contact">
    <div class=" position-relative">
        {!! $mainsettings->map_url !!}
    <div class="d-lg-block d-none rounded position-absolute p-4" style="left:65%; top: 12.5%; min-height: 75%; width: 30%; background-color: #30ACB0; border-radius: 15px;">
        <p class="text-white font-size-16 font-weight-normal roboto">
            {{ $mainpage->footer1 }}
        </p>
        <div class="row p-3 " style="border-radius: 20px; border: 1px solid #FFFFFF;">
            <div class="col-5">
                <div class="d-flex align-items-center">
                    <img src="{{ asset('images/icons/call2.svg') }}" alt=""><span class="font-size-16 font-weight-bold roboto ml-2 work-point-2 position-relative" style="color: #fefefe;">Контакты</span>
                </div>
                <a href="tel:{{ $mainsettings->phone1 }}">
                    <p class="font-size-12 font-weight-normal roboto mb-1 mt-2 text-white">{{ $mainsettings->phone1 }}</p>
                </a>
                <a href="tel:{{ $mainsettings->phone2 }}">
                        <p class="font-size-12 font-weight-normal roboto mb-1 text-white">{{ $mainsettings->phone2 }}</p>
                </a>

                <a href="tel:{{ $mainsettings->phone3 }}">
                        <p class="font-size-12 font-weight-normal roboto mb-1 text-white">{{ $mainsettings->phone3 }}</p>
                </a>
                <a href="tel:{{ $mainsettings->phone4 }}">
                    <p class="font-size-12 font-weight-normal roboto mb-0 text-white">{{ $mainsettings->phone4 }}</p>
                </a>
            </div>
            <div class="col-7">
                <div class="d-flex align-items-center">
                    <span class="font-size-16 font-weight-bold roboto ml-2 work-point-2 position-relative" style="color: #fefefe;">Узнайте больше о нас</span>
                </div>
                <div class="d-flex mt-3 ml-1">
                    <a href="{{ $mainsettings->facebook }}" style="text-decoration: none;" target="_blank">
                    <div class="d-flex align-items-center justify-content-center bg-white" style="width: 40px; height: 40px; box-shadow: 2px 2px 5px rgba(0, 0, 0, 0.15); border-radius: 5px;">
                        <i class="fab fa-facebook-square fa-lg" style="color: #30ACB0;"></i>
                    </div></a>
                    <a href="{{ $mainsettings->instagram }}" style="text-decoration: none;" target="_blank">
                    <div class="d-flex align-items-center justify-content-center bg-white ml-2" style="width: 40px; height: 40px; box-shadow: 2px 2px 5px rgba(0, 0, 0, 0.15); border-radius: 5px;">
                        <i class="fab fa-instagram fa-lg" style="color: #30ACB0;"></i>
                    </div></a>
                </div>
            </div>
        </div>
    </div>
    </div>
    <div class="container">
        <div class="row py-3">
            <div class="col-lg-2 col-12 text-lg-left text-center">
                <img src="{{ asset('images/icons/logowhite.svg') }}" alt="">
            </div>
            <div class="col-lg-3 col-12 text-lg-left text-center">
                <span class="font-size-16 font-weight-bold text-white roboto">
                2020 все права защищены.
            </span>
            </div>
            <div class="col-lg-2 col-6 text-lg-left text-center">
                <a href="/#main">
                    <p class="font-size-14 font-weight-normal text-white roboto mb-1">
                        Главная
                    </p>
                </a>
                <a href="/#services">
                    <p class="font-size-14 font-weight-normal text-white roboto mb-0">
                        Услуги
                    </p>
                </a>
            </div>
            <div class="col-lg-2 col-6 text-lg-left text-center">
                <a href="/#about">
                    <p class="font-size-14 font-weight-normal text-white roboto mb-1">
                        О нас
                    </p>
                </a>
                <a href="/#contact">
                    <p class="font-size-14 font-weight-normal text-white roboto mb-0">
                        Контакты
                    </p>
                </a>
            </div>
            <div class="col-lg-3 col-12 px-lg-0 px-4 mt-lg-0 mt-4">
                <a href="tel:{{ $mainsettings->info }}">
                    <button class="btn bg-transparent font-size-12 text-white px-4 w-100 drb-button-2" style="border: 1px solid #fefefe; border-radius: 45px;">Узнать стоимость лечения по телефону</button>
                </a>
            </div>
        </div>
    </div>
</div>