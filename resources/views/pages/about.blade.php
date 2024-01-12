@extends('layouts.front')

@section('content')

    <section class="page-title" style="background-image:url(front/images/background/3.jpg)">
        <div class="container">
            <div class="outer-box">
                <h1>О компании</h1>
            </div>
        </div>
    </section>


    <section class="feature-case-section-two sp-seven">
        <div class="container">
            <div class="feature-case-two">
                <div class="row align-items-md-center">
                    <div class="col-lg-6 pr-lg-5">
                        <div class="image"><img src="front/images/resource/case-4.jpg" alt=""></div>
                    </div>
                    <div class="col-lg-6">
                        <div class="inner-box">
                            <div class="sec-title deep">
                                <div class="big-title">@lang('about.section_title')</div>
                                <h1>@lang('about.mission_statement')</h1>
                            </div>
                            <div class="service-text">
                                <p>@lang('about.company_description')</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="our-experience-three sp-two grey-bg">
        <div class="container">
            <div class="sec-title centered deep">
                <div class="big-title">@lang('about.title')</div>
                <h1>@lang('about.subtitle')</h1>
            </div>
            <div class="text-center mb-80">
                <div class="text mb-40">
                    @lang('about.description')
                </div>
                <div class="link-btn"><a href="/contact" class="theme btn-style-one">@lang('about.contact_button')</a></div>
            </div>

            <div class="row">
                <div class="service-block-six about-page col-lg-4 col-md-6">
                    <a href="/favorit" class="inner-box hvr-bounce-to-bottom">
                        <div class="icon-box">
                            <span class="flaticon-computer-1"></span>
                        </div>
                        <h4>@lang('about.favorit.title')</h4>
                        <div class="text">
                            @lang('about.favorit.description')
                        </div>
                    </a>
                </div>
                <div class="service-block-six about-page col-lg-4 col-md-6">
                    <a href="/calculator" class="inner-box hvr-bounce-to-bottom">
                        <div class="icon-box">
                            <span class="fa fa-calculator"></span>
                        </div>
                        <h4>@lang('about.calculator.title')</h4>
                        <div class="text">
                            @lang('about.calculator.description')
                        </div>
                    </a>
                </div>
                <div class="service-block-six about-page col-lg-4 col-md-6">
                    <a href="www.youtube.com" class="inner-box hvr-bounce-to-bottom">
                        <div class="icon-box">
                            <span class="flaticon-headphones"></span>
                        </div>
                        <h4>@lang('about.youtube_channel.title')</h4>
                        <div class="text">
                            @lang('about.youtube_channel.description')
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>


    <section class="history-section grey-bg sp-two">
        <div class="container">
            <div class="row">
                <div class="col-lg-9">
                    <div class="content-section history-content">

                        <div class="sec-title style-two deep">
                            <div class="big-title">@lang('about.company_title')</div>
                            <h1>@lang('about.company_subtitle')</h1>
                        </div>
                        <div class="text mb-80">
                            @lang('about.company_history')
                        </div>

                        <!--Timeline Container-->
                        <div class="timeline-container">
                            <div class="vertical-line"></div>

                            <!--Timeline Block-->
                            <div class="timeline-block">
                                <div class="inner-box">
                                    <div class="left-info">
                                        <div class="date">
                                            <strong>1998</strong>
                                        </div>
                                    </div>
                                    <div class="text-content">
                                        <h4>@lang('about.start_title')</h4>
                                        <div class="text">
                                            @lang('about.start_text')
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!--Timeline Block-->
                            <div class="timeline-block">
                                <div class="inner-box">
                                    <div class="left-info">
                                        <div class="date">
                                            <strong>2002</strong>
                                        </div>
                                    </div>
                                    <div class="text-content">
                                        <h4>@lang('about.position_title')</h4>
                                        <div class="text">
                                            @lang('about.position_text')
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!--Timeline Block-->
                            <div class="timeline-block">
                                <div class="inner-box">
                                    <div class="left-info">
                                        <div class="date">
                                            <strong>2008</strong>
                                        </div>
                                    </div>
                                    <div class="text-content">
                                        <h4>@lang('about.integration_title')</h4>
                                        <div class="text">
                                            @lang('about.integration_text')
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!--Timeline Block-->
                            <div class="timeline-block">
                                <div class="inner-box">
                                    <div class="left-info">
                                        <div class="date">
                                            <strong>2012</strong>
                                        </div>
                                    </div>
                                    <div class="text-content">
                                        <h4>@lang('about.rights_registration_title')</h4>
                                        <div class="text">
                                            @lang('about.rights_registration_text')
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!--Timeline Block-->
                            <div class="timeline-block">
                                <div class="inner-box">
                                    <div class="left-info">
                                        <div class="date">
                                            <strong>2014</strong>
                                        </div>
                                    </div>
                                    <div class="text-content">
                                        <h4>@lang('about.certification_title')</h4>
                                        <div class="text">
                                            @lang('about.certification_text')
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!--Timeline Block-->
                            <div class="timeline-block">
                                <div class="inner-box">
                                    <div class="left-info">
                                        <div class="date">
                                            <strong>2018</strong>
                                        </div>
                                    </div>
                                    <div class="text-content">
                                        <h4>@lang('about.registry_title')</h4>
                                        <div class="text">
                                            @lang('about.registry_text')
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!--Timeline Block-->
                            <div class="timeline-block">
                                <div class="inner-box">
                                    <div class="left-info">
                                        <div class="date">
                                            <strong>2022</strong>
                                        </div>
                                    </div>
                                    <div class="text-content">
                                        <h4>@lang('about.industrial_certificate_title')</h4>
                                        <div class="text">
                                            @lang('about.industrial_certificate_text')
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!--Timeline Block-->
                            <div class="timeline-block">
                                <div class="inner-box">
                                    <div class="left-info">
                                        <div class="date">
                                            <strong>2023</strong>
                                        </div>
                                    </div>
                                    <div class="text-content">
                                        <h4>@lang('about.recertification_title')</h4>
                                        <div class="text">
                                            @lang('about.recertification_text')
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>



    <section class="our-team sp-two">
        <div class="container">
            <div class="sec-title style-two centered deep">
                <h1>@lang('about.leadership_title')</h1>
            </div>
            <div class="row">
                <div class="team-block-one col-lg-3 col-md-6">
                    <div class="inner-box">
                        <div class="image">
                            <img src="front/images/team/team1.jpg" alt="">
                        </div>
                        <div class="lower-box">
                            <h4><a href="#">@lang('about.leader1_name')</a></h4>
                            <div class="designation">@lang('about.leader1_position')</div>
                        </div>
                    </div>
                </div>
                <div class="team-block-one col-lg-3 col-md-6">
                    <div class="inner-box">
                        <div class="image">
                            <img src="front/images/team/team3.jpg" alt="">
                        </div>
                        <div class="lower-box">
                            <h4><a href="#">@lang('about.leader2_name')</a></h4>
                            <div class="designation">@lang('about.leader2_position')</div>
                        </div>
                    </div>
                </div>
                <div class="team-block-one col-lg-3 col-md-6">
                    <div class="inner-box">
                        <div class="image">
                            <img src="front/images/team/team2.jpg" alt="">
                        </div>
                        <div class="lower-box">
                            <h4><a href="#">@lang('about.leader3_name')</a></h4>
                            <div class="designation">@lang('about.leader3_position')</div>
                        </div>
                    </div>
                </div>
                <div class="team-block-one col-lg-3 col-md-6">
                    <div class="inner-box">
                        <div class="image">
                            <img src="front/images/team/team4.jpg" alt="">
                        </div>
                        <div class="lower-box">
                            <h4><a href="#">@lang('about.leader4_name')</a></h4>
                            <div class="designation">@lang('about.leader4_position')</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
