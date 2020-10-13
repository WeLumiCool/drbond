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
                        Лечение
                    </h1>
                </div>
            </div>


        </div>
    </div>
    <div class="container" style="transform: translateY(-100px);">
        <div class="mt-5">
            <p class="font-size-16" style="color: #8C8C8C;">
                Широкий комплекс  диагностических и лечебных процедур, которые позволяют сохранить зубы
            </p>
            <p class="font-size-16" style="color: #8C8C8C;">
                Задача терапевтической стоматологии заключается в диагностике и лечении заболеваний зубов и некоторых прилегающих областей. В обсуждаемой сфере знаний заключены разработки диагностических и лечебно-профилактических инструментов. Также специалисты данной области выявляют, связаны ли заболевания зубов с расстройством состояния различных внутренних органов.
            </p>
        </div>
        <div class="mt-3">
            <h4 class="font-size-20 font-weight-bold mb-3 mt-5" style="color: #30ACB0;">
                Процедуры диагностики и лечения в стоматологии решают ряд основных задач:
            </h4>
        </div>
        <div>
            <ul class="font-size-16" style="color: #8C8C8C;">
                <li class="mb-3">
                    Работа над кариесом.
                </li>
                <li class="mb-3">
                    Восстановление разрушенных зубов на основе пломбировочных материалов.
                </li>
                <li class="mb-3">
                    Лечение эндодонтического характера по отношению к тканям, расположенным в полости зуба и в областях корневых         каналов.
                </li>
                <li class="mb-3">
                    Работа над некариозными заболеваниями зубов.
                </li>
                <li class="mb-3">
                    Восстановление здоровья слизистой оболочки ротовой полости.
                </li>
                <li class="mb-3">
                    Отслеживание и корректировка состояния околозубных тканей (пародонта).
                </li>
            </ul>
        </div>
        <p class="font-size-16" style="color: #8C8C8C">
            Для выявления всевозможных заболеваний в стоматологической терапии используются определенные методы исследования. Популярна методика выявления реакции на холод и тепло. Иногда эта методика необходима, чтобы выявить, с чем столкнулся специалист – с кариесом, пульпитом или периодонтитом.
        </p>
        <div>
            <p class="font-size-16" style="color: #8C8C8C;">
                Существует особый метод для определения чувствительности зубов пациента. Он называется электроодонтодиагностика (ЭОД). Это – лучший способ получения данных о заболевании этих тканей.
            </p>
            <p class="font-size-16" style="color: #8C8C8C;">
                Если этого требует ситуация – проводится микробиологическое исследование. Возбудитель выявляется посредством пробуждения его активности искусственным путем
            </p>
            <p class="font-size-16" style="color: #8C8C8C;">
                Порой требуется рентгенологическое исследование. Оно может заключаться в получении внутриротовых, прицельных и обзорных снимков, наружных снимков. Применяется контрастное вещество, и проводится анализ «сиалография».
            </p>
        </div>
        <h4 class="font-size-20 font-weight-bold mb-3 mt-5" style="color: #30ACB0;">
            Терапевтические методы лечения в стоматологии
        </h4>
        <div>
            <p class="font-size-16" style="color: #8C8C8C;">
                Специалист в области стоматологической терапии обладает множеством инструментов и методик излечения болезни. Очень популярно восстановление эмали – это позволяет лечить большинство видов кариеса.
            </p>
        </div>
        <p class="font-size-16" style="color: #8C8C8C">
            Способы лечения пульпитов и корневых каналов хорошо описаны в эндодонтии. Чтобы вылечить воспаление пульпы – накладывают повязки, а затем лечение протекает по вариативной методике.
        </p>
        <p class="font-size-16" style="color: #8C8C8C">
            Хорошо проработана сфера знаний о лечении околозубных тканей. Но обычно это требует времени.
        </p>

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