@extends('layouts.app')
@section('content')
    <?php
    use Jenssegers\Agent\Agent;

    $agent = new Agent();
    ?>
    <div class="container-fluid py-5" style="background-image: url({{ $agent->isMobile()? asset('images/servicebgmobile.png') : asset('images/servicebg.jpg') }}); background-size: cover; {{ $agent->isMobile() ? "background-position: right;" : "background-position: center;" }} ">
        <div class="container" style="{{ !$agent->isMobile() ? "padding-top: 260px; padding-bottom: 190px;" : "padding-top: 130px; padding-bottom: 85px;"}} ">
            <div class="row">
                <div class="col-lg-5 col-6">
                    <h1 class="font-weight-bold" style="{{ $agent->isMobile() ? 'font-size: 20px' : 'font-size: 37px' }}; ">
                        {{ $service->title }}
                    </h1>
                </div>
            </div>


        </div>
    </div>
    <div class="container" style="transform: translateY(-100px);">
        {!! $service->content !!}
    </div>
    <div class="container mb-5">
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
            </div>
        </div>
    </div>
@endsection