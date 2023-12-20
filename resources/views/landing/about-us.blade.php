@extends('landing.app')

@section('css')
    <style>
        .top-banner{
            background-image: url('{{__('landing/images/Image@2x.png')}}');
            height: 840px;
        }

        @media (max-width: 991px) {
            .top-banner{
                background-image: url('{{__('landing/images/mobile_03_banner.png')}}');
                height: 640px;
            }
        }
    </style>
@endsection
@section('content')
    <!-- start banner section -->
    <section class="d-flex flex-column justify-content-end justify-content-lg-center cover-background top-banner">
        <div class="container" style="max-width: 1400px ">
            <div class="row align-items-center justify-content-center">
                <div class="col-9 col-lg-5 col-sm-5 text-center xs-margin-30px-bottom">
{{--                    <img src="images/single-project-page-03-img01.jpg" alt=""/>--}}
                </div>
                <div class="col-10 col-lg-7 col-sm-7">
                    <div class="position-relative ">
                        <span
                            class="text-white text-extra-large alt-font line-height-20px z-index-9 position-relative d-inline-block letter-spacing-4px">{{ __('landing.introducing_us') }}</span>
                    </div>
                    <div class="position-relative ">
                        <span
                            class="text-white title-large alt-font font-weight-300 z-index-9 position-relative d-inline-block letter-spacing-4px">{{ __('landing.all_about_erya') }}</span>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end banner section -->
    <section id="about" class="bg-light-yellow">
        <div class="container">
            <div class="col-12 col-xl-12 col-lg-12 col-sm-12 text-center ">
                    <span
                        class="text-large alt-font text-uppercase text-extra-medium-gray font-weight-300 d-block margin-15px-bottom letter-spacing-3px">{{ __('landing.erya_at_a_glance') }}</span>
                <span
                    class="title-small alt-font dark-gold font-weight-300 d-block margin-50px-bottom letter-spacing-3px">{{ __('landing.about_global_care_') }}</span>
            </div>
            <div class="row">
                <div class="col-12 col-lg-4 pr-lg-0 d-flex md-margin-30px-bottom shadow" style="padding-left: 0px">
                    <div class="w-100 md-h-700px sm-h-550px xs-h-450px cover-background" style="background-image:url('{{asset('landing/images/IMG_5675@2x.png')}}');"></div>
                </div>
                <div class="col-12 col-lg-4 col-md-6 pl-lg-0 d-flex sm-margin-30px-bottom shadow" style="padding-right: 0px">
                    <div class="justify-content-center w-100 d-flex flex-column bg-dark-gold padding-3-half-rem-lr lg-padding-3-rem-lr md-padding-4-rem-all">
                        <span class="text-extra-large alt-font  text-white margin-20px-bottom d-block">{{ __('landing.who_is') }} <br>{{ __('landing.erya') }}</span>
                        <div class="my-5" style="height:7px;width:44px;background-color: #FBF6EB;"></div>
                        <p class="text-white alt-font text-extra-medium">{{ __('landing.erya_is_a_new_generation_brand_of_women’s_underwearfounded_in_2021.') }}<br><br>{{ __('landing.we_carry_health_products_and_always_strive_to_serve_our_customers_in_the_best_way_possible.') }}</p>
                    </div>
                </div>
                <div class="col-12 col-lg-4 col-md-6">
                    <div class="shadow">
                        <img src="{{asset('landing/images/IMG_5587@2x.png')}}" alt="" data-no-retina="">
                        <div class="bg-white padding-3-half-rem-lr padding-3-rem-tb lg-padding-2-rem-all md-padding-2-half-rem-all sm-padding-4-rem-all last-paragraph-no-margin">
                            <span class="text-extra-medium alt-font dark-gold margin-40px-bottom d-block">{{ __('landing.erya,_advocating_beauty_&confidence') }}</span>
                            <p class="text-extra-medium alt-font text-extra-dark-gray">{{ __('landing.we_believe_that_true_beauty_always_starts_from_our_inner_self.') }}</p>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>

    <!-- start section -->
    <section class="bg-white overlap-height wow animate__fadeIn">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-xl-12 col-lg-7 col-sm-8 text-center ">
                    <span
                        class="title-small alt-font dark-gold font-weight-300 d-block margin-50px-bottom letter-spacing-3px">{{ __('landing.erya’s_vision') }}</span>
                    <h5 class="text-extra-large2 alt-font text-extra-medium-gray font-weight-300  mb-0"
                        style="line-height: 42px">{{ __('landing.erya_aims_to_cater_to_all_asian_women_around_the_world_with_the_best') }}<br>{{ __('landing.seamless_lingerie_and_health_products.') }}</h5>
                </div>
            </div>
        </div>
    </section>
    <!-- end section -->

    <!-- start section -->
    <section class="overlap-height wow animate__fadeIn" style="background-image: url('{{asset('landing/images/about03.png')}}');background-repeat: no-repeat;
        background-size: cover;">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-xl-12 col-lg-7 col-sm-8 text-center ">
                    <span
                        class="title-small alt-font text-white font-weight-300 d-block margin-10px-bottom letter-spacing-4px">{{ __('landing.true_beauty_starts_from_your_inner_self.') }}</span>
                    <h5 class="text-large alt-font text-white font-weight-300  mb-0 letter-spacing-3px"
                        style="line-height: 42px">{{ __('landing.shaping_a_healthy_body_and_empower_self-confidence.') }}</h5>
                </div>
            </div>
        </div>
    </section>
    <!-- end section -->

    <!-- start section -->
    <section class="bg-dark-gold overlap-height wow animate__fadeIn">
        <div class="pt-0 padding-five-lr xs-no-padding-lr">
            <div class="container-fluid">
                <div class="row justify-content-center">
                    <div class="col-12 col-xl-12 col-lg-7 col-sm-8 text-center ">
                    <span
                        class="title-small alt-font text-white font-weight-300 d-block margin-50px-bottom letter-spacing-4px">{{ __('landing.our_business') }}</span>
                        <div class="col px-md-0">
                            <ul class="portfolio-overlay portfolio-wrapper grid grid-4col xl-grid-4col lg-grid-3col md-grid-2col sm-grid-2col xs-grid-1col gutter-extra-large text-center"
                                style="position: relative; height: 524.6px;">
                                <li class="grid-sizer"></li>
                                <!-- start lightbox gallery item -->
                                <li class="grid-item wow animate__fadeInUp"
                                    style="visibility: visible; position: absolute; left: 0%; top: 0px; animation-name: fadeInUp;">
                                    <div class="portfolio-box">
                                        <img class="margin-50px-bottom" src="{{ asset('landing/images/team.svg') }}" style="width: 60px;height: 60px"/>
                                        <span
                                            class="title-extra-small alt-font text-white font-weight-400 d-block margin-50px-bottom letter-spacing-3px">{{ __('landing.elite_team') }}</span>
                                        <span
                                            class="text-extra-medium alt-font text-white font-weight-400 d-block margin-15px-bottom ">{{ __('landing.we_have_formed_elite_team_that_can_complement_each_other_and_scale_our_business_to_further_horizons.') }}</span>
                                    </div>

                                </li>
                                <!-- end lightbox gallery item -->
                                <!-- start lightbox gallery item -->
                                <li class="grid-item wow animate__fadeInUp" data-wow-delay="0.2s"
                                    style="visibility: visible; position: absolute; left: 25%; top: 0px; animation-delay: 0.2s; animation-name: fadeInUp;">
                                    <div class="portfolio-box">
                                        <img class="margin-50px-bottom" src="{{ asset('landing/images/Page-1.svg') }}" style="width: 60px;height: 60px"/>
                                        <span
                                            class="title-extra-small alt-font text-white font-weight-400 d-block margin-50px-bottom letter-spacing-3px">{{ __('landing.great_products') }}</span>
                                        <span
                                            class="text-extra-medium alt-font text-white font-weight-400 d-block margin-15px-bottom">{{ __('landing.we_have_put_in_all_our_effort_to_produce_and_craft_the_best_products_that_best_fit_our_customers.') }}</span>
                                    </div>
                                </li>
                                <!-- end lightbox gallery item -->
                                <!-- start lightbox gallery item -->
                                <li class="grid-item wow animate__fadeInUp" data-wow-delay="0.4s"
                                    style="visibility: visible; position: absolute; left: 50.0001%; top: 0px; animation-delay: 0.4s; animation-name: fadeInUp;">
                                    <div class="portfolio-box">
                                        <img class="margin-50px-bottom" src="{{ asset('landing/images/support.svg') }}" style="width: 60px;height: 60px"/>
                                        <span
                                            class="title-extra-small alt-font text-white font-weight-400 d-block margin-50px-bottom letter-spacing-3px">{{ __('landing.excellent_service') }}</span>
                                        <span
                                            class="text-extra-medium alt-font text-white font-weight-400 d-block margin-15px-bottom">{{ __('landing.we_have_put_together_a_dedicated_team_to_service_our_customers_because_we_know_that_our_customers_deserve_only_the_best.') }}</span>
                                    </div>
                                </li>
                                <!-- end lightbox gallery item -->
                                <!-- start lightbox gallery item -->
                                <li class="grid-item wow animate__fadeInUp" data-wow-delay="0.6s"
                                    style="visibility: visible; position: absolute; left: 75.0001%; top: 0px; animation-delay: 0.6s; animation-name: fadeInUp;">
                                    <div class="portfolio-box">
                                        <img class="margin-50px-bottom" src="{{ asset('landing/images/diamond.svg') }}" style="width: 60px;height: 60px"/>
                                        <span
                                            class="title-extra-small alt-font text-white font-weight-400 d-block margin-50px-bottom letter-spacing-3px">{{ __('landing.branding') }}</span>
                                        <span
                                            class="text-extra-medium alt-font text-white font-weight-400 d-block margin-15px-bottom">{{ __('landing.a_brand_is_our_promise_to_customers._we_strive_to_polish_our_brand_to_smoothen_the_trust_of_customers_in_us_and_motivate_our_team_to_close_deals.') }}</span>
                                    </div>
                                </li>
                                <!-- end lightbox gallery item -->
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>
    <!-- end section -->

    <section class="big-section bg-white">
        <div class="container-fluid">
            <div class="row align-items-center">
                <div class="col-12 col-xl-5 col-lg-6 offset-lg-1 col-md-7">
                    <span
                        class="text-large alt-font text-uppercase text-extra-medium-gray font-weight-300 d-block margin-15px-bottom letter-spacing-3px">{{ __('landing.our_goal_and_aim') }}</span>
                    <span
                        class="title-small alt-font dark-gold font-weight-300 d-block margin-50px-bottom letter-spacing-3px">{{ __('landing.erya’s_mission') }}</span>

                    <p class="text-extra-large2 alt-font font-weight-300 margin-4-half-rem-bottom"
                       style="line-height: 40px">{{ __('landing.our_mission_is_to_bring_out_the_best_of_our_customers,_their_natural_beauty,_starting_from_their_inner_self._we_wish_to_spread_the_benefits_of_seamless_lingerie_and_health_products_that_maintain_self-confidence_in_one’s_body_shape.') }} <br><br>{{ __('landing.we_advocate_wellness_of_both_body_and_mind_as_we_believe_that_harmony_of_both_physical_and_mental_health_is_the_key_to_a_better_lifestyle.') }}</p>

                </div>
                <div class="col-12 col-xl-6 col-md-5 sm-margin-30px-bottom wow animate__fadeInRight">
                    <img
                        src="{{asset('landing/images/1L4A0526_pp.png')}}" alt="" style="width: 100%"/></div>
            </div>
        </div>
    </section>
    <!-- end section -->

    <!-- start section -->
    <section class="position-relative" style="padding:0px;height: 600px">
        <div class="section-bg-image-blur"></div>
        <div class="container absolute-middle-center">
            <div class="row justify-content-center">
                <div class="col-12 col-xl-9 col-lg-8 col-sm-8 text-center ">
                    <span
                        class="title-small alt-font dark-gold font-weight-300 d-block margin-50px-bottom letter-spacing-3px">{{ __('landing.join_us_today') }}</span>
                    <h5 class="text-extra-large2 alt-font text-extra-medium-gray font-weight-300 letter-spacing-minus-1px margin-50px-bottom"
                        style="line-height: 42px">{{ __('landing.join_us_and_together_we_can_spread_the_greatness_of_health_and_wellness. ') }}<br>{{ __('landing.let_us_create_a_new_landscape_and_blue_ocean_in_this_market_together.') }}</h5>
                    <button
                        class="text-medium alt-font font-weight-300 btn btn-shadow bg-dark-gold text-uppercase text-white letter-spacing-2px padding-1-half-rem-lr">
                        {{ __('landing.join_now') }}
                    </button>
                </div>
            </div>
        </div>
    </section>
    <!-- end section -->

@endsection
