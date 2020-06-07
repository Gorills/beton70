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

    <div class="container">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ url('/') }}">Главная</a></li>

                <li class="breadcrumb-item active" aria-current="page">Калькуляторы</li>
            </ol>
        </nav>
    </div>

    <div class="razrab">
        <div class="container">
            <div class="razrab__inner">
                <h1 class="razrab__title">Данная страница находится в разработке. Зайдите позже!</h1>
            </div>
        </div>
    </div>

@endsection
