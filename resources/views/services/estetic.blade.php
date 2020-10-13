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
                        Эстетическая стоматология
                    </h1>
                </div>
            </div>


        </div>
    </div>
    <div class="container" style="transform: translateY(-100px);">
        <div class="mt-5">
            <p class="font-size-16" style="color: #8C8C8C;">
                Эстетические процедуры в стоматологии позволяют надолго сохранить красоту зубов, изменить форму лица, цвет зубов и многое другое.
            </p>
            <p class="font-size-16" style="color: #8C8C8C;">
                Красивая улыбка в современных условиях является не только показателем здоровья, но и залогом и показателем уверенности в себе, свободного общения и успешности. Значимое и достойное место в эстетической ортопедической стоматологии занимает художественная реставрация зубов, которая предполагает восстановление анатомической формы зуба, натурального цвета, а также восстановления зубной дуги и жевательной эффективности.
            </p>
        </div>
        <div class="mt-3">
            <p class="font-size-16" style="color: #8C8C8C">
                Улыбка зачастую является самым главным требованием, предъявляемым к врачам ортопедам, и как помочь в той или иной ситуации решает врач. Основные требования пациента - это цвет, форма, отношение зуба к десневому краю и гармонично воссоздаваемая нами в целом            </p>
        </div>

        <div>
            <p class="font-size-16" style="color: #8C8C8C;">
                Восстановление в полной мере внешнего вида лица, нарушенного из-за потери зубов, необходимо всем людям независимо от их общественного положения, профессии и возраста.
            </p>
            <p class="font-size-16" style="color: #8C8C8C;">
                Что такое коронки, многие уже знают, а что такое виниры - нет.
            </p>
        </div>
        <div class="mt-3">
            <p class="font-size-16" style="color: #8C8C8C">
                <span class="font-weight-bold" style="color: #30ACB0;">Виниры</span> — это фарфоровые или композитные пластинки, которые устанавливаются на фронтальную часть зуба. Виниры позволяют в кратчайшие сроки восстановить зубы, даже если некоторые из них разрушены до уровня десны.
            </p>
        </div>
        <div content="mt-3">
            <p class="font-size-16" style="color: #8C8C8C;">
                Виниры подбираются с учётом цвета зубов пациента, поэтому совершенно неотличимы от окружающей эмали. Такие отклонения от эстетической нормы, как тремы, диастемы, гипоплазия эмали, флюороз или несоответствие цвета фронтальных зубов требованиям пациента, - можно исключить протезированием с помощью виниров. Данная процедура малоинвазивна (снимается всего 0,9 мм тканей) и зуб остается живым, а для фиксации используется специальный цемент, который помогает сделать цвет реставрации более естественным и насыщенным.
            </p>
            <p class="font-size-16" style="color: #8C8C8C;">
                Из всего этого можно сделать единственно правильный вывод - врач-стоматолог-ортопед в своей работе должен руководствоваться основным принципом эстетики - законам гармонии.
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