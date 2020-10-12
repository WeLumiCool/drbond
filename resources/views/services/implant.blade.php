@extends('layouts.app')
@section('content')
    <?php
    use Jenssegers\Agent\Agent;

    $agent = new Agent();
    ?>
    <div class="container-fluid py-5" style="background-image: url({{ asset('images/servicebg.jpg') }}); background-size: cover; {{ $agent->isMobile() ? "background-position: right;" : "background-position: center;" }} ">
        <div class="container" style="{{ !$agent->isMobile() ? "padding-top: 260px; padding-bottom: 190px;" : "padding-top: 130px; padding-bottom: 85px;"}} ">
            <div class="row">
                <div class="col-lg-5 col-12">
                    <h1 class="font-weight-bold" style="font-size: 37px; ">
                        Зубные импланты последнего поколения: что это означает для пациента?
                    </h1>
                </div>
            </div>


        </div>
    </div>
    <div class="container" style="transform: translateY(-100px);">
        <div class="mt-5">
            <p class="font-size-16" style="color: #8C8C8C;">
                Услуга зубного протезирования постепенно уступает место более эффективному и технологичному методу – имплантации. Установка титанового имплантанта – это огромное достижение современной стоматологии, которое позволяет обладателю проблемных зубов вернуть себе красивую, здоровую улыбку. Использование имплантологами DrBond винтовых, пластинчатых, субпериостальных имплантов дает возможность индивидуально подобрать подходящий экземпляр для любого пациента, в зависимости от сложности, объема работ и финансовых возможностей пациента.
            </p>
            <p class="font-size-16" style="color: #8C8C8C;">
                Имплантологи DrBond применяют зубные импланты последнего поколения, которые имеют следующие достоинства:
            </p>
        </div>
        <div class="mt-3">
            <ul class="font-size-16" style="color: #8C8C8C;">
                <li class="mb-3">
                    Возможность восстановить зуб, сохранив его естественный вид — отличия протеза на импланте от живого зуба невозможно разглядеть невооруженным взглядом;
                </li>
                <li class="mb-3">
                    Высокий процент приживления (более 98%);
                </li>
                <li class="mb-3">
                    Импланты не деформируют соседние зубы;
                </li>
                <li class="mb-3">
                    Сохраняется жевательная нагрузка на челюстную кость, которая не атрофируется со временем;
                </li>
                <li class="mb-3">
                    Десна сохраняет эстетичный внешний вид (при ношении съемных протезов – болит и воспаляется);
                </li>
                <li class="mb-3">
                    Отсутствие ограничений в приеме пищи (высокая прочность имплантов позволяет пережевывать жесткие продукты питания);
                </li>
                <li class="mb-3">
                    Срок эксплуатации имплантов превышает 15-20 лет;
                </li>
                <li class="mb-3">
                    Дополнительного ухода за имплантами не требуется, достаточно проводить стандартные ежедневные гигиенические процедуры полости рта.
                </li>
            </ul>
        </div>
        <p class="font-size-16" style="color: #8C8C8C">
            Рассмотрим наиболее популярные среди пациентов DrBond  разновидности имплантов.
        </p>

        <h4 class="font-size-20 font-weight-bold mb-3 mt-5" style="color: #30ACB0;">
            Винтовые импланты
        </h4>

        <div>
            <p class="font-size-16" style="color: #8C8C8C;">
                Процедура вкручивания винтового импланта в костную ткань состоит из нескольких стадий:
            </p>
            <ul class="font-size-16" style="color: #8C8C8C;">
                <li class="mb-3">
                    Предварительно высверливается углубление в костной ткани;
                </li>
                <li class="mb-3">
                    После расширения отверстия происходит окончательно формирование имплантационного ложа;
                </li>
                <li class="mb-3">
                    На внутренней поверхности с помощью специальных метчиков нарезается резьба, которая соответствует резьбе на импланте;

                </li>
                <li class="mb-3">
                    Имплантолог вворачивает резьбовую конструкцию, которая прочно фиксируется в ложе и начинается процесс приживления.
                </li>

            </ul>
        </div>
        <h4 class="font-size-20 font-weight-bold mb-3 mt-5" style="color: #30ACB0;">
            Пластинчатые импланты
        </h4>
        <div>
            <p class="font-size-16" style="color: #8C8C8C;">
                К главным показаниям к будущей установке пластинчатых имплантов можно отнести наличие:
            </p>
            <ul class="font-size-16" style="color: #8C8C8C;">
                <li class="mb-3">
                    концевых дефектов зубного ряда (когда нет крайних зубов);
                </li>
                <li class="mb-3">
                    непереносимости определенных разновидностей зубных протезов съемного типа;
                </li>
                <li class="mb-3">
                    включенных дефектов значительной протяженности (когда нет передних зубов).
                </li>
            </ul>
            <p class="font-size-16" style="color: #8C8C8C;">
                Чтобы улучшить остеоинтеграцию, структура пластинки обрела следующий вид:
            </p>
            <ul class="font-size-16" style="color: #8C8C8C;">
                <li class="mb-3">
                    текстурированная поверхность и змеевидный рельеф для предотвращения смещений;
                </li>
                <li class="mb-3">
                    наличие пористой структуры и отверстий для проникновения костной ткани.
                </li>
            </ul>
        </div>
        <h4 class="font-size-20 font-weight-bold mb-3 mt-5" style="color: #30ACB0;">
            Пластинчатые импланты
        </h4>
        <p class="font-size-16" style="color: #8C8C8C">
            В самих сложных случаях применяют субпериостальную имплантацию, к примеру, когда диагностируется сильное истончение костной ткани или при маленьком размере альвеолярного отростка. Такие дефекты часто встречаются у пожилых людей. Чтобы обойтись без дополнительной хирургической операции, пытаясь восстановить структуру костной ткани, можно смело использовать субпериостальный имплант. Он имеет тонкую и ажурную конструкцию, но прочно фиксируется в посадочном месте и эффективно выполняет свои функции.
        </p>
        <p class="font-size-16" style="color: #8C8C8C">
            Применение современных медицинских технологий имплантации экспертами DrBond в Алматы способствует ускорению  процесса лечения и снижению его травматичности. Записывайтесь на консультацию, чтобы составить индивидуальный курс лечения и профессионально провести имплантацию.
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