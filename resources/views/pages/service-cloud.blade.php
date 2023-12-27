@extends('layouts.front')

@section('content')

    <div class="product-main service-cloud" style="background-image: url(front/images/services/s-c-bg.jpg);">
        <div class="container">
            <h1>Облачные решения <b>FAVORIT</b></h1>
            <p>Высокотехнологичный облачный сервис, обеспечивающий удобство, гибкость <br>и мгновенный доступ к вашим
                бизнес-процессам <b>в любое время и в любом месте</b></p>
            <div class="link-btn">
                <a href="/contact" class="theme-btn btn-style-seven">Связаться с нами</a>
            </div>
        </div>
    </div>

    <section class="our-service sp-two grey-bg service-cloud-our">
        <div class="container">
            <!-- sec tietle -->
            <div class="sec-title centered style-two deep">
                <div class="big-title">Что оно может</div>
                <h1>Возможности</h1>
            </div>
            <div class="row">
                <div class="service-block-six col-lg-4 col-md-6">
                    <div class="inner-box hvr-bounce-to-bottom">
                        <div class="icon-box">
                            <span class="flaticon-transport"></span>
                        </div>
                        <h4>Быстрое введение в работу</h4>
                        <div class="text">Начните работу мгновенно благодаря простому старту системы</div>
                    </div>
                    <div class="inner-box hvr-bounce-to-bottom mt-4">
                        <div class="icon-box">
                            <span class="fa fa-shield"></span>
                        </div>
                        <h4>Надежное хранение данных</h4>
                        <div class="text">Регулярные резервные копии данных обеспечивают безопасность и надежность
                            хранения важной информации
                        </div>
                    </div>
                </div>
                <div class="service-block-six col-lg-4 col-md-6">
                    <div class="inner-box hvr-bounce-to-bottom">
                        <div class="icon-box">
                            <span class="flaticon-clock"></span>
                        </div>
                        <h4>Доступ к данным в сети 24/7</h4>
                        <div class="text">Возможность получать данные из информационной базы в любое время суток
                        </div>
                    </div>
                    <div class="inner-box hvr-bounce-to-bottom mt-4">
                        <div class="icon-box">
                            <span class="fa fa-key"></span>
                        </div>
                        <h4>Безопасное облачное хранилище</h4>
                        <div class="text">Гарантированная безопасность в облаке для хранения конфиденциальных данных
                        </div>
                    </div>
                </div>
                <div class="service-block-six col-lg-4 col-md-6">
                    <div class="inner-box hvr-bounce-to-bottom">
                        <div class="icon-box">
                            <span class="flaticon-telemarketer"></span>
                        </div>
                        <h4>Профессиональная поддержка</h4>
                        <div class="text">Опытная техническая поддержка от отдела сопровождения обеспечивает надежное
                            сопровождение и оперативное решение возможных проблем
                        </div>
                    </div>
                    <div class="inner-box hvr-bounce-to-bottom mt-4">
                        <div class="icon-box">
                            <span class="fa fa-refresh"></span>
                        </div>
                        <h4>Автоматическое обновление</h4>
                        <div class="text">Система автоматически обновляется, гарантируя использование самой последней
                            версии без лишних усилий
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="our-experience sp-two">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 pr-lg-4 mb-30">
                    <div class="sec-title">
                        <div class="big-title">Стабильность</div>
                        <h1>Гарантия качества</h1>
                    </div>
                    <div class="text-block-one dark">
                        <div class="text">
                            <p>Облачный сервис "Favorit" обеспечивает максимальную гибкость и надежный доступ к ключевым
                                бизнес-процессам. Наше решение гарантирует безопасное хранение и автоматические
                                обновления данных, обеспечивая постоянный доступ к информации круглосуточно.
                                <br><br>
                                Наша цель - обеспечивая высокий уровень
                                безопасности и профессиональную техническую поддержку для эффективной работы <b
                                    class="c-main">Вашей</b>
                                компании.</p>
                        </div>
                        <div class="link-btn"><a href="/contact" class="theme btn-style-one">Связаться с нами</a></div>
                    </div>
                </div>
                <div class="col-lg-6 pl-lg-5">
                    <!-- graph image -->
                    <div class="image"><img src="front/images/services/s-c-last.png" alt=""></div>
                </div>
            </div>
        </div>
    </section>


@endsection
