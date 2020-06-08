@extends('layouts.custom')


@section('title', 'Расчет столбчатого фундамента')
@section('description', 'Расчет столбчатого фундамента')
@section('keywords', 'контакты')
@section('canonical', 'https://beton70.com/calc/raschet-stolbchatogo-fundamenta')
@section('og:title', 'Расчет столбчатого фундамента')
@section('og:description', 'Расчет столбчатого фундамента')
@section('og:url', 'https://beton70.com/calc/raschet-stolbchatogo-fundamenta')
@section('twitter:description', 'Расчет столбчатого фундамента')
@section('twitter:title', 'Расчет столбчатого фундамента')

@section('content')
    <ul class="breadcrumb" itemscope="" itemtype="http://schema.org/BreadcrumbList">
        <li class="breadcrumb-item" itemprop="itemListElement" itemscope="" itemtype="http://schema.org/ListItem">
            <a href="{{ URL('/') }}" itemprop="item">
                <span itemprop="name">Главная</span>
            </a>
            <meta itemprop="position" content="1">
        </li>
        <li class="breadcrumb-item" itemprop="itemListElement" itemscope="" itemtype="http://schema.org/ListItem">
            <a href="{{ url('/calc') }}" itemprop="item">
                <span itemprop="name">Калькуляторы</span>
            </a>
            <meta itemprop="position" content="2">
        </li>
        <li class="breadcrumb-item active breadcrumb-item--active" itemprop="itemListElement" itemscope="" itemtype="http://schema.org/ListItem">
            <a itemprop="item">
                <span itemprop="name">Расчет столбчатого фундамента</span>
            </a>
            <meta itemprop="position" content="2">
        </li>


    </ul>



    <div class="lent">
        <div class="container">
            <div class="lent__inner">
                <h1 class="lent__title">Расчет столбчатого фундамента</h1>

                <div class="lent__calc">
                    <iframe id="iframe" name="iframe" src="https://stroy-calc.ru/widj?str=raschet-stolbchatogo-fundamenta&bgcol=fff&tcol=000&elcol=ff6801&dis=none" width="100%" height="2000px" marginwidth=0 marginheight=0 frameborder=0></iframe>
                </div>

            </div>
        </div>
    </div>



@endsection
