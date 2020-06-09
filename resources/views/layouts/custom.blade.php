<!doctype html>
<html lang="ru">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <link rel="stylesheet" href="{{URL::asset('css/site.css')}}">
    <script src="https://kit.fontawesome.com/0af96d350a.js" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet">
    <title>@yield('title')</title>
    <meta name="description" content="@yield('description')"/>
    <meta name="keywords" content="@yield('keywords')" />
    <link rel="canonical" href="@yield('canonical')"/>
    <meta property="og:locale" content="ru_RU" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="@yield('og:title')" />
    <meta property="og:description" content="@yield('og:description')" />
    <meta property="og:url" content="@yield('og:url')" />

    <meta name="theme-color" content="#ff6801">
    <meta property="og:site_name" content="beton70.com" />
    <meta property="og:image" content="" />

    <meta name="twitter:card" content="summary" />
    <meta name="twitter:description" content="@yield('twitter:description')" />
    <meta name="twitter:title" content="@yield('twitter:title')" />

    <!-- Yandex.Metrika counter -->
    <script type="text/javascript" >
        (function(m,e,t,r,i,k,a){m[i]=m[i]||function(){(m[i].a=m[i].a||[]).push(arguments)};
            m[i].l=1*new Date();k=e.createElement(t),a=e.getElementsByTagName(t)[0],k.async=1,k.src=r,a.parentNode.insertBefore(k,a)})
        (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");

        ym(54116212, "init", {
            clickmap:true,
            trackLinks:true,
            accurateTrackBounce:true
        });
    </script>
    <noscript><div><img src="https://mc.yandex.ru/watch/54116212" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
    <!-- /Yandex.Metrika counter -->


    <meta name="yandex-verification" content="89746e1ff306cfca" />

</head>
<body>

<?php $home = '/' ?>
<?php $trot = '/trotuarnaya-plitka' ?>
<?php $bet = '/beton' ?>
<?php $rast = '/rastvor' ?>

<header class="header">
    <div class="container">
        <div class="header__inner">


            <div class="header__top">

                <div class="header__adress">
                    <p class="header__text">Наши адреса</p>
                    <p class="header__text">Бетон: г.Томск, ул. Шевченко 49 Б ст6</p>
                    <p class="header__text">Плитка: г.Томск, ул. Энергетическая 3а</p>
                </div>



                @if($home == $_SERVER['REQUEST_URI'])

                    <img src="{{ asset('images/logo.png') }}" alt="logo" class="header__logo">
{{--                    <img src="{{ asset('images/logo2.jpg') }}" alt="logo" class="header__logo-min">--}}


                @else
                    <a href="{{ URL('/') }}">
                        <img src="{{ asset('images/logo.png') }}" alt="" class="header__logo">
{{--                        <img src="{{ asset('images/logo2.jpg') }}" alt="logo" class="header__logo-min">--}}
                    </a>
                @endif



                @if($trot == $_SERVER['REQUEST_URI'])

                <div class="header__phone">
                    <i class="fas fa-phone-alt"></i>
                    <a href="tel:83822340240" class="header__phone-link">8 (3822) <b>340-240</b></a>
                </div>

                @else
                    <div class="header__phone">
                        <i class="fas fa-phone-alt"></i>

                        <a href="tel:83822500200" class="header__phone-link">8 (3822) <b>500-200</b></a>
                    </div>

                @endif

            </div>



            <nav class="header__nav" itemscope="" itemtype="http://schema.org/SiteNavigationElement">
                <ul class="header__list" itemprop="about" itemscope="" itemtype="http://schema.org/ItemList">

                    <li itemprop="itemListElement" itemscope="" itemtype="http://schema.org/ItemList">
                        <a class="header__link" href="{{ url('/beton') }}" itemprop="url">Бетон</a>
                        <meta itemprop="name" content="Бетон" />
                    </li>

                    <li itemprop="itemListElement" itemscope="" itemtype="http://schema.org/ItemList">
                        <a class="header__link" href="{{ url('/rastvor') }}" itemprop="url">Раствор</a>
                        <meta itemprop="name" content="Раствор" />
                    </li>

                    <li itemprop="itemListElement" itemscope="" itemtype="http://schema.org/ItemList">
                        <a class="header__link" href="{{ url('/trotuarnaya-plitka') }}" itemprop="url">Тротуарная плитка</a>
                        <meta itemprop="name" content="Тротуарная плитка" />
                    </li>

                    <li itemprop="itemListElement" itemscope="" itemtype="http://schema.org/ItemList">
                        <a class="header__link" href="{{ url('/calc') }}" itemprop="url">Калькуляторы</a>
                        <meta itemprop="name" content="Калькуляторы" />
                    </li>

                    <li itemprop="itemListElement" itemscope="" itemtype="http://schema.org/ItemList">
                        <a class="header__link" href="{{ url('/dostavka') }}" itemprop="url">Доставка</a>
                        <meta itemprop="name" content="Доставка" />
                    </li>
                    <li itemprop="itemListElement" itemscope="" itemtype="http://schema.org/ItemList">
                        <a class="header__link" href="{{ url('/contacts') }}" itemprop="url">Контакты</a>
                        <meta itemprop="name" content="Контакты" />
                    </li>
                </ul>
            </nav>


{{--            <nav class="header__nav">--}}
{{--                <a href="{{ url('/beton') }}" class="header__link">Бетон</a>--}}
{{--                <a href="{{ url('/rastvor') }}" class="header__link">Раствор</a>--}}
{{--                <a href="{{ url('/trotuarnaya-plitka') }}" class="header__link">Тротуарная плитка</a>--}}
{{--                <a href="{{ url('/calc') }}" class="header__link">Калькуляторы</a>--}}
{{--                <a href="{{ url('/dostavka') }}" class="header__link">Доставка</a>--}}
{{--                <a href="{{ url('/contacts') }}" class="header__link">Конткаты</a>--}}
{{--            </nav>--}}


        </div>
    </div>
</header>

<div class="toggle-menu">
    <div class="toggle-section">
        <a href="#" class="menu-btn">
            <span></span>
        </a>
    </div>
</div>
<div class="header__closer"></div>





@yield('content')


<div class="phone-btn">


    @if($trot == $_SERVER['REQUEST_URI'])

            <a href="tel:83822340240" class="phone-btn__link">
                <i class="phone-btn__icon fas fa-phone"></i>
            </a>

    @else
            <a href="tel:83822500200" class="phone-btn__link">
                <i class="phone-btn__icon fas fa-phone"></i>
            </a>

    @endif

</div>

<div class="whatsapp-btn">


    @if($trot == $_SERVER['REQUEST_URI'])

        <a href="tel:83822340240" class="whatsapp-btn__link">
            <i class="whatsapp-btn__icon fab fa-whatsapp"></i>
        </a>

    @else
        <a href="tel:83822500200" class="whatsapp-btn__link">
            <i class="whatsapp-btn__icon fab fa-whatsapp"></i>
        </a>

    @endif

</div>


<div class="overlay_popup"></div>

<div class="popup">
    <div class="container">
        <p class="popup__title">Оставить заявку</p>



        <form class="popup__form" action= "{{ url('sendemail/send') }}" method= "post">
            {{ csrf_field() }}

            <input class="popup__input" type= "text" name= "name" placeholder="Имя" required>
            <input class="popup__input" type= "tel" name= "tel" placeholder="Телефон" required>
            @if($_SERVER['REQUEST_URI'] == $bet)
            <select name="mark" id="" class="popup__input">
                <option value="-">Выбрать марку бетона</option>
                <option value="бетон M100">M100</option>
                <option value="бетон М150">М150</option>
                <option value="бетон М200">М200</option>
                <option value="бетон M250">M250</option>
                <option value="бетон M300">M300</option>
                <option value="бетон M350">M350</option>
                <option value="бетон M400">M400</option>
            </select>
            @elseif($_SERVER['REQUEST_URI'] == $rast)
                <select name="mark" id="" class="popup__input">
                <option value="-">Выбрать марку раствора</option>
                <option value="раствор M25">M25</option>
                <option value="раствор M50">M50</option>
                <option value="раствор М75">М75</option>
                <option value="раствор M100">M100</option>
                <option value="раствор M125">M125</option>
                <option value="раствор M150">M150</option>
                <option value="раствор M200">M200</option>
                </select>
            @else



            @endif
            <textarea class="popup__input" rows= "10" cols= "45" name= "message" placeholder="Сообщение"></textarea>

            <button class="popup__btn btn btn__accent" type= "submit">Отправить</button>

        </form>
    </div>

</div>




<footer class="footer">
    <div class="container">
        <div class="footer__inner">
            <div class="footer__column">
                <a href="tel:83822500200" class="footer__phone">8 (3822) 500-200</a>
                <a href="mailto:beton70com@yandex.ru" class="footer__mail">beton70com@yandex.ru</a>
                <div class="footer__social">
                    <a href="#"><i class="footer__icon fab fa-vk"></i></a>

                    <a href="#"><i class="footer__icon fab fa-instagram"></i></a>

                </div>
                <p class="footer__text">ООО «РудМедиум»,
                    <?php echo date('Y'); ?></p>
                <p class="footer__text">Все права защищены</p>


            </div>
            <div class="footer__column">
                <p class="footer__title">Услуги</p>
                <div class="footer__item">
                    <a href="{{ URL('/beton') }}" class="footer__link">Заказать бетон</a>
                </div>
                <div class="footer__item">
                    <a href="{{ URL('/rastvor') }}" class="footer__link">Заказать раствор</a>
                </div>
                {{--                <div class="footer__item">--}}
                {{--                    <a href="{{ URL('/smm') }}" class="footer__link">СММ</a>--}}
                {{--                </div>--}}
                <div class="footer__item">
                    <a href="{{ URL('/trotuarnaya-plitka') }}" class="footer__link">Тротуарная плитка</a>
                </div>


            </div>
            <div class="footer__column">
                <p class="footer__title">О нас</p>
                <div class="footer__item">
                    <a href="{{ URL('/#about') }}" class="footer__link">О компании</a>
                </div>
                <div class="footer__item">
                    <a href="{{ URL('/dostavka') }}" class="footer__link">Доставка</a>
                </div>

                <div class="footer__item">
                    <a href="{{ URL('/contacts') }}" class="footer__link">Контакты</a>
                </div>
            </div>


        </div>
    </div>
</footer>

<div class="gagarin">
    <div class="container">
        <div class="gagarin__inner">
            <p class="gagarin__text"><a target="_blank" href="https://gagarin-digital.ru/razrabotka-sajtov" class="gagarin__link">Разработка сайта</a> веб-студия <a target="_blank" href="https://gagarin-digital.ru/" class="gagarin__link">Gagarin-digital.ru</a></p>
        </div>
    </div>
</div>




<script type="application/ld+json"> {
    "@context": "http://schema.org",
    "@type": "Organization",
    "name": "ООО Руд Медиум",
    "alternateName": "Руд Медиум",
    "description": "Бетон, раствор, тортуарная плитка",
    "url": "https://beton70.com/",
    "email": "beton70com@yandex.ru",
    "legalName": "Руд Медиум",
    "logo": "https://beton70.com/images/logo.png",
    "address": {
      "@type": "PostalAddress",
      "addressCountry": "RU",
      "addressLocality": "Томск",
      "addressRegion": "Томская область",
      "postalCode": "634021",
      "streetAddress": "ул. Шевченко, 49б ст 6"
    },
    "telephone": "+73822500200"
  }
</script>

{{--<link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>--}}
{{--<link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css"/>--}}

{{--<script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>--}}
{{--<style src="{{ URL::asset('js/app.js') }}"></style>--}}
<script src="{{ URL::asset('js/site.js') }} "></script>

</body>
</html>
