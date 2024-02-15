@php
    $version = 4;
@endphp


<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Stylesheets -->
    <link href="front/css/bootstrap.css" rel="stylesheet">
    <link href="front/css/style.css" rel="stylesheet">
    <link href="front/css/custom.css?v{{$version}}" rel="stylesheet">
    <link href="front/css/responsive.css" rel="stylesheet">
    <link href="front/css/custom2.css?v{{$version}}" rel="stylesheet">
    <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
    <link rel="manifest" href="/site.webmanifest">
    <link rel="mask-icon" href="/safari-pinned-tab.svg" color="#5bbad5">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">
    <title>@lang('layout.title')</title>
</head>
<body>

<div class="page-wrapper">
    <div class="preloader"></div>

    <header class="main-header">
        <!--Header-Upper-->
        <div class="header-upper style-six @if(app()->getLocale() == 'kz') v-kz @endif">
            <div class="container">
                <div class="box-menu-bg clearfix">

                    <div class="float-left logo-outer">
                        <div class="logo">
                            <a href="/">
                                <img src="front/images/logo-white.png" alt="logo" title="logo" width="77px">
                            </a>
                        </div>
                    </div>

                    <div class="float-right upper-right clearfix">

                        <div class="nav-outer clearfix">
                            <!-- Main Menu -->
                            <nav class="main-menu navbar-expand-lg">
                                <div class="navbar-header">
                                    <!-- Toggle Button -->
                                    <button type="button" class="navbar-toggle" data-toggle="collapse"
                                            data-target=".navbar-collapse">
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                    </button>
                                </div>

                                <div class="navbar-collapse collapse clearfix">
                                    <ul class="navigation clearfix">

