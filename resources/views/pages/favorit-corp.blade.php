@extends('layouts.front')

@section('content')

    <div class="product-main" style="background-image: url(front/images/main-slider/image-19.jpg);">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-8">
                    <h1>@lang('favorit_corp.erp_system_favorit')</h1>
                    <p>@lang('favorit_corp.efficient_planning_and_accounting')</p>
                    <div class="link-btn">
                        <a href="/Setup_42.exe" class="theme-btn btn-style-one"><i
                                class="fa fa-download mr-3"></i>@lang('favorit_corp.download')</a>
                        <a href="/contact" class="theme-btn btn-style-seven">@lang('favorit_corp.contact_us')</a>
                    </div>
                </div>
                <div class="col-12 col-md-4">

                </div>
            </div>
        </div>
    </div>
    <section class="our-experience sp-two">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 pr-lg-4 mb-30">
                    <div class="sec-title">
                        <div class="big-title">@lang('favorit_corp.system')</div>
                        <h1>@lang('favorit_corp.20_years_on_the_market')</h1>
                    </div>
                    <div class="text-block-one dark">
                        <div class="text">
                            <p>@lang('favorit_corp.is_favorit_is_a_comprehensive_system')</p>
                        </div>
                        <div class="link-btn"><a href="#" class="theme btn-style-one">@lang('favorit_corp.start')</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 pl-lg-5">
                    <div class="image"><img src="front/images/resource/service-5.jpg" alt="image" class="w-100"></div>
                </div>
            </div>
        </div>
    </section>

    <section class="our-experience">
        <div class="tab-box">
            <div class="container">
                <ul class="tab-list text-center">
                    <li><a href="#tab-one" class="active-btn tab-btn">@lang('favorit_corp.specialist')</a></li>
                    <li><a href="#tab-two" class="tab-btn">@lang('favorit_corp.rukovoditeli')</a></li>
                </ul>
            </div>
            <div class="tab-content">
                <div class="tab-item active-tab" id="tab-one">
                    <section class="feature-case-section-two">
                        <div class="container">
                            <!-- feature case two -->
                            <div class="feature-case-two">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="video-image-box mb-30">
                                            <div class="image">
                                                <img src="front/images/favorit/fav-1.jpg" alt="">
                                                <a href="https://www.youtube.com/watch?v=ai9PxmmY3Mg"
                                                   class="overlay-link play-now" data-fancybox="gallery"
                                                   data-caption=""><span
                                                        class="flaticon-play-button"></span> </a>
                                                <span class="ripple"></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="inner-box">
                                            <div class="icon-box"><span class="icon flaticon-group"></span></div>
                                            <h4>@lang('favorit_corp.labor_responsibility_division')</h4>
                                            <div class="service-text">
                                                <p>@lang('favorit_corp.accountant_spends_a_lot_of_time_on_repetitive_work')</p>
                                                <p>@lang('favorit_corp.and_when_compiling_reports_errors_occur')</p>
                                                <p>@lang('favorit_corp.every_participant_in_the_process_independently_enters_information_using_favorit_is')</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- feature case two -->
                            <div class="feature-case-two">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="inner-box">
                                            <div class="icon-box"><span class="icon flaticon-hand-shake"></span></div>
                                            <h4>@lang('favorit_corp.unstructured_report_generation_in_a_few_clicks')</h4>
                                            <div class="service-text">
                                                <p>@lang('favorit_corp.unregulated_reports_intro')</p>
                                                <p>@lang('favorit_corp.unregulated_reports_solution')</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="video-image-box mb-30">
                                            <div class="image">
                                                <img src="front/images/favorit/fav-2.jpg" alt="">
                                                <a href="https://www.youtube.com/watch?v=QvfoqEfjZvw"
                                                   class="overlay-link play-now" data-fancybox="gallery"
                                                   data-caption=""><span
                                                        class="flaticon-play-button"></span> </a>
                                                <span class="ripple"></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- feature case two -->
                            <div class="feature-case-two">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="image"><img src="front/images/favorit/fav-3.jpg" alt=""></div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="inner-box">
                                            <div class="icon-box"><span class="icon flaticon-creative-idea"></span>
                                            </div>
                                            <h4>@lang('favorit_corp.instant_error_search')</h4>
                                            <div class="service-text">
                                                <p>@lang('favorit_corp.instant_error_description')</p>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
                <div class="tab-item" id="tab-two">
                    <section class="feature-case-section-two">
                        <div class="container">
                            <!-- feature case two -->
                            <div class="feature-case-two">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="inner-box">
                                            <div class="icon-box"><span class="icon flaticon-computer-2"></span></div>
                                            <h4>@lang('favorit_corp.plan_factor_analysis')</h4>
                                            <div class="service-text">
                                                <p>@lang('favorit_corp.plan_factor_analysis_description')</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="video-image-box mb-30">
                                            <div class="image">
                                                <img src="front/images/favorit/fav-4.jpg" alt="">
                                                <a href="https://www.youtube.com/watch?v=GGrWPXmQrpw"
                                                   class="overlay-link play-now" data-fancybox="gallery"
                                                   data-caption=""><span
                                                        class="flaticon-play-button"></span> </a>
                                                <span class="ripple"></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- feature case two -->
                            <div class="feature-case-two">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="video-image-box mb-30">
                                            <div class="image">
                                                <img src="front/images/favorit/fav-5.jpg" alt="">
                                                <a href="https://www.youtube.com/watch?v=C1xgsA9PaXE"
                                                   class="overlay-link play-now" data-fancybox="gallery"
                                                   data-caption=""><span
                                                        class="flaticon-play-button"></span> </a>
                                                <span class="ripple"></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="inner-box">
                                            <div class="icon-box"><span class="icon flaticon-businessman-1"></span>
                                            </div>
                                            <h4>@lang('favorit_corp.operational_business_analysis')</h4>
                                            <div class="service-text">
                                                <p>@lang('favorit_corp.operational_business_analysis_info')</p>
                                                <p>@lang('favorit_corp.operational_business_analysis_discipline')</p>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- feature case two -->
                            <div class="feature-case-two">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="inner-box">
                                            <div class="icon-box"><span class="icon flaticon-list"></span></div>
                                            <h4>@lang('favorit_corp.transparency_of_processes')</h4>
                                            <div class="service-text">
                                                <p>@lang('favorit_corp.transparency_of_processes_info')</p>
                                                <p>@lang('favorit_corp.transparency_of_processes_project_example')</p>
                                            </div>

                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="image"><img src="front/images/favorit/fav-6.jpg" alt=""></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
        </div>
    </section>

