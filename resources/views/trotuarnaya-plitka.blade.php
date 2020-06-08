@extends('layouts.custom')


@section('title', 'Тротуарная плитка в Томске с доставкой | Купить тротуарную плитку')
@section('description', 'Магазин тротуарной плитки в Томске, изготовление тротуарной плитки под заказ')
@section('keywords', 'тротуарная плитка Томск, заказать тротуарную плитку')
@section('canonical', 'https://beton70.com/trotuarnaya-plitka')
@section('og:title', 'Тротуарная плитка в Томске с доставкой | Купить тротуарную плитку')
@section('og:description', 'Магазин тротуарной плитки в Томске, изготовление тротуарной плитки под заказ')
@section('og:url', '')
@section('twitter:description', 'Магазин тротуарной плитки в Томске, изготовление тротуарной плитки под заказ')
@section('twitter:title', 'Тротуарная плитка в Томске с доставкой | Купить тротуарную плитку')

@section('content')
    <<ul class="breadcrumb" itemscope="" itemtype="http://schema.org/BreadcrumbList">
        <li class="breadcrumb-item" itemprop="itemListElement" itemscope="" itemtype="http://schema.org/ListItem">
            <a href="{{ URL('/') }}" itemprop="item">
                <span itemprop="name">Главная</span>
            </a>
            <meta itemprop="position" content="1">
        </li>
        <li class="breadcrumb-item active breadcrumb-item--active" itemprop="itemListElement" itemscope="" itemtype="http://schema.org/ListItem">
            <a itemprop="item">
                <span itemprop="name">Тротуарная плитка</span>
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
