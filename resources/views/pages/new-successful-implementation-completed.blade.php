@extends('layouts.front')

@section('content')

    <section class="page-title" style="background-image:url(front/images/background/3.jpg)">
        <div class="container">
            <div class="outer-box">
                <ul class="bread-crumb clearfix">
                    <li><a href="/news"><span class="fa fa-newspaper-o"></span>@lang('layout.news')</a></li>
                    <li class="active">Антикор Туркестан, Павлодар, Акмола
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
                                <img src="front/images/resource/news-16.jpg" alt="">
                            </div>
                            <div class="lower-content">
                                <h1>Антикор Туркестан, Павлодар, Акмола</h1>
                                <div class="text">
                                    Завершилась успешная реализация пилотных проектов в сфере образования Туркестанской,
                                    Павлодарской и Акмолинской областей. В ходе проектов была успешно внедрена единая
                                    цифровая система учета, разработанная ТОО 'Helios Soft' при сотрудничестве с
                                    Антикоррупционной службой и акиматами регионов. Эти инновационные инициативы
                                    направлены на улучшение прозрачности и эффективности управления в образовательных
                                    учреждениях, а также на предотвращение коррупционных рисков. Пилотные проекты стали
                                    важным шагом в цифровой трансформации образования в данных областях и предоставляют
                                    ценный опыт для возможного расширения подобных инициатив в других регионах страны
                                </div>
                            </div>
                            <!-- share box -->
                            <ul class="share-box">
                                <li><a href="#">Итоги</a></li>
                            </ul>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>

@endsection
