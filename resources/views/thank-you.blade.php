@extends('layouts.custom')


@section('title', 'Спасибо за заявку | Руд Медиум')
@section('description', 'Заявка принята и находится в обработке')
@section('keywords', '')
@section('canonical', 'https://beton70.com/thank-you')
@section('og:title', 'Спасибо за заявку | Руд Медиум')
@section('og:description', 'Заявка принята и находится в обработке')
@section('og:url', '')
@section('twitter:description', 'Заявка принята и находится в обработке')
@section('twitter:title', 'Спасибо за заявку | Руд Медиум')

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
                <span itemprop="name">Спасибо за заявку!</span>
            </a>
            <meta itemprop="position" content="2">
        </li>
    </ul>


    <div class="razrab">
        <div class="container">
            <div class="razrab__inner">
                <h1 class="razrab__title">Ваша заявка принята! Мы свяжемся с вами в ближайшее время!</h1>
            </div>
        </div>
    </div>


@endsection
