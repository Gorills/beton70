@extends('layouts.custom')


@section('title', 'Информация о доставке | Руд Медиум')
@section('description', 'Доставка строительных смесей по Томску и области от компании Руд Медиум')
@section('keywords', '')
@section('canonical', 'https://beton70.com/dostavka')
@section('og:title', 'Информация о доставке | Руд Медиум')
@section('og:description', 'Доставка строительных смесей по Томску и области от компании Руд Медиум')
@section('og:url', '')
@section('twitter:description', 'Доставка строительных смесей по Томску и области от компании Руд Медиум')
@section('twitter:title', 'Информация о доставке | Руд Медиум')

@section('content')
    <ul class="breadcrumb" itemscope="" itemtype="http://schema.org/BreadcrumbList">
        <li class="breadcrumb-item" itemprop="itemListElement" itemscope="" itemtype="http://schema.org/ListItem">
            <a href="{{ URL('/') }}" itemprop="item">
                <span itemprop="name">Главная</span>
            </a>
            <meta itemprop="position" content="1">
        </li>
        <li class="breadcrumb-item active breadcrumb-item--active" itemprop="itemListElement" itemscope="" itemtype="http://schema.org/ListItem">
            <a itemprop="item">
                <span itemprop="name">Доставка</span>
            </a>
            <meta itemprop="position" content="2">
        </li>
    </ul>


    <div class="dostavka">
        <div class="container">
            <div class="dostavka__inner">
                <h1 class="dostavka__title">Доставка <a class="dostavka__link" href="{{ url('/beton') }}">бетона</a> и <a class="dostavka__link" href="{{ url('/rastvor') }}">раствора</a></h1>
                <p class="dostavka__text">Стоимость доставки рассчитывается исходя из необходимого количества бетоносмесителей. Доставка по городу осуществляется автобетоносмесителями по 3 и 5 куб.м.</p>
                <p class="dostavka__text"><b>Стоимость миксера 3 куб.м. - 1500 руб.</b></p>
                <p class="dostavka__text"><b>Стоимость миксера 5 куб.м. - 2000 руб.</b></p>
                <h2 class="dostavka__title">Условия доставки</h2>
                <p class="dostavka__text">- Для того, чтобы бетон или раствор был доставлен и разгружен вовремя, необходимо обеспечить свободный доступ к месту выгрузки. В случае, если имеются какие либо особенности местности, ограничивающие подъездные пути, о них необходимо сообщить заранее.</p>
                <p class="dostavka__text">- Среднее нормативное время разгрузки одного бетоносмесителя - 20 мин. В случае, если время разгрузки увеличивается по независящим от техники обстоятельствам, время простоя оплачивается дополнительно 500р. за каждые 30 минут.</p>

            </div>
        </div>
    </div>


@endsection
