@php
    $version = 2;
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
    <title>Helios Soft - казахстанская IT компания</title>
</head>
<body>

<div class="page-wrapper">
    <div class="preloader"></div>

    <header class="main-header">
        <!--Header-Upper-->
        <div class="header-upper style-six">
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

                                        <li><a href="/">Главная</a></li>
                                        <li><a href="/about">О компании</a></li>
                                        <li class="dropdown"><a href="#">Продукты</a>
                                            <ul style="display: none;">
                                                <li><a href="/favorit">ИС "Favorit" Education</a></li>
                                                <li><a href="/favorit-corp">ИС "Favorit" Corp</a></li>
                                                <li><a href="/calculator">Калькулятор</a></li>
                                            </ul>
                                            <div class="dropdown-btn"><span class="fa fa-angle-down"></span></div>
                                        </li>

                                        <li class="dropdown"><a href="#">Услуги</a>
                                            <ul style="display: none;">
                                                <li><a href="/service-cloud">Облачный сервис</a></li>
                                                <li><a href="/service-favorit">Техническая поддержка и обучение</a></li>
                                            </ul>
                                            <div class="dropdown-btn"><span class="fa fa-angle-down"></span></div>
                                        </li>
                                        <li class="dropdown"><a href="#">Клиенты</a>
                                            <ul style="display: none;">
                                                <li><a href="/mails">Письма</a></li>
                                                <li><a href="/certificates">Сертификаты</a></li>
                                            </ul>
                                            <div class="dropdown-btn"><span class="fa fa-angle-down"></span></div>
                                        </li>
                                                                                <li><a href="/news">Новости</a></li>
                                        <li><a href="/contact">Контакты</a></li>
                                    </ul>
                                </div>
                            </nav>
                        </div>

                    </div>

                </div>
            </div>
        </div>
        <!--End Header Upper-->
        <div class="sticky-header">
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
                                <li><a href="/">Главная</a></li>
                                <li><a href="/about">О компании</a></li>
                                <li class="dropdown"><a href="#">Продукты</a>
                                    <ul style="display: none;">
                                        <li><a href="/favorit">ИС "Favorit" Education<i class="fa fa-angle-left"></i></a></li>
                                        <li><a href="/favorit-corp">ИС "Favorit" Corp<i class="fa fa-angle-left"></i></a></li>
                                        <li><a href="/calculator">Калькулятор <i class="fa fa-angle-left"></i></a></li>
                                    </ul>
                                    <div class="dropdown-btn"><span class="fa fa-angle-down"></span></div>
                                </li>
                                <li class="dropdown"><a href="#">Услуги</a>
                                    <ul style="display: none;">
                                        <li><a href="/service-cloud">Облачный сервис <i class="fa fa-angle-left"></i></a></li>
                                        <li><a href="/service-favorit">Техническая поддержка и обучение <i class="fa fa-angle-left"></i></a></li>
                                    </ul>
                                    <div class="dropdown-btn"><span class="fa fa-angle-down"></span></div>
                                </li>
                                <li class="dropdown"><a href="#">Клиенты</a>
                                    <ul style="display: none;">
                                        <li><a href="/mails">Письма <i class="fa fa-angle-left"></i></a></li>
                                        <li><a href="/certificates">Сертификаты <i class="fa fa-angle-left"></i></a></li>
                                    </ul>
                                    <div class="dropdown-btn"><span class="fa fa-angle-down"></span></div>
                                </li>
                                                                <li><a href="/news">Новости</a></li>
                                <li><a href="/contact">Контакты</a></li>
                            </ul>
                        </div>
                    </nav>
                </div>

            </div>
        </div>
    </header>

    @yield('content')

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
                                <div class="text">В 2023 году ИС "Favorit" в очередной раз подтвердил соответствие продукта высокой надежности и безопасности, пройдя сертификацию на информационную безопасность</div>
                            </div>
                        </div>
                    </div>

                    <div class="big-column footer-column col-lg-4">
                        <div class="footer-widget services-widget no-arrow">
                            <h2 class="widget-title">Головной офис</h2>
                            <div class="widget-content">
                                <ul class="list">
                                    <li><i class="fa fa-phone"></i> +7 (7172) 79 80 30</li>
                                    <li><i class="flaticon-placeholder"></i> г. Астана, Шоссе Коргалжын, 19,
                                            Бизнес-центр "Korgalzhyn"</li>
                                    <li><i class="fa fa-envelope"></i> info@helios-soft.kz</li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="big-column footer-column col-lg-4">
                        <div class="footer-widget services-widget">
                            <h2 class="widget-title">Прочее</h2>
                            <div class="widget-content">
                                <ul class="list">
                                    <li><a href="https://help.fvr.kz/">Наш Wiki "Favorit"</a></li>
                                    <li><a href="https://zp.fvr.kz/">Зарплатный калькулятор</a></li>
                                    <li><a href="https://www.instagram.com/helios_soft/"><i class="fa fa-instagram"></i> Instagram</a></li>
                                    <li><a href="https://www.instagram.com/helios_soft/"><i class="fa fa-instagram"></i> Youtube</a></li>
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
                    <p><a href="#">Helios Soft</a> © 2024 Все права защищены</p>
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

