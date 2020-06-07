@extends('layouts.custom')


@section('title', 'Контакты компании "руд Медиум" | Как с нами связаться')
@section('description', 'Как позвонить или адрес компании ООО "Руд Медиум" в Томске')
@section('keywords', 'контакты')
@section('canonical', 'https://beton70.com/contacts')
@section('og:title', 'Контакты компании "руд Медиум" | Как с нами связаться')
@section('og:description', 'Как позвонить или адрес компании ООО "Руд Медиум" в Томске')
@section('og:url', 'https://beton70.com/contacts')
@section('twitter:description', 'Как позвонить или адрес компании ООО "Руд Медиум" в Томске')
@section('twitter:title', 'Контакты компании "руд Медиум" | Как с нами связаться')

@section('content')
    <div class="container">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ url('/') }}">Главная</a></li>

                <li class="breadcrumb-item active" aria-current="page">Контакты</li>
            </ol>
        </nav>
    </div>


    <div class="contacts">
        <div class="container">
            <div class="contacts__inner">
                <h1 class="contacts__title">Наши контакты</h1>

                <div class="contacts__row-one">
                    <div class="contacts__column">
                        <p class="contacts__text">Производство бетона и раствора:</p>
                        <p class="contacts__text">г. Томск, ул. Шевченко 49б, ст6</p>
                        <div>
                            <a href="tel:83822500200" class="contacts__link">8 (3822) 500 - 200</a>
                        </div>
                    </div>

                    <div class="contacts__column">
                        <p class="contacts__text">Производство тротуарной плитки:</p>
                        <p class="contacts__text">г. Томск, ул. Энергетическая 3а</p>
                        <div>
                            <a href="tel:83822500200" class="contacts__link">8 (3822) 340 - 240</a>
                        </div>
                    </div>
                </div>


                <div class="contacts__social">


                    <div class="contacts__wrap">
                        <a class="contacts__icon" href="#"><i class="fab fa-vk"></i></a>
                        <a class="contacts__icon" href="#"><i class="fab fa-facebook-f"></i></a>
                        <a class="contacts__icon" href="#"><i class="fab fa-instagram"></i></a>

                    </div>


                </div>

                <div class="contacts__row-two">
                    <div class="contacts__map">
                        <a class="dg-widget-link" href="http://2gis.ru/tomsk/firm/70000001037669464/center/84.992477,56.468133/zoom/16?utm_medium=widget-source&utm_campaign=firmsonmap&utm_source=bigMap">Посмотреть на карте Томска</a><div class="dg-widget-link"><a href="http://2gis.ru/tomsk/center/84.992477,56.468133/zoom/16/routeTab/rsType/bus/to/84.992477,56.468133╎Руд Медиум, производственный комплекс?utm_medium=widget-source&utm_campaign=firmsonmap&utm_source=route">Найти проезд до Руд Медиум, производственный комплекс</a></div><script charset="utf-8" src="https://widgets.2gis.com/js/DGWidgetLoader.js"></script><script charset="utf-8">new DGWidgetLoader({"width":400,"height":400,"borderColor":"#a3a3a3","pos":{"lat":56.468133,"lon":84.992477,"zoom":16},"opt":{"city":"tomsk"},"org":[{"id":"70000001037669464"}]});</script><noscript style="color:#c00;font-size:16px;font-weight:bold;">Виджет карты использует JavaScript. Включите его в настройках вашего браузера.</noscript>
                    </div>
                    <div class="contacts__map">
                        <a class="dg-widget-link" href="http://2gis.ru/tomsk/firm/70000001037675845/center/85.01879453659058,56.51988450930176/zoom/16?utm_medium=widget-source&utm_campaign=firmsonmap&utm_source=bigMap">Посмотреть на карте Томска</a><div class="dg-widget-link"><a href="http://2gis.ru/tomsk/center/85.018629,56.51846/zoom/16/routeTab/rsType/bus/to/85.018629,56.51846╎Руд Медиум, производственный комплекс?utm_medium=widget-source&utm_campaign=firmsonmap&utm_source=route">Найти проезд до Руд Медиум, производственный комплекс</a></div><script charset="utf-8" src="https://widgets.2gis.com/js/DGWidgetLoader.js"></script><script charset="utf-8">new DGWidgetLoader({"width":400,"height":400,"borderColor":"#a3a3a3","pos":{"lat":56.51988450930176,"lon":85.01879453659058,"zoom":16},"opt":{"city":"tomsk"},"org":[{"id":"70000001037675845"}]});</script><noscript style="color:#c00;font-size:16px;font-weight:bold;">Виджет карты использует JavaScript. Включите его в настройках вашего браузера.</noscript>
                    </div>
                </div>




            </div>
        </div>
    </div>



@endsection
