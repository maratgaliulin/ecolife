@extends('layout')

@section('title')
    О Нас
@endsection

@section('content')
    <div class="container">
        <div class="row">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{route('pages.index')}}">Главная</a></li>
                    <li class="breadcrumb-item active" aria-current="page">О Нас</li>
                </ol>
            </nav>
        </div><br>
        <div class="row cart-title-eco">
            <div class="title-product">
                <h5 class="display-4">О Нас</h5>
            </div>
        </div><br>
        <div class="row">
            <p class="lead">
                <b>Дорогие друзья!</b>
            </p>
            <p class="lead">
                Мы рады приветствовать вас в интернет-магазине натуральной косметики «EcoLife»!
                Наша компания на рынке с 2014 года. Все начиналось со склада и интернет-магазина,
                но как только люди попробовали нашу натуральную продукцию и им очень понравилось,
                начали поступать просьбы и предложения открыть наш фирменный магазин, куда можно
                было бы придти и самим все посмотреть и вдохнуть аромат нашей продукции, поскольку
                эти вкусные запахи не передать словами. И в 2015 году мы открыли наш первый
                фирменный магазин Ecolife на Московской 150.
            </p>
            <p class="lead text-center">
                <img src="{{asset('images/12.09.2015_-_31.jpg')}}" class="img-fluid img-thumbnail" width="50%">
            </p>
            <p class="lead">
                <b>На сегодняшний день в нашем ассортименте представлено более 3000 наименований</b>
            </p>
            <p class="lead">
                Мы  очень рады, что являемся одними из первооткрывателей этого нового экологичного
                направления и то, что теперь это стало популярно следить за своим здоровьем и
                пропагандировать экологичный образ жизни! Так что теперь у нас не только онлайн
                магазин, но и сеть магазинов по Кыргызстану, адреса которых вы можете найти на
                сайте. Для удобства нашим клиентам они расположены в разных частях города и
                совсем недавно мы открыли филиал в  г.Чолпон Ата. Основная идея любой из
                представленных серий косметических средств - это натуральность. Мы стараемся
                все время подбирать новые продукты, которые бы нравились наши любимым покупателям.
                И внедрили новую систему лояльности, теперь каждый наш клиент может получить скидки,
                бонусные баллы и подарки совсем бесплатно, просто скачав мобильное приложение.
            </p>
            <p class="lead">
                <b>Наша цель – дать людям лучшее!</b>
            </p>
            <p class="lead">
                Органическая и натуральная косметика давно популярна на Западе и
                становится все более популярной в Бишкеке. Наши магазины
                предлагают купить продукцию ведущих производителей натуральной и органической косметики.
            </p>
            <p class="lead text-danger">
                <b>Критерии, по которым какой-либо товар появляется в нашем магазине просты:</b>
            </p>
            <p class="lead">
                1. натуральное происхождение. <br>
                2. экологически чистое.<br>
                3. Абсолютная безопасность для окружающей среды, то есть биоразлагаемость природой.<br>
                4. Наличие сертификатов, подтверждающих все 3 вышеуказанных критерия.
            </p>
        </div>
        <br>
        <div class="row justify-content-center">
            <p class="lead">
                <img src="{{asset('images/12569564.jpg')}}" class="img-fluid">
            </p>
            <p class="lead">
                <b>Органическая косметика - </b> содержит только компоненты из растений, при выращивании
                которых не используются химические удобрения.
            </p>
            <p class="lead">
                <b>Натуральная косметика - </b> более широкое понятие, она также не содержит синтетических
                компонентов, но кроме растительных компонентов содержит еще и животные (воск, ланолин и др.).
                И органическая, и натуральная косметика отличаются благоприятным воздействием на кожу
                человека, питая ее недостающими веществами, которые легче усваиваются благодаря своему
                природному происхождению. Важным свойством натуральной косметики является стимулирование
                кожи к регенерации, что приводит к замедлению процессов старения и активизации всех ее функций.
                Натуральность и экологическая чистота ВСЕХ наших продуктов подтверждена европейскими
                сертификатами соответствия новым европейским органическим стандартам, которые недоступны
                большинству известных косметических брендов. Наши производители честно и открыто указывают
                на упаковке не только полный состав каждого продукта, но и, в соответствии с требованием
                ECOCERT, % экологически чистых ингредиентов.
            </p>
            <p class="lead">
                Попробуйте и мы гарантируем, что больше вы не вернетесь к использованию синтетических
                средств. Желаем здоровья и счастья вам и вашим близким!
            </p>
        </div>
    </div>
@endsection