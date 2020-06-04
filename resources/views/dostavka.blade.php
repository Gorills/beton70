@extends('layouts.custom')


@section('title', '')
@section('description', '')
@section('keywords', '')
@section('canonical', '')
@section('og:title', '')
@section('og:description', '')
@section('og:url', '')
@section('twitter:description', '')
@section('twitter:title', '')

@section('content')
    <div class="container">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ url('/') }}">Главная</a></li>

                <li class="breadcrumb-item active" aria-current="page">Доставка</li>
            </ol>
        </nav>
    </div>


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
