@extends('layouts.front')

@section('content')

    <div class="product-main" style="background-image: url(front/images/main-slider/image-20.jpg);">
        <div class="container">
            <div class="text-center">
                <h5>@lang('calc.free')</h5>
                <h1>@lang('calc.credit_calculator')</h1>
                <p>@lang('calc.most_accurate_and_reliable_salary_calculator')</p>
                <div class="link-btn">
                    <a href="https://zp.fvr.kz/" target="_blank" class="theme-btn btn-style-seven">@lang('calc.try_now') <i class="fa fa-arrow-right ml-10"></i></a>
                </div>
            </div>

        </div>
    </div>

    <section class="our-experience sp-two">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 pr-lg-5">
                    <div class="video-image-box mb-30">
                        <div class="image">
                            <img src="front/images/resource/video.jpg" alt="">
                            <a href="https://www.youtube.com/watch?v=XoF6v5IkDmw"
                               class="overlay-link play-now" data-fancybox="gallery" data-caption=""><span
                                    class="flaticon-play-button"></span> </a>
                            <span class="ripple"></span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 pl-lg-5">
                    <div class="sec-title deep">
                        <div class="big-title">@lang('calc.salary')</div>
                        <h1>@lang('calc.accurate_calculations')</h1>
                    </div>
                    <div class="tab-box mb-30">
                        <div class="text">
                            <p>@lang('calc.calculator_for_calculation_of_salary')</p>
                        </div>
                    </div>

                    <!-- end tab -->
                </div>
            </div>
        </div>
    </section>

    <section class="funfact-section-two black-bg-3">
        <div class="container">
            <div class="fact-counter">
                <div class="row">

                    <!--Column-->
                    <article class="column counter-column col-lg-4 wow fadeIn animated" data-wow-duration="900ms"
                             style="visibility: visible; animation-duration: 900ms; animation-name: fadeIn;">
                        <div class="item">
                            <div class="inner-box">
                                <div class="icon-box">
                                    <i class="flaticon-computer-2"></i>
                                </div>
                                <div class="count-outer count-box">
                                    <span data-stop="8281425" class="count-text" data-speed="3000"></span>
                                    <p>@lang('calc.total_calculations')</p>
                                </div>
                            </div>
                        </div>
                    </article>
                    <!--Column-->
                    <article class="column counter-column col-lg-4 wow fadeIn animated" data-wow-duration="300ms"
                             style="visibility: visible; animation-duration: 300ms; animation-name: fadeIn;">
                        <div class="item">
                            <div class="inner-box">
                                <div class="icon-box">
                                    <i class="flaticon-project"></i>
                                </div>
                                <div class="count-outer count-box">
                                    <span data-stop="51524" class="count-text" data-speed="3000"></span>
                                    <p>@lang('calc.last_30_days')</p>
                                </div>
                            </div>
                        </div>
                    </article>

                    <!--Column-->
                    <article class="column counter-column col-lg-4 wow fadeIn animated" data-wow-duration="600ms"
                             style="visibility: visible; animation-duration: 600ms; animation-name: fadeIn;">
                        <div class="item">
                            <div class="inner-box">
                                <div class="icon-box">
                                    <i class="flaticon-group"></i>
                                </div>
                                <div class="count-outer count-box">
                                    <span data-stop="458" class="count-text" data-speed="3000"></span>
                                    <p>@lang('calc.today')</p>
                                </div>
                            </div>
                        </div>
                    </article>
                </div>
            </div>
        </div>
    </section>

    <section class="faq-section sp-two">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="sec-title style-two deep">
                        <div class="big-title">FAQ</div>
                        <h1>@lang('calc.questions_and_answers')</h1>
                    </div>
                    <div class="text">
                        <p class="m-0">@lang('calc.general_telegram_chat')</p>
                        <p class="text-muted">"@lang('calc.all_discussions_are_recommendatory')"</p>
                    </div>

                    <a href="https://t.me/+m7KaH3N-tc0zMzJi" target="_blank" class="btn btn-success btn-lg">@lang('calc.join')</a>
                </div>
                <div class="col-lg-4">
                    <div class="request-callback">
                        <div class="inner-box">
                            <div class="text">@lang('calc.contact_us_any_question')</div>
                            <div class="phone-number mb-3"><span class="flaticon-headphones"></span>+7 (7172) 79 80 30</div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>

@endsection
