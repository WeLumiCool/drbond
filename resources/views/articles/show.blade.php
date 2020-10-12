@extends('layouts.app')
@section('content')
    <style>
        html
        {
            overflow-x: hidden;
        }
    </style>
    <?php
    use Jenssegers\Agent\Agent;

    $agent = new Agent();
    ?>
    <div class="container-fluid py-5" style="background-image: url({{ $agent->isMobile()? asset('images/servicebgmobile.png') : asset('images/servicebg.jpg') }}); background-size: cover; {{ $agent->isMobile() ? "background-position: right;" : "background-position: center;" }} ">
        <div class="container" style="{{ !$agent->isMobile() ? "padding-top: 260px; padding-bottom: 190px;" : "padding-top: 130px; padding-bottom: 85px;"}} ">
            <div class="row">
                <div class="col-lg-5 col-6">
                    <h1 class="font-weight-bold" style="{{ $agent->isMobile() ? 'font-size: 20px' : 'font-size: 37px' }}; ">
                        {{ $article->title }}
                    </h1>
                </div>
            </div>

        </div>
    </div>
    <div class="container py-5">
        <div class="py-4">
            {!! $article->desc !!}
        </div>
    </div>



@endsection