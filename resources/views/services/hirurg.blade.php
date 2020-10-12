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
                        Хирургическая стоматология
                    </h1>
                </div>
            </div>


        </div>
    </div>
    <div class="container" style="transform: translateY(-100px);">
        <div class="mt-5">
            <p class="font-size-16" style="color: #8C8C8C;">
                Благодаря высочайшей степени развития, современная стоматология применяет методы сохранения зубов, которые раньше признавались безнадежными. Но только в случае неизбежного удаления зуба стоматологи прибегают к хирургическому методу решения проблемы. Чаще всего он является единственным решением в лечении таких челюстно-лицевых дефектов, как прогрессирующие воспаления, врожденные и приобретенные дефекты, различные новообразования и опухоли, осложнения после перенесенного кариеса.
            </p>
            <p class="font-size-16" style="color: #8C8C8C;">
                В стоматологической клинике «Dr.Bond» профессиональные стоматологи выполняют все виды операций хирургической стоматологии: от полного удаления зубов до пластических операций
            </p>
        </div>
        <p class="font-size-16" style="color: #8C8C8C">
            Кроме того для профилактики появления и развития серьезных заболеваний зубо-челюстной области в нашей клинике проводятся еще и такие зубосохраняющие операции как:
        </p>
        <div>
            <ul class="font-size-16" style="color: #8C8C8C;">
                <li class="mb-3">
                    гемисекция – полное и частичное удаление зуба с корнем;
                </li>
                <li class="mb-3">
                    цистотомия или цистэктомия – удаление кисты.
                </li>
                <li class="mb-3">
                    резекция верхушки корня – частичное удаление зубного корня, который поражен инфекцией.
                </li>
            </ul>
        </div>
        <div>
            <p class="font-size-16" style="color: #8C8C8C;">
                Каждое хирургическое вмешательство в нашей клинике происходит с применением современной анестезии.
            </p>

            <p class="font-size-16" style="color: #8C8C8C;">
                Наша стоматологическая клиника оснащена самым современным оборудованием, обеспечивающим максимально быстрое и абсолютно безболезненное выполнение всех видов операций хирургической стоматологии. Кроме того мы удаляем зубы мудрости, выросшие неправильно и из-за этого доставляющими неприятные ощущения. А перед полным удалением зуба, наши специалисты информируют пациента о возможности протезировать или имплантировать зуб в том месте, где он будет удален.
            </p>
        </div>

    </div>
    <div class="container mb-5">
        <div class="row justify-content-center">
            <div class="col-lg-9 col-12">
                <p class="font-size-12 mb-0" style="color: #30ACB0;">
                    О нас говорят
                </p>
                <p class="text-dark roboto font-weight-bold" style="{{ $agent->isMobile() ? "font-size: 20px;" : "font-size: 35px;" }}">Отзывы клиентов</p>

                <div class="owl-one owl-carousel text-center">
                    <div class="item d-flex">
                        <div class="mr-3 mt-2" style="width:25%; height:1px; background-color: #969696;"></div>
                        <div>
                            <p class="font-size-16 roboto mt-0 text-left" style="color: #969696;">
                                Сайт рыбатекст поможет дизайнеру, верстальщику, вебмастеру сгенерировать несколько абзацев более менее осмысленного текста рыбы на русском языке, а начинающему оратору отточить навык публичных выступлений в домашних условиях. При создании генератора мы использовали небезизвестный универсальный код речей.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection