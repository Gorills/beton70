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

    <div class="razrab">
        <div class="container">
            <div class="razrab__inner">
                <h1 class="razrab__title">Данная страница находится в разработке. Зайдите позже!</h1>
            </div>
        </div>
    </div>

@endsection
