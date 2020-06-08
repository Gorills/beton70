@extends('layouts.custom')


@section('title', 'Строительные калькуляторы онлайн')
@section('description', 'Рассчитать количество бетона, раствора онлайн')
@section('keywords', '')
@section('canonical', 'https://beton70.com/calc')
@section('og:title', 'Строительные калькуляторы онлайн')
@section('og:description', 'Рассчитать количество бетона, раствора онлайн')
@section('og:url', '')
@section('twitter:description', 'Рассчитать количество бетона, раствора онлайн')
@section('twitter:title', 'Строительные калькуляторы онлайн')

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
                <span itemprop="name">Калкуляторы</span>
            </a>
            <meta itemprop="position" content="2">
        </li>
    </ul>

    <div class="calc">
        <div class="container">
            <div class="calc__inner">
                <h1 class="calc__title">Строительные онлайн-калькуляторы</h1>


                <div class="calc__wrap">

                    <a href="{{ url('/calc/rastchet-lentochnogo-fundamenta') }}" class="calc__item">
                        <img src="{{ asset('/images/calc/1.jpg') }}" alt="" class="calc__img">

                        <h3 class="calc__item-title">Растчет ленточного фундамента</h3>

                    </a>

                    <a href="{{ url('/calc/raschet-fundamenta-plity') }}" class="calc__item">
                        <img src="{{ asset('/images/calc/2.jpg') }}" alt="" class="calc__img">

                        <h3 class="calc__item-title">Расчет фундамента плиты</h3>

                    </a>

                    <a href="{{ url('/calc/raschet-stolbchatogo-fundamenta') }}" class="calc__item">
                        <img src="{{ asset('/images/calc/3.jpg') }}" alt="" class="calc__img">

                        <h3 class="calc__item-title">Расчет столбчатого фундамента</h3>

                    </a>

                    <a href="{{ url('/calc/glubina-promerzaniya-grunta') }}" class="calc__item">
                        <img src="{{ asset('/images/calc/4.jpg') }}" alt="" class="calc__img">

                        <h3 class="calc__item-title">Глубина промерзания грунта</h3>

                    </a>


                </div>

            </div>
        </div>
    </div>

@endsection
