@extends('layouts.front')

@section('content')

    <div class="product-main" style="background-image: url(front/images/main-slider/image-19.jpg);">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-8">
                    <h1>@lang('favorit_education.erp_system_title')</h1>
                    <p>@lang('favorit_education.erp_system_description')</p>
                    <div class="link-btn">
                        <a href="#!" class="theme-btn btn-style-one">
                            <i class="fa fa-download mr-3"></i>@lang('favorit_education.download_button')
                        </a>
                        <a href="/contact" class="theme-btn btn-style-seven">
                            @lang('favorit_education.contact_button')
                        </a>
                    </div>
                </div>
                <div class="col-12 col-md-4">

                </div>
            </div>
        </div>
    </div>
<!--
    <section class="our-experience sp-two">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 pr-lg-4 mb-30">
                    <div class="sec-title">
                        <div class="big-title">Система</div>
                        <h1>20 лет <br>на рынке</h1>
                    </div>
                    <div class="text-block-one dark">
                        <div class="text">
                            <p>
                                ИС "Favorit" является комплексной системой и позволяет автоматизировать все участки
                                учета в
                                рамках единого информационного пространства, общей системы классификаторов и справочной
                                информации, которая не требует дополнительной синхронизации. Все это позволяет
                                осуществлять ведение всех учетных процессов в соответствии с положениями учетной
                                политики предприятия, налоговой учетной политики предприятия и оперативно получать
                                информацию высокой степени достоверности
                            </p>
                        </div>
                        <div class="link-btn"><a href="#" class="theme btn-style-one">Начать</a></div>
                    </div>
                </div>
                <div class="col-lg-6 pl-lg-5">
                    <div class="image"><img src="front/images/resource/service-5.jpg" alt="image" class="w-100"></div>
                </div>
            </div>
        </div>
    </section>

    -->

    <section class="our-service sp-two">
        <div class="container">
            <!-- sec tietle -->
            <div class="sec-title centered style-two deep">
                <div class="big-title">@lang('favorit_education.capabilities_title')</div>
                <h1>@lang('favorit_education.functional_capabilities_title')</h1>
                <p class="subtitle">@lang('favorit_education.functional_capabilities_subtitle')</p>
            </div>

            <div class="row">
                <div class="service-block-six col-lg-3 col-md-4">
                    <div class="inner-box hvr-bounce-to-bottom">
                        <div class="icon-box">
                            <span class="icon flaticon-money-1"></span>
                        </div>
                        <h4>@lang('favorit_education.budgeting_title')</h4>
                        <ul class="list-group">
                            <li class="list-group-item">@lang('favorit_education.budgeting_item1')</li>
                            <li class="list-group-item">@lang('favorit_education.budgeting_item2')</li>
                            <li class="list-group-item">@lang('favorit_education.budgeting_item3')</li>
                        </ul>
                    </div>
                </div>
                <div class="service-block-six col-lg-3 col-md-4">
                    <div class="inner-box hvr-bounce-to-bottom">
                        <div class="icon-box">
                            <span class="flaticon-strategy"></span>
                        </div>
                        <h4>@lang('favorit_education.accounting_title')</h4>
                        <ul class="list-group">
                            <li class="list-group-item">@lang('favorit_education.accounting_item1')</li>
                            <li class="list-group-item">@lang('favorit_education.accounting_item2')</li>
                            <li class="list-group-item">@lang('favorit_education.accounting_item3')</li>
                            <li class="list-group-item">@lang('favorit_education.accounting_item4')</li>
                        </ul>
                    </div>
                </div>
                <div class="service-block-six col-lg-3 col-md-4">
                    <div class="inner-box hvr-bounce-to-bottom">
                        <div class="icon-box">
                            <span class="flaticon-laptop"></span>
                        </div>
                        <h4>@lang('favorit_education.management_title')</h4>
                        <ul class="list-group">
                            <li class="list-group-item">@lang('favorit_education.management_item1')</li>
                            <li class="list-group-item">@lang('favorit_education.management_item2')</li>
                            <li class="list-group-item">@lang('favorit_education.management_item3')</li>
                            <li class="list-group-item">@lang('favorit_education.management_item4')</li>
                        </ul>
                    </div>
                </div>
                <div class="service-block-six col-lg-3 col-md-4">
                    <div class="inner-box hvr-bounce-to-bottom">
                        <div class="icon-box">
                            <span class="flaticon-project"></span>
                        </div>
                        <h4>@lang('favorit_education.reporting_title')</h4>
                        <ul class="list-group">
                            <li class="list-group-item">@lang('favorit_education.reporting_item1')</li>
                            <li class="list-group-item">@lang('favorit_education.reporting_item2')</li>
                            <li class="list-group-item">@lang('favorit_education.reporting_item3')</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="parallax-section sp-two favorit-corruption-section" style="background-image:url(front/images/main-slider/image-17.jpg);">
        <div class="container">
            <div class="sec-title centered light">
                <h1>@lang('favorit_education.advantages_title')</h1>
                <p class="subtitle mt-3">@lang('favorit_education.advantages_subtitle')</p>
            </div>


            <div class="owl-carousel-favorit-corruption owl-carousel owl-theme">
                <div class="item">
                    <div class="row align-items-md-center">
                        <div class="col-12 col-lg-7">
                            <div class="favorit-corruption-card">
                                <h6>@lang('favorit_education.role_functionality')</h6>
                                <div class="text">@lang('favorit_education.role_functionality_description')</div>
                            </div>
                        </div>
                        <div class="col-12 col-lg-5">
                            <img src="front/images/favorit/image32.png" class="fvr-cor-img" alt="image">
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="row align-items-md-center">
                        <div class="col-12 col-lg-7">
                            <div class="favorit-corruption-card">
                                <h6>@lang('favorit_education.transparency_accounting')</h6>
                                <div class="text">@lang('favorit_education.transparency_accounting_description')</div>
                            </div>
                        </div>
                        <div class="col-12 col-lg-5">
                            <img src="front/images/favorit/image38.png" class="fvr-cor-img" alt="image">
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="row align-items-md-center">
                        <div class="col-12 col-lg-7">
                            <div class="favorit-corruption-card">
                                <h6>@lang('favorit_education.teacher_certificates_check')</h6>
                                <div class="text">@lang('favorit_education.teacher_certificates_check_description')</div>
                            </div>
                        </div>
                        <div class="col-12 col-lg-5">
                            <img src="front/images/favorit/image36.png" class="fvr-cor-img" alt="image">
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="row align-items-md-center">
                        <div class="col-12 col-lg-7">
                            <div class="favorit-corruption-card">
                                <h6>@lang('favorit_education.automated_budget_requests')</h6>
                                <div class="text">@lang('favorit_education.automated_budget_requests_description')</div>
                            </div>
                        </div>
                        <div class="col-12 col-lg-5">
                            <img src="front/images/favorit/image31.png" class="fvr-cor-img" alt="image">
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="row align-items-md-center">
                        <div class="col-12 col-lg-7">
                            <div class="favorit-corruption-card">
                                <h6>@lang('favorit_education.salary_calculation_control')</h6>
                                <div class="text">@lang('favorit_education.salary_calculation_control_description')</div>
                            </div>
                        </div>
                        <div class="col-12 col-lg-5">
                            <img src="front/images/favorit/image34.png" class="fvr-cor-img" alt="image">
                        </div>
                    </div>
                </div>

                <div class="item">
                    <div class="row align-items-md-center">
                        <div class="col-12 col-lg-7">
                            <div class="favorit-corruption-card">
                                <h6>@lang('favorit_education.iin_name_verification')</h6>
                                <div class="text">@lang('favorit_education.iin_name_verification_description')</div>
                            </div>
                        </div>
                        <div class="col-12 col-lg-5">
                            <img src="front/images/favorit/image37.png" class="fvr-cor-img" alt="image">
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="row align-items-md-center">
                        <div class="col-12 col-lg-7">
                            <div class="favorit-corruption-card">
                                <h6>@lang('favorit_education.advance_payment_control')</h6>
                                <div class="text">@lang('favorit_education.advance_payment_control_description')</div>
                            </div>
                        </div>
                        <div class="col-12 col-lg-5">
                            <img src="front/images/favorit/image35.png" class="fvr-cor-img" alt="image">
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="row align-items-md-center">
                        <div class="col-12 col-lg-7">
                            <div class="favorit-corruption-card">
                                <h6>@lang('favorit_education.integration_state_procurement_portal')</h6>
                                <div class="text">@lang('favorit_education.integration_state_procurement_portal_description')</div>
                            </div>
                        </div>
                        <div class="col-12 col-lg-5">
                            <img src="front/images/favorit/image33.png" class="fvr-cor-img" alt="image">
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="row align-items-md-center">
                        <div class="col-12 col-lg-7">
                            <div class="favorit-corruption-card">
                                <h6>@lang('favorit_education.treasury_control_5_15')</h6>
                                <div class="text">@lang('favorit_education.treasury_control_5_15_description')</div>
                            </div>
                        </div>
                        <div class="col-12 col-lg-5">
                            <img src="front/images/favorit/image39.png" class="fvr-cor-img" alt="image">
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="row align-items-md-center">
                        <div class="col-12 col-lg-7">
                            <div class="favorit-corruption-card">
                                <h6>@lang('favorit_education.salary_list_control_5_15_a')</h6>
                                <div class="text">@lang('favorit_education.salary_list_control_5_15_a_description')</div>
                            </div>
                        </div>
                        <div class="col-12 col-lg-5">
                            <img src="front/images/favorit/image40.png" class="fvr-cor-img" alt="image">
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="row align-items-md-center">
                        <div class="col-12 col-lg-7">
                            <div class="favorit-corruption-card">
                                <h6>@lang('favorit_education.fund_accounting_control')</h6>
                                <div class="text">@lang('favorit_education.fund_accounting_control_description')</div>
                            </div>
                        </div>
                        <div class="col-12 col-lg-5">
                            <img src="front/images/favorit/image41.png" class="fvr-cor-img" alt="image">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="why-chooseus-two sp-one grey-bg">
        <div class="container">
            <div class="sec-title centered style-two deep">
                <div class="big-title">Favorit</div>
                <h1>@lang('favorit_education.key_features')</h1>
            </div>

            <div class="row">
                <div class="col-lg-6">
                    <div class="outer-box">
                        <div class="service-block-five special1">
                            <div class="inner-box">
                                <div class="icon-box"><span class="icon fa fa-database"></span></div>
                                <h4>@lang('favorit_education.single_database')</h4>
                            </div>
                        </div>
                        <div class="service-block-five special1">
                            <div class="inner-box">
                                <div class="icon-box"><span class="icon fa fa-users"></span></div>
                                <h4>@lang('favorit_education.unlimited_users')</h4>
                            </div>
                        </div>
                        <div class="service-block-five special1">
                            <div class="inner-box">
                                <div class="icon-box"><span class="icon fa fa-fighter-jet"></span></div>
                                <h4>@lang('favorit_education.optimization')</h4>
                                <div class="service-text">@lang('favorit_education.optimization_description')</div>
                            </div>
                        </div>
                        <div class="service-block-five special1">
                            <div class="inner-box">
                                <div class="icon-box"><span class="icon fa fa-cloud"></span></div>
                                <h4>@lang('favorit_education.single_cloud')</h4>
                                <div class="service-text">@lang('favorit_education.cloud_description')</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="outer-box">
                        <div class="service-block-five special1">
                            <div class="inner-box">
                                <div class="icon-box"><span class="icon fa fa-money"></span></div>
                                <h4>@lang('favorit_education.unified_tariff')</h4>
                            </div>
                        </div>
                        <div class="service-block-five special1">
                            <div class="inner-box">
                                <div class="icon-box"><span class="icon fa fa-laptop"></span></div>
                                <h4>@lang('favorit_education.functionality')</h4>
                                <div class="service-text">@lang('favorit_education.functionality_description')</div>
                            </div>
                        </div>
                        <div class="service-block-five special1">
                            <div class="inner-box">
                                <div class="icon-box"><span class="icon fa fa-file-archive-o"></span></div>
                                <h4>@lang('favorit_education.accounting_process')</h4>
                                <div class="service-text">@lang('favorit_education.accounting_process_description')</div>
                            </div>
                        </div>
                        <div class="service-block-five special1">
                            <div class="inner-box">
                                <div class="icon-box"><span class="icon fa fa-cube"></span></div>
                                <h4>@lang('favorit_education.domestic_solution')</h4>
                                <div class="service-text">@lang('favorit_education.domestic_solution_description')</div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

@endsection
