@extends('layouts.front')

@section('content')
    <section class="main-slider2">
        <div class="container-fluid">
            <ul class="main-slider-carousel owl-carousel owl-theme slide-nav">
                <li class="slider-wrapper">
                    <div class="image"><img src="front/images/main-slider/image-21.jpg" alt=""></div>
                    <div class="slider-caption">
                        <div class="container">
                            <div class="row">
                                <div class="col-12 col-lg-8">
                                    <h1>@lang('index.welcome_message')</h1>
                                    <h5 class="text-white">@lang('index.company_description')</h5>
                                    <div class="link-btn">
                                        <a href="/about" class="theme-btn btn-style-one">@lang('index.more_details')</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="slide-overlay"></div>
                </li>
                <li class="slider-wrapper">
                    <div class="image"><img src="front/images/main-slider/image-18.jpg" alt=""></div>
                    <div class="slider-caption">
                        <div class="container">
                            <div class="row">
                                <div class="col-12 col-lg-8">
                                    <h1>@lang('index.simple_fast_reliable')</h1>
                                    <h5 class="text-white">@lang('index.system_description')</h5>
                                    <div class="link-btn">
                                        <a href="/favorit" class="theme-btn btn-style-one">@lang('index.more_details')</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="slide-overlay"></div>
                </li>
            </ul>
        </div>
    </section>


    <section class="blog-section sp-two">
        <div class="container">
            <div class="sec-title centered style-two">
                <div class="big-title">@lang('index.latest_news')</div>
                <h1>@lang('index.latest_news')</h1>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6 news-block-two">
                    <div class="inner-box hvr-float-shadow">
                        <div class="lower-content">
                            <div class="new-image">
                                <img src="front/images/resource/news-2.jpg" alt="image" class="w-100">
                            </div>
                            <h4><a href="/new-taxes-change">Исчисление налогов меняется с 2024</a></h4>
                            <ul class="post-meta">
                                <li><span>03.01.2024 13:48</span></li>
                            </ul>
                            <div class="text">Минимальный размер заработной платы, Месячный расчетный показатель, Минимальный размер...
                            </div>
                            <div class="link-btn"><a href="/new-taxes-change" class="read-more-btn">@lang('index.read_more') <span
                                        class="fa fa-long-arrow-right"></span></a></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 news-block-two">
                    <div class="inner-box hvr-float-shadow">
                        <div class="lower-content">
                            <div class="new-image">
                                <img src="front/images/resource/news-3.jpg" alt="image" class="w-100">
                            </div>
                            <h4><a href="/new-successful-implementation-completed">Успешная реализация пилотных проектов</a></h4>
                            <ul class="post-meta">
                                <li><span>29.12.2023 12:37</span></li>
                            </ul>
                            <div class="text">Завершилась успешная реализация пилотных проектов в сфере образования Туркестанской ...
                            </div>
                            <div class="link-btn"><a href="/new-successful-implementation-completed" class="read-more-btn">@lang('index.read_more') <span
                                        class="fa fa-long-arrow-right"></span></a></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 news-block-two">
                    <div class="inner-box hvr-float-shadow">
                        <div class="lower-content">
                            <div class="new-image">
                                <img src="front/images/resource/news-4.jpg" alt="image" class="w-100">
                            </div>
                            <h4><a href="/new-open-taldyqorgan">Новый Этап: Открытие Контакт-Центра "Helios Soft" в Талдыкоргане</a></h4>
                            <ul class="post-meta">
                                <li><span>02.12.2023 09:20</span></li>
                            </ul>
                            <div class="text">ТОО «Helios Soft» продолжает укреплять свое присутствие в регионах Казахстана
                            </div>
                            <div class="link-btn"><a href="/new-open-taldyqorgan" class="read-more-btn">@lang('index.read_more') <span
                                        class="fa fa-long-arrow-right"></span></a></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="link-btn text-center mb-20 mt-20"><a href="/news" class="theme-btn btn-style-one">@lang('index.all_news')</a></div>
        </div>
    </section>


    <section class="what-we-do sp-two">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="sec-title">
                        <div class="big-title">FAVORIT</div>
                        <h1>@lang('index.kazakhstan_erp_system')</h1>
                    </div>
                    <div class="text">
                        <p>@lang('index.system_advantages')</p>
                        <p>@lang('index.system_advantages2')</p>
                        <p>@lang('index.system_advantages3')</p>
                    </div>
                    <div class="link-btn mb-30 mt-40"><a href="/favorit" class="theme-btn btn-style-one">@lang('index.more_details')</a></div>
                </div>
                <div class="col-lg-6">
                    <div class="stacked-image-carousel">
                        <!--Slides-->
                        <div class="slides">
                            <!--Slide-->
                            <div class="slide">
                                <div class="image"><img src="front/images/resource/service-5.jpg" alt=""></div>
                            </div>
                            <!--Slide-->
                            <div class="slide active">
                                <div class="image"><img src="front/images/resource/service-6.jpg" alt=""></div>
                            </div>
                            <!--Slide-->
                            <div class="slide">
                                <div class="image"><img src="front/images/resource/service-7.jpg" alt=""></div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>

    <section class="parallax-section sp-one" style="background-image:url(front/images/background/5.jpg);">
        <div class="container">
            <div class="sec-title light centered">
                <h1>@lang('index.presence_in_regions')</h1>
                <div class="text-center map-container">
                    <div class="map-block">
                        <span class="map-pulse astana">
                            <span class="map-pulse-text">@lang('index.astana')</span>
                        </span>
                        <span class="map-pulse ust">
                            <span class="map-pulse-text">@lang('index.ust_kamenogorsk')</span>
                        </span>
                        <span class="map-pulse semey">
                           <span class="map-pulse-text">@lang('index.semey')</span>
                        </span>
                        <span class="map-pulse koksh">
                              <span class="map-pulse-text">@lang('index.kokshetau')</span>
                        </span>
                        <span class="map-pulse pavl">
                            <span class="map-pulse-text">@lang('index.pavlodar')</span>
                        </span>
                        <span class="map-pulse turk">
                            <span class="map-pulse-text">@lang('index.turkestan')</span>
                        </span>
                        <span class="map-pulse talk">
                            <span class="map-pulse-text">@lang('index.taldykorgan')</span>
                        </span>
                        <img src="front/images/map.png" alt="map" class="img-fluid">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="why-chooseus sp-one">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="service-block-two-area">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="image"><img src="front/images/resource/why-choose2.jpg" alt=""></div>
                            </div>
                            <div class="col-md-6">
                                <div class="outer-box">
                                    <div class="service-block-two">
                                        <div class="inner-box">
                                            <div class="icon-box"><span class="icon flaticon-user"></span></div>
                                            <h4><a href="#">@lang('index.bolee1') <span class="count-outer count-box">
                                                        <span data-stop="200" class="count-text c-main" data-speed="3000"></span>
                                                    </span> @lang('index.sotrudnikov')</a></h4>
                                            <div class="service-text">
                                                @lang('index.employees_description')
                                            </div>
                                        </div>
                                    </div>
                                    <div class="service-block-two">
                                        <div class="inner-box">
                                            <div class="icon-box"><span class="icon flaticon-profile"></span></div>
                                            <h4><a href="#">@lang('index.bolee2')
                                                    <span class="count-outer count-box">
                                                        <span data-stop="4500" class="count-text c-main" data-speed="3000"></span>
                                                    </span>
                                                    @lang('index.obs_polzv')</a></h4>
                                            <div class="service-text">
                                                @lang('index.users_description')
                                            </div>

                                        </div>
                                    </div>
                                    <div class="service-block-two">
                                        <div class="inner-box">
                                            <div class="icon-box"><span class="icon flaticon-cup-1"></span></div>
                                            <h4><a href="#">@lang('index.bolee3')
                                                    <span class="count-outer count-box">
                                                        <span data-stop="2000" class="count-text c-main" data-speed="3000"></span>
                                                    </span>
                                                    @lang('index.orgs')</a></h4>
                                            <div class="service-text">
                                                @lang('index.organizations_description')
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- end column-->
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
@endsection