{{--                                        <li><a href="/">@lang('layout.main')</a></li>--}}
                                        <li><a href="/about">@lang('layout.about')</a></li>
                                        <li class="dropdown"><a href="#">@lang('layout.products')</a>
                                            <ul style="display: none;">
                                                <li><a href="/favorit">@lang('layout.favorit_education')</a></li>
                                                <li><a href="/favorit-corp">@lang('layout.favorit_corp')</a></li>
                                                <li><a href="/calculator">@lang('layout.calc')</a></li>
                                            </ul>
                                            <div class="dropdown-btn"><span class="fa fa-angle-down"></span></div>
                                        </li>

                                        <li class="dropdown"><a href="#">@lang('layout.services')</a>
                                            <ul style="display: none;">
                                                <li><a href="/service-cloud">@lang('layout.cloud_service')</a></li>
                                                <li><a href="/service-favorit">@lang('layout.tech_and_obu')</a></li>
                                            </ul>
                                            <div class="dropdown-btn"><span class="fa fa-angle-down"></span></div>
                                        </li>
                                        <li class="dropdown"><a href="#">@lang('layout.clients')</a>
                                            <ul style="display: none;">
                                                <li><a href="/mails">@lang('layout.mails')</a></li>
                                                <li><a href="/certificates">@lang('layout.certificates')</a></li>
                                            </ul>
                                            <div class="dropdown-btn"><span class="fa fa-angle-down"></span></div>
                                        </li>
                                                                                <li><a href="/news">@lang('layout.news')</a></li>

                                        <li><a href="/contact">@lang('layout.contacts')</a></li>
                                        <li class="dropdown langs">
                                            <a href="#" class="active-lang">
                                                @if(app()->getLocale() == 'ru')
                                                    RU <img src="front/images/langs/ru.png" alt="ru">
                                                @elseif(app()->getLocale() == 'kz')
                                                    KZ <img src="front/images/langs/kz.png" alt="kz">
{{--                                                @elseif(app()->getLocale() == 'en')--}}
{{--                                                    EN <img src="front/images/langs/en.png" alt="en">--}}
                                                @endif
                                            </a>
                                            <ul class="c-right" style="display: none;">
                                                <li>
                                                    @if(app()->getLocale() !== 'ru')
                                                        <a class="lang-item" href="{{ route('setlocale', 'ru') }}">
                                                            <span>RU</span><img src="front/images/langs/ru.png" alt="ru">
                                                        </a>
                                                    @endif
                                                </li>
                                                <li>
                                                    @if(app()->getLocale() !== 'kz')
                                                        <a class="lang-item" href="{{ route('setlocale', 'kz') }}">
                                                            <span>KZ</span><img src="front/images/langs/kz.png" alt="kz">
                                                        </a>
                                                    @endif
                                                </li>
{{--                                                <li>--}}
{{--                                                    @if(app()->getLocale() !== 'en')--}}
{{--                                                        <a class="lang-item" href="{{ route('setlocale', 'en') }}">--}}
{{--                                                            <span>EN</span><img src="front/images/langs/en.png" alt="en">--}}
{{--                                                        </a>--}}
{{--                                                    @endif--}}
{{--                                                </li>--}}
                                            </ul>
                                            <div class="dropdown-btn"><span class="fa fa-angle-down"></span></div>
                                        </li>
                                    </ul>
                                </div>
                            </nav>
                        </div>

                    </div>

                </div>
            </div>
        </div>
        <!--End Header Upper-->
        <div class="sticky-header @if(app()->getLocale() == 'kz') v-kz @endif">
            <div class="mobile-menu-overlay"></div>

            <div class="container clearfix">
                <div class="logo float-left">
                    <a href="/" class="img-responsive"><img src="front/images/logo.png" alt="logo" title="logo"
                                                            width="77px"></a>
                </div>
                <button type="button" class="navbar-toggle mobile-toggle">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <div class="right-col float-right mobile-style">
                    <nav class="main-menu navbar-expand-lg">
                        <div class="navbar-collapse clearfix">
                            <ul class="navigation clearfix">
{{--                                <li><a href="/">@lang('layout.main')</a></li>--}}
                                <li><a href="/about">@lang('layout.about')</a></li>
                                <li class="dropdown"><a href="#">@lang('layout.products')</a>
                                    <ul style="display: none;">
                                        <li><a href="/favorit">@lang('layout.favorit_education')<i class="fa fa-angle-left"></i></a></li>
                                        <li><a href="/favorit-corp">@lang('layout.favorit_corp')<i class="fa fa-angle-left"></i></a></li>
                                        <li><a href="/calculator">@lang('layout.calc') <i class="fa fa-angle-left"></i></a></li>
                                    </ul>
                                    <div class="dropdown-btn"><span class="fa fa-angle-down"></span></div>
                                </li>
                                <li class="dropdown"><a href="#">@lang('layout.services')</a>
                                    <ul style="display: none;">
                                        <li><a href="/service-cloud">@lang('layout.cloud_service') <i class="fa fa-angle-left"></i></a></li>
                                        <li><a href="/service-favorit">@lang('layout.tech_and_obu') <i class="fa fa-angle-left"></i></a></li>
                                    </ul>
                                    <div class="dropdown-btn"><span class="fa fa-angle-down"></span></div>
                                </li>
                                <li class="dropdown"><a href="#">@lang('layout.clients')</a>
                                    <ul style="display: none;">
                                        <li><a href="/mails">@lang('layout.mails') <i class="fa fa-angle-left"></i></a></li>
                                        <li><a href="/certificates">@lang('layout.certificates') <i class="fa fa-angle-left"></i></a></li>
                                    </ul>
                                    <div class="dropdown-btn"><span class="fa fa-angle-down"></span></div>
                                </li>
                                                                <li><a href="/news">@lang('layout.news')</a></li>
                                <li><a href="/contact">@lang('layout.contacts')</a></li>
                                <li class="dropdown langs">
                                    <a href="#" class="active-lang">
                                        @if(app()->getLocale() == 'ru')
                                            RU <img src="front/images/langs/ru.png" alt="ru">
                                        @elseif(app()->getLocale() == 'kz')
                                            KZ <img src="front/images/langs/kz.png" alt="kz">
{{--                                        @elseif(app()->getLocale() == 'en')--}}
{{--                                            EN <img src="front/images/langs/en.png" alt="en">--}}
                                        @endif
                                    </a>
                                    <ul class="c-right" style="display: none;">
                                        <li>
                                            @if(app()->getLocale() !== 'ru')
                                                <a class="lang-item" href="{{ route('setlocale', 'ru') }}">
                                                    <span>RU</span><img src="front/images/langs/ru.png" alt="ru">
                                                </a>
                                            @endif
                                        </li>
                                        <li>
                                            @if(app()->getLocale() !== 'kz')
                                                <a class="lang-item" href="{{ route('setlocale', 'kz') }}">
                                                    <span>KZ</span><img src="front/images/langs/kz.png" alt="kz">
                                                </a>
                                            @endif
                                        </li>
{{--                                        <li>--}}
{{--                                            @if(app()->getLocale() !== 'en')--}}
{{--                                                <a class="lang-item" href="{{ route('setlocale', 'en') }}">--}}
{{--                                                    <span>EN</span><img src="front/images/langs/en.png" alt="en">--}}
{{--                                                </a>--}}
{{--                                            @endif--}}
{{--                                        </li>--}}
                                    </ul>
                                    <div class="dropdown-btn"><span class="fa fa-angle-down"></span></div>
                                </li>
                            </ul>
                        </div>
                    </nav>
                </div>

            </div>
        </div>
    </header>

    @yield('content')

    <div class="pre-footer">
        <div class="container">
           <div>
               <a href="/Setup_42.exe" class="theme-btn btn-style-seven"><i class="fa fa-download mr-3"></i> Скачать информационную систему "Favorit"</a>
           </div>
            <div class="text text-muted">

            </div>
        </div>
    </div>

    <footer class="main-footer">
        <div class="container">

            <!--Widgets Section-->
            <div class="widgets-section">
                <div class="row clearfix">
                    <!--Big Column-->
                    <div class="big-column footer-column col-lg-4">
                        <div class="footer-widget about-widget">
                            <div class="footer-logo">
                                <figure>
                                    <a href="/"><img src="front/images/logo-white.png" alt="logo" title="logo"
                                                     width="160px"></a>
                                </figure>
                            </div>
                            <div class="widget-content">
                                <div class="text">@lang('layout.footer_text')</div>
                            </div>
                        </div>
                    </div>

                    <div class="big-column footer-column col-lg-4">
                        <div class="footer-widget services-widget no-arrow">
                            <h2 class="widget-title">@lang('layout.main_office')</h2>
                            <div class="widget-content">
                                <ul class="list">
                                    <li><i class="fa fa-phone"></i> +7 (7172) 79 80 30</li>
                                    <li><i class="flaticon-placeholder"></i>@lang('layout.address')</li>
                                    <li><i class="fa fa-envelope"></i> info@helios-soft.kz</li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="big-column footer-column col-lg-4">
                        <div class="footer-widget services-widget">
                            <h2 class="widget-title">@lang('layout.more')</h2>
                            <div class="widget-content">
                                <ul class="list">
                                    <li><a href="https://help.fvr.kz/">@lang('layout.wiki_favorit')</a></li>
                                    <li><a href="https://zp.fvr.kz/">@lang('layout.zp_calc')</a></li>
                                    <li><a href="https://www.instagram.com/helios_soft/"><i class="fa fa-instagram"></i> Instagram</a></li>
                                    <li><a href="https://www.youtube.com/@FavorIT_expert"><i class="fa fa-youtube"></i> Youtube</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!--Footer Bottom-->
        <div class="footer-bottom">
            <div class="container">
                <div class="copyright-text">
                    <p><a href="#">Helios Soft</a> © 2024 @lang('layout.all_rights_reserved')</p>
                </div>
            </div>
        </div>
    </footer>
</div>

<button class="scroll-top scroll-to-target" data-target="html" style="display: none;">
    <span class="fa fa-angle-up"></span>
</button>

<script src="front/js/jquery.js"></script>
<script src="front/js/popover.js"></script>
<script src="front/js/bootstrap.min.js"></script>
<script src="front/js/wow.js"></script>
<script src="front/js/owl.js"></script>
<script src="front/js/validate.js"></script>
<script src="front/js/mixitup.js"></script>
<script src="front/js/isotope.js"></script>
<script src="front/js/appear.js"></script>
<script src="front/js/jquery.fancybox.js"></script>
<script src="front/js/script.js?v{{$version}}"></script>
</body>
</html>

