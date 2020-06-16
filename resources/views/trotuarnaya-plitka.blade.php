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

<script defer src="https://lk.easynetshop.ru/frontend/v5/ens-7809d6ce.js"></script>

<link href="https://lk.easynetshop.ru/frontend/v5/ens-7809d6ce.css" rel="stylesheet">

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
                <span itemprop="name">Тротуарная плитка</span>
            </a>
            <meta itemprop="position" content="2">
        </li>
    </ul>



    <section class="sale">
        <div class="container">
            <div class="sale__inner">
                <h2 class="sale__title">Распродажа тротуарной плитки и изделий для благоустройства!</h2>

                <div class="sale__row">


                    <div class="sale__item">

                        <i class="fas fa-percent sale__icon"></i>
                        <div class="sale__img-wrapper">
                            <img src="{{ URL::asset('images/plitka/1.webp') }}" alt="" class="sale__img">
                        </div>
                        <h3 class="sale__item-title">Тротуарная плитка "Калифорния"</h3>
                        <p class="sale__description">Распродажа тротуарной плитки "Калифорния". Плитка с небольшими дефектами по цвету.</p>

                        <p class="sale__price">250р</p>
                        <a class="btn-ens-action btn-ens-style" data-rel="7809d6ce185923">В корзину</a>
                    </div>
                    <div class="sale__item">

                        <i class="fas fa-percent sale__icon"></i>
                        <div class="sale__img-wrapper">
                            <img src="{{ URL::asset('images/plitka/2.webp') }}" alt="" class="sale__img">
                        </div>
                        <h3 class="sale__item-title">Тротуарная плитка "8 кирпичей"</h3>
                        <p class="sale__description">Без дефектов. Распродажа больших объемов со склада.</p>

                        <p class="sale__price">250р</p>
                        <a class="btn-ens-action btn-ens-style" data-rel="7809d6ce185924">В корзину</a>
                    </div>
                    <div class="sale__item">

                        <i class="fas fa-percent sale__icon"></i>
                        <div class="sale__img-wrapper">
                            <img src="{{ URL::asset('images/plitka/3.webp') }}" alt="" class="sale__img">
                        </div>
                        <h3 class="sale__item-title">Тучка красная</h3>
                        <p class="sale__description">Без дефектов. Распродажа больших объемов со склада.</p>

                        <p class="sale__price">250р</p>
                        <a class="btn-ens-action btn-ens-style" data-rel="7809d6ce185925">В корзину</a>
                    </div>
                    <div class="sale__item">

                        <i class="fas fa-percent sale__icon"></i>
                        <div class="sale__img-wrapper">
                            <img src="{{ URL::asset('images/plitka/4.webp') }}" alt="" class="sale__img">
                        </div>
                        <h3 class="sale__item-title">Тучка серая</h3>
                        <p class="sale__description">Без дефектов. Распродажа больших объемов со склада.</p>

                        <p class="sale__price">250р</p>
                        <a class="btn-ens-action btn-ens-style" data-rel="7809d6ce185926">В корзину</a>
                    </div>

                    <div class="sale__item">

                        <i class="fas fa-percent sale__icon"></i>
                        <div class="sale__img-wrapper">
                            <img src="{{ URL::asset('images/plitka/5.webp') }}" alt="" class="sale__img">
                        </div>
                        <h3 class="sale__item-title">Тучка желтая</h3>
                        <p class="sale__description">Без дефектов. Распродажа больших объемов со склада.</p>

                        <p class="sale__price">250р</p>
                        <a class="btn-ens-action btn-ens-style" data-rel="7809d6ce185927">В корзину</a>
                    </div>

                    <div class="sale__item">
                        <i class="fas fa-percent sale__icon"></i>
                        <div class="sale__img-wrapper">
                            <img src="{{ URL::asset('images/plitka/6.webp') }}" alt="" class="sale__img">
                        </div>
                        <h3 class="sale__item-title">Водосток красный</h3>
                        <p class="sale__description">Без дефектов. Распродажа больших объемов со склада.</p>

                        <p class="sale__price">250р</p>
                        <a class="btn-ens-action btn-ens-style" data-rel="7809d6ce185929">В корзину</a>
                    </div>


                    <div class="sale__item">

                        <i class="fas fa-percent sale__icon"></i>
                        <div class="sale__img-wrapper">
                            <img src="{{ URL::asset('images/plitka/7.webp') }}" alt="" class="sale__img">
                        </div>
                        <h3 class="sale__item-title">Водосток коричневый</h3>
                        <p class="sale__description">Без дефектов. Распродажа больших объемов со склада.</p>

                        <p class="sale__price">250р</p>
                        <a class="btn-ens-action btn-ens-style" data-rel="7809d6ce185930">В корзину</a>
                    </div>

                    <div class="sale__item">

                        <i class="fas fa-percent sale__icon"></i>
                        <div class="sale__img-wrapper">
                            <img src="{{ URL::asset('images/plitka/8.webp') }}" alt="" class="sale__img">
                        </div>
                        <h3 class="sale__item-title">Водосток серый</h3>
                        <p class="sale__description">Без дефектов. Распродажа больших объемов со склада.</p>

                        <p class="sale__price">250р</p>
                        <a class="btn-ens-action btn-ens-style" data-rel="7809d6ce185931">В корзину</a>
                    </div>

                    <div class="sale__item">

                        <i class="fas fa-percent sale__icon"></i>
                        <div class="sale__img-wrapper">
                            <img src="{{ URL::asset('images/plitka/9.webp') }}" alt="" class="sale__img">
                        </div>
                        <h3 class="sale__item-title">Калейдоскоп желтая</h3>
                        <p class="sale__description">Без дефектов. Распродажа больших объемов со склада.</p>

                        <p class="sale__price">250р</p>
                        <a class="btn-ens-action btn-ens-style" data-rel="7809d6ce185932">В корзину</a>
                    </div>

                <div class="sale__item">

                    <i class="fas fa-percent sale__icon"></i>
                    <div class="sale__img-wrapper">
                        <img src="{{ URL::asset('images/plitka/10.webp') }}" alt="" class="sale__img">
                    </div>
                    <h3 class="sale__item-title">Поребрик коричневый</h3>
                    <p class="sale__description">Без дефектов. Распродажа больших объемов со склада.</p>

                    <p class="sale__price">250р</p>
                    <a class="btn-ens-action btn-ens-style" data-rel="7809d6ce185934">В корзину</a>
                </div>

                </div>

            </div>
        </div>
    </section>









@endsection
