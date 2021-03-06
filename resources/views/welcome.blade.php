@extends('layouts.app')
@section('content')
    <?php
    use Jenssegers\Agent\Agent;

    $agent = new Agent();
    $mainsettings = \App\Mainsetting::find(1);
    $mainpage = \App\Mainpage::find(1);
    ?>
    <div class="container-fluid py-5 d-flex align-items-center" id="main" style="min-height: 100vh; {{ $agent->isMobile() ? "background-image: url(". asset('images/mainbgmobile.jpg') .");" :  "background-image: url(". asset('images/mainbg.jpg') .");"}}  background-size: cover; background-position: center;">
        <div class="container">
            <div class="row">
                <div class="col-lg-5 col-12 px-lg-3 px-0">
                    <h1 class="font-weight-bold roboto" style="{{ $agent->isMobile() ? "font-size: 18px;" : "font-size: 37px;" }} color: #4E4E4E;">
                        {{ $mainpage->title11 }} <br>
                        <span style="color: #30ACB0;">{{ $mainpage->title12 }}</span>
                    </h1>
                    @if(!$agent->isMobile())
                    <p class="font-size-16 roboto pr-5 mr-5">{{ $mainpage->desc1 }}</p>
                    @else
                        <p class="font-size-12 roboto pr-5 mr-5">{{ $mainpage->desc1 }}</p>
                    @endif
                    <a href="tel:{{ $mainsettings->visit }}">
                    <button class="btn drb-button text-white font-weight-normal roboto">
                        Бесплатная консультация
                    </button>
                    </a>
                    <div class="row mt-5 justify-content-between">
                        <div class="col-6">
                            <div class="d-flex align-items-center">
                            <img src="{{ asset('images/icons/time.svg') }}" alt=""><span class="{{ $agent->isMobile() ? "font-size: 14px;" : "font-size: 18px;" }} font-weight-bold roboto ml-2 work-point position-relative" style="color: #30ACB0;">Время работы</span>
                            </div>
                            <div class="d-flex justify-content-between mt-3" style="border-bottom: 1px solid #373737;">
                                <div class="col-6 px-0">
                                    <p class="{{ $agent->isMobile() ? "font-size-10" : "font-size-14" }} font-weight-bold roboto mb-1" style="color: #373737">{{ $mainsettings->work1 }}</p>
                                </div>
                                <div class="col-6 px-0 text-right">
                                    <p class="{{ $agent->isMobile() ? "font-size-10" : "font-size-14" }} font-weight-bold roboto mb-1" style="color: #373737">{{ $mainsettings->worktime1 }}</p>
                                </div>
                            </div>
                            <div class="d-flex justify-content-between mt-1" style="border-bottom: 1px solid #373737;">
                                <div class="col-6 px-0">
                                    <p class="{{ $agent->isMobile() ? "font-size-10" : "font-size-14" }} font-weight-bold roboto mb-1" style="color: #373737">{{ $mainsettings->work2 }}</p>
                                </div>
                                <div class="col-6 px-0 text-right">
                                    <p class="{{ $agent->isMobile() ? "font-size-10" : "font-size-14" }} font-weight-bold roboto mb-1" style="color: #373737">{{ $mainsettings->worktime2 }}</p>
                                </div>
                            </div>
                            <div class="d-flex justify-content-between mt-1">
                                <div class="col-6 px-0">
                                    <p class="{{ $agent->isMobile() ? "font-size-10" : "font-size-14" }} font-weight-bold roboto mb-1" style="color: #373737">{{ $mainsettings->work3 }}</p>
                                </div>
                                <div class="col-6 px-0 text-right">
                                    <p class="{{ $agent->isMobile() ? "font-size-10" : "font-size-14" }} font-weight-bold roboto mb-1" style="color: #373737">{{ $mainsettings->worktime3 }}</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-5">
                            <div class="d-flex align-items-center">
                                <img src="{{ asset('images/icons/call.svg') }}" alt=""><span class="{{ $agent->isMobile() ? "font-size: 14px;" : "font-size: 18px;" }} font-weight-bold roboto ml-2 work-point position-relative" style="color: #30ACB0;">Контакты</span>
                            </div>
                            <a href="tel:{{ $mainsettings->phone1 }}">
                                <p class="{{ $agent->isMobile() ? "font-size-10" : "font-size-14" }} font-weight-bold text-dark roboto mb-1 mt-3">
                                    {{ $mainsettings->phone1 }}</p>
                            </a>
                            <a href="tel:{{ $mainsettings->phone2 }}">
                                <p class="{{ $agent->isMobile() ? "font-size-10" : "font-size-14" }} font-weight-bold text-dark roboto mb-1">
                                    {{ $mainsettings->phone2 }}</p>
                            </a>
                            <a href="tel:{{ $mainsettings->phone3 }}">
                                <p class="{{ $agent->isMobile() ? "font-size-10" : "font-size-14" }} font-weight-bold text-dark roboto mb-1">
                                    {{ $mainsettings->phone3 }}</p>
                            </a>
                            <a href="tel:{{ $mainsettings->phone4 }}">
                                <p class="{{ $agent->isMobile() ? "font-size-10" : "font-size-14" }} font-weight-bold text-dark roboto mb-1">
                                    {{ $mainsettings->phone4 }}</p>
                            </a>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid py-5" style="background-color: #F9F9F9;" id="services">
        <h3 class="{{ $agent->isMobile() ? "font-size-20" : "font-size-30" }} roboto font-weight-bold text-center">Наши услуги</h3>
        <div class="container mt-5 px-lg-5 px-2">
            <div class="row justify-content-between">
                @foreach($services as $service)
                <div class="col-lg-3 col-6 mb-4 mt-lg-5 mt-0 ml-lg-5 ml-0">
                    <div class="text-center py-lg-5 py-4 px-4 position-relative h-100" style="border-radius: 10px; box-shadow: 0px 0px 22px rgba(0, 0, 0, 0.12);">
                        <img class="w-50" src="{{ asset('storage/'.$service->icon) }}" alt="">
                        <p class="{{ $agent->isMobile() ? "font-size-12" : "font-size-18" }} font-weight-bold roboto mt-4 mb-lg-5 mb-4" style="color: #8C8C8C;">{{$service->name}}</p>
                        <a href="{{route('service',$service->id)}}">
                        <button class="btn drb-button-1 {{ $agent->isMobile() ? "font-size-6 px-2 py-2" : "font-size-14 px-2 py-2" }} font-weight-bold w-50 text-white" style="position: absolute; bottom:-5%; left: 25%;">
                            Подробнее
                        </button>
                        </a>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>

    <div class="container-fluid py-5" style="background-color: #F9F9F9;" id="about">
        <div class="container">
            <div class="row">
                <div class="col-lg-7 col-12">
                    <img class="img-fluid" src="{{ asset('storage/'.$mainpage->image2) }}" alt="">
                </div>
                <div class="col-lg-4 col-12 order-lg-last order-first d-flex align-items-center">
                    <div class="third-content position-relative">
                    <h3 class="text-dark roboto" style="{{ $agent->isMobile() ? "font-size: 20px;" : "font-size: 35px;" }}">{{ $mainpage->title2 }}</h3>
                    <p class="font-size-16 roboto" style="color: #969696;">
                        {{ $mainpage->desc2 }}
                    </p>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-7 col-12">
                    <h3 class="{{ $agent->isMobile() ? "font-size-20" : "font-size-30" }} roboto font-weight-bold text-center mt-5">{{ $mainpage->title3 }}</h3>
                    <p class="font-size-16 roboto text-center mt-4" style="color: #969696;">
                        {{ $mainpage->desc3 }}
                    </p>
                    <div class="row mt-5">
                        <div class="col-6 border-right border-bottom d-flex align-items-center justify-content-center" style="min-height: 150px;">
                            <img class="w-75" src="{{ asset('storage/'.$mainpage->garant1) }}" alt="">
                        </div>
                        <div class="col-6 border-bottom d-flex align-items-center justify-content-center" style="min-height: 150px;">
                            <img class="w-75" src="{{ asset('storage/'.$mainpage->garant2) }}" alt="">
                        </div>
                        <div class="col-6 border-right d-flex align-items-center justify-content-center" style="min-height: 150px;">
                            <img class="w-75" src="{{ asset('storage/'.$mainpage->garant3) }}" alt="">
                        </div>
                        <div class="col-6 d-flex align-items-center justify-content-center" style="min-height: 150px;">
                            <img class="w-75" src="{{ asset('storage/'.$mainpage->garant4) }}" alt="">
                        </div>
                    </div>
                    <div class="text-center mt-4">
                        <a href="tel:{{ $mainsettings->visit }}">
                        <button class="btn drb-button text-white font-weight-normal roboto px-5">
                            Записаться
                        </button>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid bg-white py-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-9 col-12">
                    <p class="font-size-12 mb-0" style="color: #30ACB0;">
                        О нас говорят
                    </p>
                    <p class="text-dark roboto font-weight-bold" style="{{ $agent->isMobile() ? "font-size: 20px;" : "font-size: 35px;" }}">Отзывы клиентов</p>

                    <div class="owl-one owl-carousel text-center">
                        @foreach(\App\Comment::all() as $comment)
                        <div class="item d-flex">
                            <div class="mr-3 mt-2" style="width:25%; height:1px; background-color: #969696;"></div>
                            <div>
                            <p class="font-size-16 roboto mt-0 text-left" style="color: #969696;">
                                {{ $comment->desc }}
                            </p>
                            </div>
                        </div>
                        @endforeach
                    </div>

                    <div class="row mt-5">
                        <div class="col-lg-4 col-12 text-center mb-lg-0 mb-4">
                            <img style="max-height: 81px" class="img-fluid" src="{{ asset('storage/'.$mainpage->previmg1) }}" alt="">
                            <p class="font-size-16 roboto mt-3" style="color: #969696;">
                                {{ $mainpage->prevtext1 }}
                            </p>
                        </div>
                        <div class="col-lg-4 col-12 text-center mb-lg-0 mb-4">
                            <img style="max-height: 81px" class="img-fluid" src="{{ asset('storage/'.$mainpage->previmg2) }}" alt="">
                            <p class="font-size-16 roboto mt-3" style="color: #969696;">
                                {{ $mainpage->prevtext2 }}
                            </p>
                        </div>
                        <div class="col-lg-4 col-12 text-center mb-lg-0 mb-4">
                            <img style="max-height: 81px" class="img-fluid" src="{{ asset('storage/'.$mainpage->previmg3) }}" alt="">
                            <p class="font-size-16 roboto mt-3" style="color: #969696;">
                                {{ $mainpage->prevtext3 }}
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid py-5" style="background-image: url({{ asset('images/4bg.jpg') }}); background-size: cover; background-position: center;">
        <div class="container">
            <div class="col-lg-7 col-12">
            <h3 class="text-white roboto" style="{{ $agent->isMobile() ? "font-size: 20px;" : "font-size: 35px;" }}">
                {{ $mainpage->title4 }}
            </h3>

            <p class="font-size-16 roboto text-white mt-4">
                {{ $mainpage->desc4 }}
            </p>
                <a href="tel:{{ $mainsettings->info }}">
                    <button class="btn bg-transparent text-white px-4 mt-3 drb-button-2" style="border: 1px solid #fefefe; border-radius: 45px;">Узнать стоимость лечения по телефону</button>
                </a>
            </div>

        </div>
    </div>

    <div class="container-fluid py-5 bg-white">
        <div class="container">
            <h3 class="text-dark roboto text-center" style="font-size: 35px;">
                Полезные статьи
            </h3>
            <div class="row mt-4">
                @foreach($articles as $article)
                <div class="col-lg-3 col-6">
                    <a href="{{ route('article', $article->id) }}" style="text-decoration: none; ">
                    <div class="" style="{{ $agent->isMobile() ? "height: 100px;" : "height: 150px;" }} background-image: url({{ asset('storage/'.str_replace('\\', '/', $article->image)) }}); background-size: cover; background-position: center;"></div>
                    <p class="{{ $agent->isMobile() ? "font-size-12" : "font-size-16" }} text-dark font-weight-bold line-height-120 mt-2">
                        {{$article->title}}
                    </p>

                        <p class="font-size-12" style="color: #C4C4C4;">Читать далее>></p>
                    </a>
                </div>

                @endforeach
            </div>
            <div class="d-flex align-items-center justify-content-center">
                <a href="{{ route('articles') }}">
                    <button class="btn bg-transparent font-size-14 px-4 py-1 drb-button-2" style="color: #30ACB0; border-radius: 20px; border: 1px solid #30ACB0;">Смотреть все статьи</button>
                </a>
            </div>
        </div>
    </div>
@endsection
