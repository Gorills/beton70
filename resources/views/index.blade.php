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

    <div class="start">
        <div class="container">
            <div class="start__inner">
                <div class="start__text-block">
                    <h2 class="start__title" id="partner">Уникальная партнерская программа</h2>
                    <p class="start__subtitle">Кэшбэк <span class="accent-color">3%</span> от суммы заказа</p>
                    <p class="start__text">3% от суммы заказа возвращается на Ваш персональный счет, средства с которого можно
                        потратить на дальнейшую закупку материалов и оплатить до 100% их стоимости.</p>
                    <p class="start__subtitle">Накопительная система <span class="accent-color">скидок</span></p>
                    <p class="start__text">Регистрация в партнерской программе позволяет накапливать скидки от объема и со
                        временем, даже при небольших объемах заказов, достигнуть максимальной скидки.</p>
                    <a href="#" class="btn btn__dark start__hidden">Подробнее о программе</a>
                </div>

                <form action="" class="start__form">
                    <img class="start__img" src="{{ asset('images/hands.png') }}" alt="">
                    <label for="" class="start__label">ФИО</label>
                    <input type="text" class="start__input" placeholder="Иванов Иван Иванович">
                    <label for="" class="start__label">Телефон</label>
                    <input type="text" class="start__input" placeholder="+7 999 999 99 99">
                    <label for="" class="start__label">Название компании</label>
                    <input type="text" class="start__input" placeholder="Не обязательно">
                    <label for="" class="start__label">Ваш E-mail</label>
                    <input type="text" class="start__input" placeholder="mail@example.com">
                    <button type="submit" class="start__btn">Регистрация</button>
                </form>
            </div>
        </div>
    </div>


    <div class="hidden">
        <div class="container">
            <div class="hidden__inner">
                <p class="hidden__title">Почему постоянное сотрудничество с компанией "Руд Медиум" выгодно?</p>
                <p class="hidden__accent">Такого еще не было!</p>
                <p class="hidden__text">Компания «Руд Медиум» разработала самую выгодную систему сотрудничества по
                    реализации товарного бетона и раствора на сегодняшний день.</p>
                <p class="hidden__accent">Уникальный подход!</p>
                <p class="hidden__text">Зная наперед объем заказов на сезон, мы рассчитаем индивидуальную
                    скидку, учитывающую потребности каждого клиента.</p>
                <p class="hidden__accent">Накопительные скидки!</p>
                <p class="hidden__text">Не обязательно заказывать весь объем сразу или оплачивать большие партии наперед. Размер скидки растет пропорционально количеству заказов.</p>
                <p class="hidden__accent">Можно делиться скидками и получать за это бонусы!</p>
                <p class="hidden__text">Вы можете делиться своей скидкой с друзьями и знакомыми, и за каждый оплаченный заказ Вам будут начисляться бонусы в размере 3% от стоимости покупки. Этими бонусами можно оплатить до 100% стоимости нашей продукции.</p>
                <p class="hidden__accent">Рекомендация это выгодно!</p>
                <p class="hidden__text">Приятным бонусом является то, что привлеченные по Вашей рекомендации в нашу партнерскую программу клиенты будут приносить Вам 1% от общей стоимости своих заказов.</p>

                <p class="hidden__text-two">Чтобы узнать подробнее, заполните форму выше, либо позвоните нам по тел:</p>
                <a class="hidden__link" href="tel:83822500200">8 (3822) 500-200</a>
            </div>
        </div>
    </div>


    <div id="about" class="rud">
        <div class="container">
            <div class="rud__inner">
                <h1 class="rud__title">Бетонный завод ООО "Руд Медиум"</h1>
                <p class="rud__text">Производство бетона и раствора расположено по адресу: <b>г. Томск, ул. Шевченко 49б, ст6.</b></p>
                <p class="rud__text">Географическое расположение завода в центре города и вблизи от транспортных развязок имеет свое преимущество по срокам доставки. Бетоносмесители доставляют нашу продукцию как по Томску, так и по области в кратчайшие сроки за счет положения завода и близких выездов из города.</p>
                <p class="rud__text">Это положительно влияет на качество поставляемого бетона и раствора благодаря коротким срокам перемешивания. Благодаря этому строительные смеси не расслаиваются и приезжают на объекты строительства в первоначальном виде, что увеличивает качество заливающихся конструкций во много раз.</p>
                <div class="rud__btn-wrapper">
                    <a href="{{ URL('/beton') }}" class="rud__btn btn btn__accent">Заказать бетон</a>
                    <a href="{{ URL('/rastvor') }}" class="rud__btn btn btn__accent">Заказать раствор</a>
                </div>
            </div>
        </div>
    </div>
    <div class="text">
        <div class="container">
            <div class="text__inner">
                <h2 class="text__title">Лучшее соответствие качества бетона и цены</h2>
                <p class="text__text">Заводское приготовление бетона это лучший способ обеспечить высокий уровень качества произведенных смесей. Профессиональное оборудование позволяет держать на высочайшем уровне такие показатели, как жесткость и подвижность, а так же множество других важных свойств. Благодаря автоматизации производства, смеси получаются тщательно перемешанными и однородными. Качество продукции всегда остается на высоком уровне благодаря строгому соблюдению формул приготовления бетонных смесей и подходу к отбору добавляемых ингредиентов.</p>
                <p class="text__text">Наш бетонный завод оснащен собственным автопарком и мы осуществляем доставку бетона, раствора и товарной плитки по Томску и области в кратчайшие сроки и с гарантией сохранения качества произведенных бетонных смесей и тротуарной плитки.</p>
                <p class="text__text">Компания «Руд Медиум» работает только с проверенными поставщиками сырья и гарантирует качество произведенной продукции. На данный момент наша компания может предложить бетон следующих марок: М100, М150, М200, М250, М300, М350, М400. Раствор: М25, М50, М75, М100, М125, М150, М175, М200. Так же в ассортименте тротуарная плитка различных форм и цветов в наличии и под заказ.</p>
                <p class="text__text">Наши клиенты становятся постоянными благодаря уникальной
                    партнерской программе, постоянным скидкам и качеству <a href="{{ URL('/beton') }}" class="info__link">бетона</a>, <a href="{{ URL('/rastvor') }}" class="info__link">раствора</a>
                    и <a href="{{ URL('/trotuarnaya-plitka') }}" class="info__link">тротуарной плитки</a>.</p>

            </div>
        </div>
    </div>



    <section class="facts">
        <div class="container">
            <div class="facts__inner">
                <h2 class="facts__title">Несколько фактов о компании "Руд Медиум"</h2>

                <div class="facts__item">
                    <img src="{{ asset('images/v.svg') }}" alt="" class="facts__icon">
                    <div class="facts__text-block">
                        <p class="facts__text-bold">Большой опыт</p>
                        <p class="facts__text">Бетонный завод был открыт в 2001 году и до настоящего времени успешно осуществляет производство и
                            доставку товарного бетона по Томску и области.
                        </p>
                    </div>
                </div>
                <div class="facts__item">
                    <img src="{{ asset('images/v.svg') }}" alt="" class="facts__icon">
                    <div class="facts__text-block">
                        <p class="facts__text-bold">Передовое оборудование</p>
                        <p class="facts__text">Немецкое оборудование позволяет производить товарный бетон и раствор в точности до 1 куб.см и делать смеси по всем стандартам качества.
                        </p>
                    </div>
                </div>
                <div class="facts__item">
                    <img src="{{ asset('images/v.svg') }}" alt="" class="facts__icon">
                    <div class="facts__text-block">
                        <p class="facts__text-bold">Собственный автопарк</p>
                        <p class="facts__text">Большое количество транспорта качественно влияет на сроки доставки, а так же на скорость оформления заказа.
                        </p>
                    </div>
                </div>




            </div>
        </div>
    </section>


    <div class="about">
        <img src="{{ asset('images/bg.jpg') }}" alt="" class="about__img">
        <div class="container">

            <div class="about__inner">
                <p class="about__title">О нас в цифрах</p>

                <div class="about__block">
                    <div class="about__item">
                        <p id="num" class="about__num"></p>
                        <p class="about__text">Лет на рынке</p>
                    </div>
                    <div class="about__item">
                        <p id="num2" class="about__num"></p>
                        <p class="about__text">Кубов бетона доставлено</p>
                    </div>
                    <div class="about__item">
                        <p id="num3" class="about__num"></p>
                        <p class="about__text">Квадратов плитки произведено</p>
                    </div>
                </div>
            </div>
        </div>


    </div>

    <div class="info">
        <div class="container">
            <div class="info__inner">
                <h2 class="info__title">На сегодняшний день ООО "Руд Медиум" может предложить несколько вариантов продукции:</h2>
                <p class="info__text">- Товарный <a href="{{ URL('/beton') }}" class="info__link">бетон</a> и
                    <a href="{{ URL('/rastvor') }}" class="info__link">раствор</a>
                    всех марок от производителя по самым выгодным ценам.</p>
                <p class="info__text">- <a href="{{ URL('/trotuarnaya-plitka') }}" class="info__link">Тротуарную плитку</a> стандартных и индивидуальных цветов, форм и размеров.</p>
                <p class="info__text">- Изделия для <a href="{{ URL('/trotuarnaya-plitka') }}" class="info__link">благоустройства</a>, бордюры, поребрики, водостоки и многое другое.</p>


            </div>
        </div>
    </div>






@endsection