k
    <section class="our-service sp-two grey-bg corp-section-last">
        <div class="container">
            <div class="sec-title centered style-two deep">
                <h1>@lang('favorit_corp.features')</h1>
            </div>
            <div class="row">
                <div class="service-block-six col-lg-3 col-md-6">
                    <div class="inner-box hvr-bounce-to-bottom">
                        <div class="icon-box">
                            <span class="flaticon-agenda"></span>
                        </div>
                        <h4>@lang('favorit_corp.planning')</h4>
                    </div>
                </div>
                <div class="service-block-six col-lg-3 col-md-6">
                    <div class="inner-box hvr-bounce-to-bottom">
                        <div class="icon-box">
                            <span class="flaticon-budget"></span>
                        </div>
                        <h4>@lang('favorit_corp.cash_management')</h4>
                    </div>
                </div>
                <div class="service-block-six col-lg-3 col-md-6">
                    <div class="inner-box hvr-bounce-to-bottom">
                        <div class="icon-box">
                            <span class="flaticon-project"></span>
                        </div>
                        <h4>@lang('favorit_corp.general_ledger')</h4>
                    </div>
                </div>
                <div class="service-block-six col-lg-3 col-md-6">
                    <div class="inner-box hvr-bounce-to-bottom">
                        <div class="icon-box">
                            <span class="flaticon-process"></span>
                        </div>
                        <h4>@lang('favorit_corp.inventory_management')</h4>
                    </div>
                </div>
                <div class="service-block-six col-lg-3 col-md-6">
                    <div class="inner-box hvr-bounce-to-bottom">
                        <div class="icon-box">
                            <span class="flaticon-hand-shake"></span>
                        </div>
                        <h4>@lang('favorit_corp.work_and_services_accounting')</h4>
                    </div>
                </div>
                <div class="service-block-six col-lg-3 col-md-6">
                    <div class="inner-box hvr-bounce-to-bottom">
                        <div class="icon-box">
                            <span class="flaticon-profile"></span>
                        </div>
                        <h4>@lang('favorit_corp.personnel_accounting')</h4>
                    </div>
                </div>
                <div class="service-block-six col-lg-3 col-md-6">
                    <div class="inner-box hvr-bounce-to-bottom">
                        <div class="icon-box">
                            <span class="flaticon-presentation"></span>
                        </div>
                        <h4>@lang('favorit_corp.long_term_assets_accounting')</h4>
                    </div>
                </div>
                <div class="service-block-six col-lg-3 col-md-6">
                    <div class="inner-box hvr-bounce-to-bottom">
                        <div class="icon-box">
                            <span class="flaticon-journal"></span>
                        </div>
                        <h4>@lang('favorit_corp.summary_and_consolidation')</h4>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
