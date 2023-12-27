@extends('layouts.front')

@section('content')

    <section class="page-title" style="background-image:url(front/images/background/3.jpg)">
        <div class="container">
            <div class="outer-box">
                <ul class="bread-crumb clearfix">
                    <li><a href="/news"><span class="fa fa-newspaper-o"></span>Новости</a></li>
                    <li class="active">Рост рынка и если длинный заголовок, то он скоратиться ....</li>
                </ul>
            </div>
        </div>
    </section>

    <div class="blog single-post sp-two">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div class="news-block-three">
                        <div class="inner-box">
                            <div class="image">
                                <img src="front/images/resource/news-16.jpg" alt="">
                            </div>
                            <div class="lower-content">
                                <h1>Рост рынка</h1>
                                <div class="text">
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit sed do ei usmod tempor inididunt.enim minim ve niam quis nostrud exer citation ullamco laboris nisi ut aliquip ex commodo conse inquat duis aute irure dolor.cepteur sint occaecat cupidatat non proident sunt culpa qui officia deserunt.</p>
                                    <p>Enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit sed quia consequuntur. magni dolores eos ratione voluptatem sequinesc. neque porro quisquam est qui dolorem ipsum quia dolor sit amet consectetur.</p>
                                </div>
                                <blockquote class="block-quote">
                                    <div class="text">Lorem ipsum dolor sit amet, consectetur adipisicing elit sed eiusmod tempor in cididunt labore dolore magna aliqua. enim minim veniam quis nostrud exercitation ullamco</div>
                                </blockquote>
                                <div class="text">Consectetur adipisicing elit sed usmod tempor incididunt.enim minim veniam quis nostrud exer citation ullamco laboris nisi ut aliquip ex commodo conse inquat exer aute irure dolor. excepteur sint occaecat.</div>
                            </div>
                            <!-- share box -->
                            <ul class="share-box">
                                <li><a href="/news">Идеи</a></li>
                                <li><a href="/news">Услуги</a></li>
                                <li><a href="/news">Развитие</a></li>
                            </ul>
                        </div>
                    </div>

                </div>
                <div class="col-lg-4">
                    <aside class="sidebar">

                        <div class="sidebar-widget search-widget">
                            <div class="sidebar-title">
                                <h4>Поиск по новостям</h4>
                            </div>
                            <form method="post">
                                <div class="form-group">
                                    <input type="search" name="search-field" value="" placeholder="Поиск.." required="">
                                    <button type="submit"><span class="icon fa fa-search"></span></button>
                                </div>
                            </form>
                        </div>
                        <div class="sidebar-widget category-widget">
                            <div class="sidebar-title">
                                <h4>Категории</h4>
                            </div>
                            <ul>
                                <li class="active"><a href="/news">Маркетинг</a></li>
                                <li><a href="/news">Цифровое развитие</a></li>
                                <li><a href="/news">Мемы</a></li>
                                <li><a href="/news">Индустриальная парадигма</a></li>
                                <li><a href="/news">Новые идеи</a></li>
                                <li><a href="/news">Скандалы</a></li>
                            </ul>
                        </div>
                        <div class="sidebar-widget news-widget">
                            <div class="sidebar-title">
                                <h4>Актуальные новости</h4>
                            </div>

                            <div class="post">
                                <div class="text"><a href="/news">Изменение в налоговом кодексе</a></div>
                                <div class="post-info"><span>01.11.2023 15:44</span></div>
                            </div>

                            <div class="post">
                                <div class="text"><a href="/news">Новый указ президента</a></div>
                                <div class="post-info"><span>01.11.2023 15:44</span></div>
                            </div>

                            <div class="post">
                                <div class="text"><a href="/news">Выборы в Казахстане. Кто выйграл?</a></div>
                                <div class="post-info"><span>01.11.2023 15:44</span></div>
                            </div>
                            <!-- end -->
                        </div>
                        <div class="sidebar-widget tag-widget">
                            <div class="sidebar-title">
                                <h4>Теги</h4>
                            </div>
                            <a href="/news">Идеи</a>
                            <a href="/news">Бизнес</a>
                            <a href="/news">Консалтинг</a>
                            <a href="/news">Финансы</a>
                            <a href="/news">Развитие</a>
                            <a href="/news">Цифровизация</a>
                        </div>
                        <!-- end -->
                    </aside>
                </div>

            </div>
        </div>
    </div>

@endsection
