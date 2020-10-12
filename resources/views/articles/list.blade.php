@extends('layouts.app')
@section('content')
    <?php
    use Jenssegers\Agent\Agent;

    $agent = new Agent();
    ?>
    <div class="container-fluid" style="background-image: url({{ asset('images/articlesbg.jpg') }}); background-size: cover; background-position: center;">
        <h1 class="text-center roboto pb-4" style="font-size: 37px; padding-top: 200px;">Важная информация для пациентов</h1>
    </div>
    <div class="container py-5">
        <div class="row">
        @foreach($articles as $article)
            <div class="col-lg-3 col-6">
                <a href="{{ route('article', $article->id) }}" style="text-decoration: none;">
                <div class="" style="{{ $agent->isMobile() ? "height: 100px;" : "height: 150px;" }} background-image: url({{ asset('storage/'.str_replace('\\', '/', $article->image)) }}); background-size: cover; background-position: center;"></div>
                <p class="{{ $agent->isMobile() ? "font-size-12" : "font-size-16" }} text-dark font-weight-bold line-height-120 mt-2">
                    {{$article->title}}
                </p>
                    <p class="font-size-12" style="color: #C4C4C4;">Читать далее>></p>
                </a>
            </div>
        @endforeach
        </div>
    </div>
@endsection