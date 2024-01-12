@extends('layouts.front')

@section('content')

    <div class="product-main service-cloud" style="background-image: url(front/images/services/s-c-bg.jpg);">
        <div class="container">
            <h1>@lang('favorit_cloud.cloud_solutions')</h1>
            <p>@lang('favorit_cloud.cloud_solutions_description')</p>
            <div class="link-btn">
                <a href="/contact" class="theme-btn btn-style-seven">@lang('favorit_cloud.contact_us')</a>
            </div>
        </div>
    </div>

    <section class="our-service sp-two grey-bg service-cloud-our">
        <div class="container">
            <!-- sec tietle -->
            <div class="sec-title centered style-two deep">
                <div class="big-title">@lang('favorit_cloud.what_it_can_do')</div>
                <h1>@lang('favorit_cloud.capabilities')</h1>
            </div>
            <div class="row">
                <div class="service-block-six col-lg-4 col-md-6">
                    <div class="inner-box hvr-bounce-to-bottom">
                        <div class="icon-box">
                            <span class="flaticon-transport"></span>
                        </div>
                        <h4>@lang('favorit_cloud.fast_startup')</h4>
                        <div class="text">@lang('favorit_cloud.start_work_instantly')</div>
                    </div>
                    <div class="inner-box hvr-bounce-to-bottom mt-4">
                        <div class="icon-box">
                            <span class="fa fa-shield"></span>
                        </div>
                        <h4>@lang('favorit_cloud.secure_data_storage')</h4>
                        <div class="text">@lang('favorit_cloud.regular_data_backups')</div>
                    </div>
                </div>
                <div class="service-block-six col-lg-4 col-md-6">
                    <div class="inner-box hvr-bounce-to-bottom">
                        <div class="icon-box">
                            <span class="flaticon-clock"></span>
                        </div>
                        <h4>@lang('favorit_cloud.data_access_24_7')</h4>
                        <div class="text">@lang('favorit_cloud.access_data_anytime')</div>
                    </div>
                    <div class="inner-box hvr-bounce-to-bottom mt-4">
                        <div class="icon-box">
                            <span class="fa fa-key"></span>
                        </div>
                        <h4>@lang('favorit_cloud.secure_cloud_storage')</h4>
                        <div class="text">@lang('favorit_cloud.guaranteed_data_security')</div>
                    </div>
                </div>
                <div class="service-block-six col-lg-4 col-md-6">
                    <div class="inner-box hvr-bounce-to-bottom">
                        <div class="icon-box">
                            <span class="flaticon-telemarketer"></span>
                        </div>
                        <h4>@lang('favorit_cloud.professional_support')</h4>
                        <div class="text">@lang('favorit_cloud.experienced_technical_support')</div>
                    </div>
                    <div class="inner-box hvr-bounce-to-bottom mt-4">
                        <div class="icon-box">
                            <span class="fa fa-refresh"></span>
                        </div>
                        <h4>@lang('favorit_cloud.automatic_updates')</h4>
                        <div class="text">@lang('favorit_cloud.automatic_system_updates')</div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="our-experience sp-two">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 pr-lg-4 mb-30">
                    <div class="sec-title">
                        <div class="big-title">@lang('favorit_cloud.stability')</div>
                        <h1>@lang('favorit_cloud.quality_assurance')</h1>
                    </div>
                    <div class="text-block-one dark">
                        <div class="text">
                            <p>@lang('favorit_cloud.cloud_service_provides')</p>
                            <p>@lang('favorit_cloud.our_goal_is_to_provide')</p>
                        </div>
                        <div class="link-btn"><a href="/contact" class="theme btn-style-one">@lang('favorit_cloud.contact_us')</a></div>
                    </div>
                </div>
                <div class="col-lg-6 pl-lg-5">
                    <!-- graph image -->
                    <div class="image"><img src="front/images/services/s-c-last.png" alt=""></div>
                </div>
            </div>
        </div>
    </section>


@endsection
