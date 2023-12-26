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
    <link href="front/css/responsive.css" rel="stylesheet">
    <link href="front/css/custom.css" rel="stylesheet">
    <link href="front/css/custom2.css" rel="stylesheet">
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
                                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
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
                                                <li><a href="/favorit">ИС "Favorit"</a></li>
                                                <li><a href="/calculator">Зарплатный калькулятор</a></li>
                                            </ul>
                                            <div class="dropdown-btn"><span class="fa fa-angle-down"></span></div>
                                        </li>
                                        <li><a href="/services">Услуги</a></li>
                                        <li class="dropdown"><a href="#">Клиенты</a>
                                            <ul style="display: none;">
                                                <li><a href="/mails">Письма</a></li>
                                                <li><a href="/certificates">Сертификаты</a></li>
                                            </ul>
                                            <div class="dropdown-btn"><span class="fa fa-angle-down"></span></div>
                                        </li>
{{--                                        <li><a href="/news">Новости</a></li>--}}
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
            <div class="container clearfix">
                <div class="logo float-left">
                    <a href="/" class="img-responsive"><img src="front/images/logo.png" alt="logo" title="logo" width="77px"></a>
                </div>
                <div class="right-col float-right">
                    <nav class="main-menu navbar-expand-lg">
                        <div class="navbar-collapse collapse clearfix">
                            <ul class="navigation clearfix">
                                <li><a href="/">Главная</a></li>
                                <li><a href="/about">О компании</a></li>
                                <li class="dropdown"><a href="#">Продукты</a>
                                    <ul style="display: none;">
                                        <li><a href="/favorit">ИС "Favorit"</a></li>
                                        <li><a href="/calculator">Зарплатный калькулятор</a></li>
                                    </ul>
                                    <div class="dropdown-btn"><span class="fa fa-angle-down"></span></div>
                                </li>
                                <li><a href="/services">Услуги</a></li>
                                <li class="dropdown"><a href="#">Клиенты</a>
                                    <ul style="display: none;">
                                        <li><a href="/mails">Письма</a></li>
                                        <li><a href="/certificates">Сертификаты</a></li>
                                    </ul>
                                    <div class="dropdown-btn"><span class="fa fa-angle-down"></span></div>
                                </li>
{{--                                <li><a href="/news">Новости</a></li>--}}
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
                    <div class="big-column col-lg-6">
                        <div class="row clearfix">

                            <!--Footer Column-->
                            <div class="footer-column col-lg-7 col-md-7">
                                <div class="footer-widget about-widget">
                                    <div class="footer-logo">
                                        <figure>
                                            <a href="/"><img src="front/images/logo-white.png" alt="logo" title="logo" width="160px"></a>
                                        </figure>
                                    </div>
                                    <div class="widget-content">
                                        <ul class="social-icon-three">
                                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                            <li><a href="#"><i class="fa fa-vimeo"></i></a></li>
                                            <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <!--Footer Column-->
                            <div class="footer-column col-lg-5 col-md-5">
                                <div class="footer-widget services-widget">
                                    <h2 class="widget-title">services</h2>
                                    <div class="widget-content">
                                        <ul class="list">
                                            <li><a href="#">Company History</a></li>
                                            <li><a href="#">About Us</a></li>
                                            <li><a href="#">Contact Us</a></li>
                                            <li><a href="#">Services</a></li>
                                            <li><a href="#">Privacy Policy</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!--Big Column-->
                    <div class="big-column col-lg-6">
                        <div class="row clearfix">

                            <!--Footer Column-->
                            <div class="footer-column col-lg-5 col-md-5">
                                <div class="footer-widget services-widget">
                                    <h2 class="widget-title">Quick Link</h2>
                                    <div class="widget-content">
                                        <ul class="list">
                                            <li><a href="#">Company History</a></li>
                                            <li><a href="#">About Us</a></li>
                                            <li><a href="#">Contact Us</a></li>
                                            <li><a href="#">Services</a></li>
                                            <li><a href="#">Privacy Policy</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <!--Footer Column-->
                            <div class="footer-column col-lg-7 col-md-7">
                                <div class="footer-widget newsletter-widget">
                                    <h2 class="widget-title">NewsLetter</h2>
                                    <div class="widget-content">
                                        <div class="text">Lorem ipsum dolor sit amet, consect</div>
                                        <form action="#">
                                            <input type="text" placeholder="Enter Your Email">
                                            <button type="submit" class="theme-btn btn-style-one">Subscribe</button>
                                        </form>
                                    </div>
                                </div>
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

<!-- Custom script -->
<script src="front/js/script.js"></script>



</body>
</html>

