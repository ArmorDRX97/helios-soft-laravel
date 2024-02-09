@extends('layouts.front')

@section('content')

    <div class="product-main" style="background-image: url(front/images/services/s-f-bg.jpg);">
        <div class="container">
            <div class="text-center">
                <h1>@lang('favorit_support.technical_support_for_favorit_system')</h1>
                <p>@lang('favorit_support.professional_training_quality_support_and_high_technical_support')</p>
                <div class="link-btn">
                    <a href="/contact" target="_blank" class="theme-btn btn-style-seven">@lang('layout.contact_us') <i
                            class="fa fa-arrow-right ml-10"></i></a>
                </div>
            </div>
        </div>
    </div>

    <section class="our-experience-three sp-two grey-bg">
        <div class="container">
            <div class="sec-title centered deep">
                <h1>@lang('favorit_support.tech_support')</h1>
                <p class="mt-2">@lang('favorit_support.improvement_message')</p>
            </div>
            <div class="row">
             <div class="col-12 col-xl-10 offset-xl-1">
                 <div class="service-favorit-block">
                     <div class="sv-img">
                         <img src="front/images/services/sv1.jpg" alt="image">
                     </div>
                     <div class="sv-content">
                         <h4>@lang('favorit_support.effective_feedback')</h4>
                         <div class="text">
                             @lang('favorit_support.feedback_description')
                         </div>
                     </div>
                 </div>
                 <div class="service-favorit-block text-right m-flex-reverse">
                     <div class="sv-content">
                         <h4>@lang('favorit_support.call_monitoring')</h4>
                         <div class="text">
                             @lang('favorit_support.call_analysis_description')
                         </div>
                     </div>
                     <div class="sv-img">
                         <img src="front/images/services/sv2.jpg" alt="image">
                     </div>
                 </div>
                 <div class="service-favorit-block">
                     <div class="sv-img">
                         <img src="front/images/services/sv3.jpg" alt="image">
                     </div>
                     <div class="sv-content">
                         <h4>@lang('favorit_support.call_evaluation')</h4>
                         <div class="text">
                             @lang('favorit_support.call_evaluation_description')
                         </div>
                     </div>
                 </div>
                 <div class="service-favorit-block text-right m-flex-reverse">
                     <div class="sv-content">
                         <h4>@lang('favorit_support.continuous_improvement')</h4>
                         <div class="text">
                             @lang('favorit_support.improvement_process_description')
                         </div>
                     </div>
                     <div class="sv-img">
                         <img src="front/images/services/sv4.jpg" alt="image">
                     </div>
                 </div>
                 <div class="service-favorit-block">
                     <div class="sv-img">
                         <img src="front/images/services/sv5.jpg" alt="image">
                     </div>
                     <div class="sv-content">
                         <h4>@lang('favorit_support.regional_distribution')</h4>
                         <div class="text">
                             @lang('favorit_support.regional_distribution_description')
                         </div>
                     </div>
                 </div>
             </div>
            </div>
        </div>
    </section>

    <section class="feature-case-section-two sp-seven">
        <div class="container">
            <!-- feature case two -->
            <div class="feature-case-two">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="image"><img src="front/images/services/s-f-1.jpg" alt=""></div>
                    </div>
                    <div class="col-lg-6">
                        <div class="inner-box">
                            <div class="icon-box"><span class="icon flaticon-laptop"></span></div>
                            <h4>@lang('favorit_support.customized_training_programs')</h4>
                            <div class="service-text">
                                <p>@lang('favorit_support.training_programs_description')</p>
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
                            <div class="icon-box"><span class="icon flaticon-man"></span></div>
                            <h4>@lang('favorit_support.exclusive_personal_support')</h4>
                            <div class="service-text">
                                <p>@lang('favorit_support.personal_support_description')</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="image"><img src="front/images/services/s-f-2.jpg" alt=""></div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="our-service sp-two grey-bg">
        <div class="container">
            <div class="sec-title centered deep">
                <h1>@lang('favorit_support.your_success_in_our_hands')</h1>
            </div>
            <div class="text-center mb-80">
                <div class="text mb-40">
                    @lang('favorit_support.success_description')
                </div>
                <div class="link-btn"><a href="/contact" class="theme btn-style-one">@lang('layout.contact_us')</a></div>
            </div>
        </div>
    </section>

@endsection
