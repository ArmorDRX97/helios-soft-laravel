@extends('layouts.front')

@section('content')

    <section class="page-title" style="background-image:url(front/images/background/3.jpg)">
        <div class="container">
            <div class="outer-box">
                <ul class="bread-crumb clearfix">
                    <li><a href="/news"><span class="fa fa-newspaper-o"></span>Новости</a></li>
                    <li class="active">Система учета "Favorit" продолжает подтверждать ...</li>
                </ul>
            </div>
        </div>
    </section>

    <div class="blog single-post sp-two">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-8 offset-md-2">
                    <div class="news-block-three">
                        <div class="inner-box">
                            <div class="image">
                                <img src="front/images/news/new-resertification.jpg" alt="">
                            </div>
                            <div class="lower-content">
                                <h1>Успешная ресертификация</h1>
                                <div class="text">
                                    Система учета "Favorit" продолжает подтверждать свой высокий уровень надежности и
                                    безопасности. В 2023 году программа прошла успешную ресертификацию по стандартам
                                    информационной безопасности в соответствии с требованиями ISO/IEC 15408-3-2017 на
                                    высший уровень доверия (ОУД 5). Этот результат подчеркивает постоянное стремление к
                                    соблюдению высших стандартов и обеспечению безопасности данных, что делает ИС
                                    "Favorit" надежным инструментом для управления финансами и обеспечения
                                    информационной безопасности.
                                </div>
                            </div>
                            <!-- share box -->
                            <ul class="share-box">
                                <li><a href="#">Сертификация</a></li>
                                <li><a href="#">Развитие</a></li>
                            </ul>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>

@endsection
