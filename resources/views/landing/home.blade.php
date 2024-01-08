@extends('landing.app')

@section('css')
<style>
    .top-banner{
        background-image: url('{{__('landing/images/Group 1@2x.png')}}');
        height: 840px;
        background-position: left center;
        background-size:cover;
        position:relative
    }
    .top-banner::after {
        content: "";
        position: absolute;
        width: 100%;
        height: 100%;
        background: rgb(0, 0, 0);
        background: linear-gradient(
            180deg,
            rgba(0, 0, 0, 0.3255427170868347) 0%,
            rgba(0, 0, 0, 0.75) 100%
        );
        top: 0;
        left: 0;
        z-index: 0;
    }

    @media (max-width: 991px) {
        .top-banner{
            height: 740px;
        }

    }
</style>
@endsection
@section('content')
    <!-- start banner section -->
    <section class="d-flex flex-column justify-content-end justify-content-lg-center top-banner">
        <div class="container" style="max-width: 1400px ">
            <div class="row align-items-center justify-content-center">
                <div class="col-9 col-lg-5 col-sm-5 text-center xs-margin-30px-bottom">
{{--                    <img src="images/single-project-page-03-img01.jpg" alt=""/>--}}
                </div>
                <div class="col-10 col-lg-7 col-sm-7">
                    <div class="position-relative ">
                        <span
                            class=" text-extra-large alt-font line-height-20px z-index-9 position-relative d-inline-block letter-spacing-4px text-white">{{ __('landing.self_love_and_confidence') }}</span>
                    </div>
                    <div class="position-relative ">
                        <span
                            class=" title-large alt-font font-weight-300 z-index-9 position-relative d-inline-block letter-spacing-4px text-white">{{ __('landing.starts_from') }}<br>{{ __('landing.the_innerself') }}</span>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end banner section -->
    <!-- start section -->
    <section class=" overlap-height wow animate__fadeIn">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-xl-9 col-lg-7 col-sm-8 text-center ">
                    <span
                        class="text-large alt-font text-uppercase text-extra-medium-gray font-weight-300 d-block margin-15px-bottom letter-spacing-3px">{{ __('landing.globalcare_at_a_glance') }}</span>
                    <span
                        class="title-small alt-font dark-gold font-weight-300 d-block margin-50px-bottom letter-spacing-3px">{{ __('landing.about_global_care_') }}</span>
                    <h5 class="text-extra-large2 alt-font text-extra-medium-gray font-weight-300 letter-spacing-minus-1px mb-0"
                        style="line-height: 42px">{{ __('landing.about_global_care_description') }}</h5>
                </div>
            </div>
        </div>
    </section>
    <!-- end section -->
    <!-- start section -->
    <section class="bg-light-yellow overlap-height wow animate__fadeIn" style="background: #fff5ef;">
        <div class="container margin-50px-bottom">
            <div class="row justify-content-center">
                <div class="col-12 col-xl-8 col-lg-7 col-sm-8 text-center ">
                    <span
                        class="text-large alt-font text-uppercase text-extra-medium-gray font-weight-300 d-block margin-15px-bottom letter-spacing-3px">{{ __('landing.our_essence') }}</span>
                    <span
                        class="title-small alt-font dark-gold font-weight-300 d-block margin-50px-bottom letter-spacing-3px">{{ __('landing.globalcare’s_core_value') }}</span>
                </div>
            </div>
        </div>
        <div class="padding-twelve-lr xl-padding-five-lr lg-padding-two-lr xs-no-padding-lr">
            <div class="container-fluid">
                <div class="row">
                    <div class="col px-md-0">
                        <ul class="portfolio-overlay portfolio-wrapper grid grid-4col xl-grid-4col lg-grid-3col md-grid-2col sm-grid-2col xs-grid-1col gutter-extra-large text-center"
                            style="position: relative; height: 524.6px;">
                            <li class="grid-sizer"></li>
                            <!-- start lightbox gallery item -->
                            <li class="grid-item wow animate__fadeInUp"
                                style="visibility: visible; position: absolute; left: 0%; top: 0px; animation-name: fadeInUp;">
                                <div class="portfolio-box">
                                    <img class="margin-50px-bottom" src="{{ asset('landing/images/Beauty Hand Cream.svg') }}" style="width: 60px;height: 60px"/>
                                    <span
                                        class="title-extra-small alt-font text-extra-medium-gray font-weight-400 d-block margin-50px-bottom letter-spacing-3px">{{ __('landing.enthusiasm') }}</span>
                                    <span
                                        class="text-extra-medium alt-font text-extra-medium-gray font-weight-400 d-block margin-15px-bottom ">{{ __('landing.we_are_always_enthusiastic_and_passionate_about_crafting _our_products,_hoping_to_bring_greater_comfort_and_health_to_our_customers.') }}</span>
                                </div>

                            </li>
                            <!-- end lightbox gallery item -->
                            <!-- start lightbox gallery item -->
                            <li class="grid-item wow animate__fadeInUp" data-wow-delay="0.2s"
                                style="visibility: visible; position: absolute; left: 25%; top: 0px; animation-delay: 0.2s; animation-name: fadeInUp;">
                                <div class="portfolio-box">
                                    <img class="margin-50px-bottom" src="{{ asset('landing/images/Beauty Relax Spa Candle Stones.svg') }}" style="width: 60px;height: 60px"/>
                                    <span
                                        class="title-extra-small alt-font text-extra-medium-gray font-weight-400 d-block margin-50px-bottom letter-spacing-3px">{{ __('landing.devotion') }}</span>
                                    <span
                                        class="text-extra-medium alt-font text-extra-medium-gray font-weight-400 d-block margin-15px-bottom">{{ __('landing.we_are_devoted_and_dedicated_to_our_brand,_ensuring_that_it_holds_both_its_integrity_and_our_promise_to_our_customers.') }}</span>
                                </div>
                            </li>
                            <!-- end lightbox gallery item -->
                            <!-- start lightbox gallery item -->
                            <li class="grid-item wow animate__fadeInUp" data-wow-delay="0.4s"
                                style="visibility: visible; position: absolute; left: 50.0001%; top: 0px; animation-delay: 0.4s; animation-name: fadeInUp;">
                                <div class="portfolio-box">
                                    <img class="margin-50px-bottom" src="{{ asset('landing/images/Spa Relax Massage.svg') }}" style="width: 60px;height: 60px"/>
                                    <span
                                        class="title-extra-small alt-font text-extra-medium-gray font-weight-400 d-block margin-50px-bottom letter-spacing-3px">{{ __('landing.curated_products') }}</span>
                                    <span
                                        class="text-extra-medium alt-font text-extra-medium-gray font-weight-400 d-block margin-15px-bottom">{{ __('landing.we_are_proud_of_our_products_and_curate_only_the_finest_for_our_customers_as_we_believe_they_deserve_only_the_best_from_us.') }}</span>
                                </div>
                            </li>
                            <!-- end lightbox gallery item -->
                            <!-- start lightbox gallery item -->
                            <li class="grid-item wow animate__fadeInUp" data-wow-delay="0.6s"
                                style="visibility: visible; position: absolute; left: 75.0001%; top: 0px; animation-delay: 0.6s; animation-name: fadeInUp;">
                                <div class="portfolio-box">
                                    <img class="margin-50px-bottom" src="{{ asset('landing/images/Beauty Herb Mortar Pestle.svg') }}" style="width: 60px;height: 60px"/>
                                    <span
                                        class="title-extra-small alt-font text-extra-medium-gray font-weight-400 d-block margin-50px-bottom letter-spacing-3px">{{ __('landing.wellness') }}</span>
                                    <span
                                        class="text-extra-medium alt-font text-extra-medium-gray font-weight-400 d-block margin-15px-bottom">{{ __('landing.our_brand_promotes_wellness,_both_physically_and_mentally._it_is_our_wish_that_our_customers_have_a_healthy_lifestyle_and_a_sound_mind.') }}</span>
                                </div>
                            </li>
                            <!-- end lightbox gallery item -->
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end section -->
{{--    <!-- start section -->--}}
{{--    <section--}}
{{--        class="overflow-visible position-relative padding-eight-lr xl-padding-five-lr lg-padding-three-lr xs-padding-15px-lr">--}}
{{--        <div class="container-fluid">--}}
{{--            <div class="row">--}}
{{--                <div class="col-12 fix-background overlap-section text-center one-fourth-screen xs-h-300px"--}}
{{--                     style="background-image: url('landing/images/single-project-page-03-img03.jpg');"></div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </section>--}}
{{--    <!-- end section -->--}}
    <!-- start section -->
    <section class="big-section bg-white">
        <div class="container-fluid">
            <div class="row align-items-center">
                <div class="col-12 col-xl-5 col-lg-6 offset-lg-1 col-md-7">
                    <span
                        class="text-large alt-font text-uppercase text-extra-medium-gray font-weight-300 d-block margin-15px-bottom letter-spacing-3px">{{ __('landing.our_background') }}</span>
                    <span
                        class="title-small alt-font dark-gold font-weight-300 d-block margin-50px-bottom letter-spacing-3px">{{ __('landing.globalcare_at_a_glance') }}</span>

                    <p class="text-extra-large2 alt-font margin-4-half-rem-bottom fw-bold" style="line-height: 40px">{{ __('landing.globalcare_quotes_one') }}</p>
                    <p class="text-extra-large2 alt-font font-weight-300 margin-4-half-rem-bottom mt-4" style="line-height: 40px">{{ __('landing.globalcare_quotes_two') }}</p>

                </div>
                <div class="col-12 col-xl-6 col-md-5 sm-margin-30px-bottom wow animate__fadeInRight">
                    <img
                        src="landing/images/meditate.png" alt="" style="width: 100%"/></div>
            </div>
        </div>
    </section>
    <!-- end section -->
    <!-- start section -->
    <section class="big-section bg-light-yellow" style="background: #fff5ef;">
        <div class="container-fluid">
            <div class="row align-items-center">
                <div class="col-12 col-xl-6 col-md-5 sm-margin-30px-bottom wow animate__fadeInLeft">
                    <img
                        src="{{ asset('landing/images/space.png') }}" alt="" style="width: 100%"/></div>
                <div class="col-12 col-xl-5 col-lg-6 offset-lg-1 col-md-7">
                    <span
                        class="text-large alt-font text-uppercase text-extra-medium-gray font-weight-300 d-block margin-15px-bottom letter-spacing-3px">{{ __('landing.our_finest_collection') }}</span>
                    <span
                        class="title-small alt-font dark-gold font-weight-300 d-block margin-50px-bottom letter-spacing-3px">{{ __('landing.our_product_lineup') }}</span>

                    <p class="text-extra-large2 alt-font font-weight-300 margin-4-half-rem-bottom" style="line-height: 40px">
                    {{ __('landing.our_product_line-ups_are_carefully_crafted,_curated,_and_developed_to_bring_out_the_best_of_you._we_strive_to_help_bring_out_your_natural_curves,_enhancing_your_health_and_confidence,_starting_from_within.') }}
                    </p>
                    {{-- <a class="text-medium alt-font font-weight-300 btn btn-shadow bg-dark-gold text-uppercase text-white letter-spacing-2px padding-1-half-rem-lr"
                    href="{{ route('landing.product') }}">
                    {{ __('landing.view_products') }}
                    </a> --}}
                </div>

            </div>
        </div>
    </section>
    <!-- end section -->
    <!-- start section -->
    <section class="wow animate__fadeIn position-relative" style="padding:0px;height: 600px">
        <div class="section-bg-image-blur"></div>
        <div class="container absolute-middle-center">
            <div class="row justify-content-center">
                <div class="col-12 col-xl-9 col-lg-8 col-sm-8 text-center ">
                    <span
                        class="title-small alt-font dark-gold font-weight-300 d-block margin-50px-bottom letter-spacing-3px">{{ __('landing.join_us_today') }}</span>
                    <h5 class="text-extra-large2 alt-font text-extra-medium-gray font-weight-300 letter-spacing-minus-1px margin-50px-bottom"
                        style="line-height: 42px">{{ __('landing.join_us_and_together_we_can_spread_the_greatness_of_health_and_wellness._let_us_create_a_new_landscape_and_blue_ocean_in_this_market_together.') }}</h5>
                    {{-- <button class="text-medium alt-font font-weight-300 btn btn-shadow bg-dark-gold text-uppercase text-white letter-spacing-2px padding-1-half-rem-lr">
                    {{ __('landing.join_now') }}
                    </button> --}}
                </div>
            </div>
        </div>
    </section>
    <!-- end section -->

@endsection
