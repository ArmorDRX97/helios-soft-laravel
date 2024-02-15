@extends('layouts.front')

@section('content')

    <section class="page-title" style="background-image:url(front/images/background/3.jpg)">
        <div class="container">
            <div class="outer-box">
                <ul class="bread-crumb clearfix">
                    <li><a href="/news"><span class="fa fa-newspaper-o"></span>@lang('layout.news')</a></li>
                    <li class="active">Исчисление налогов меняется с 2024
                    </li>
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
                                <img src="front/images/resource/news-2.jpg" alt="">
                            </div>
                            <div class="lower-content">
                                <h1>Налоги, исчесление налогов меняется с 2024</h1>
                                <div class="text">
                                    С 1 января 2024 года:
                                  <ul>
                                      <li>Минимальный размер заработной платы (МЗП) в 2024 году - 85 000 тенге.</li>
                                      <li>Месячный расчетный показатель (МРП) в 2024 году – 3 692 тенге.</li>
                                      <li>Минимальный размер государственной базовой пенсионной выплаты – 28 215 тенге.</li>
                                      <li>Минимальный размер пенсии – 57 853 тенге.</li>
                                      <li>Величина прожиточного минимума для исчисления размеров базовых социальных выплат – 43 407 тенге.</li>
                                  </ul>
                                </div>
                            </div>
                            <!-- share box -->
{{--                            <ul class="share-box">--}}
{{--                                <li><a href="#">налоги</a></li>--}}
{{--                                <li><a href="#">изменения</a></li>--}}
{{--                            </ul>--}}
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>

@endsection
