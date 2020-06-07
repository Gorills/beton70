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

                <li class="breadcrumb-item active" aria-current="page">404 ошибка</li>
            </ol>
        </nav>
    </div>


    <div class="error">
        <div class="container">
            <div class="error__inner">
                <h1 class="error__title">Такая страница не найдена! Ошибка 404!</h1>


            </div>
        </div>
    </div>





@endsection
