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
