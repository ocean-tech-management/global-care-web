<!-- start footer -->
<footer class="footer-dark " style="background-color:#232323">
    <div class="footer-top padding-five-tb lg-padding-eight-tb md-padding-50px-tb">
        <div class="container">
            <div class="row">
                <!-- start footer column -->
                {{-- <div class="col-12 col-lg-2 col-sm-6 md-margin-40px-bottom xs-margin-25px-bottom">
                    <span class="alt-font font-weight-500 d-block text-white margin-20px-bottom xs-margin-10px-bottom">{{ __('landing.categories') }}</span>
                    <ul>
                        @foreach(getCategories() as $category)
                            <li><a href="{{ route('landing.product') }}">{{ $category->name }}</a></li>
                        @endforeach
                        <li><a href="#">{{ __('landing.healthcare') }}</a></li>
                        <li><a href="#">{{ __('landing.lifestyle') }}</a></li>
                    </ul>
                </div> --}}
                <!-- end footer column -->
                <!-- start footer column -->
                <div class="col-12 col-lg-2 col-sm-6 md-margin-40px-bottom xs-margin-25px-bottom">
                    <span class="alt-font font-weight-500 d-block text-white margin-20px-bottom xs-margin-10px-bottom">{{ __('landing.about_globalcare') }}</span>
                    <ul>
                        <li><a href="{{ route('landing.home') }}">{{ __('landing.home') }}</a></li>
                        <li><a href="{{ route('landing.contactUs') }}">{{ __('landing.contact_us') }}</a></li>
                        {{-- <li><a href="#">{{ __('landing.faq') }}</a></li> --}}
                    </ul>
                </div>
                <!-- end footer column -->
                <!-- start footer column -->
                {{-- <div class="col-12 col-lg-2 col-sm-6 xs-margin-25px-bottom">
                    <span class="alt-font font-weight-500 d-block text-white margin-20px-bottom xs-margin-10px-bottom">{{ __('landing.my_account') }}</span>
                    <ul>
                        <li><a href="{{ url('/user') }}">{{ __('landing.account') }}</a></li>
                        <li><a href="{{ url('/login') }}">{{ __('landing.login') }}</a></li>
                    </ul>
                </div> --}}
                <!-- end footer column -->
                <!-- start footer column -->
                <div class="col-12 col-lg-4 col-sm-6 xs-margin-25px-bottom">
                    {{-- <span class="alt-font font-weight-500 d-block text-white margin-20px-bottom xs-margin-10px-bottom">{{ __('landing.site_map') }}</span>
                    <ul>
                        <li><a href="{{ route('landing.home') }}">{{ __('landing.home') }}</a></li>
                        <li><a href="#">{{ __('landing.product') }}</a></li>
                        <li><a href="{{ route('landing.product') }}">{{ __('landing.product') }}</a></li>
                        <li><a href="{{ route('landing.joinUs') }}">{{ __('landing.join_us_as_partners') }}</a></li>
                        <li><a href="{{ route('landing.productQRCheck') }}">{{ __('landing.product_qr_check') }}</a></li>
                    </ul> --}}
                </div>
                <div class="col-12 col-lg-2 col-sm-6 md-margin-40px-bottom xs-margin-25px-bottom"></div>

                <!-- end footer column -->
                <!-- start footer column -->
                <div class="col-12 col-lg-4 col-sm-6 xs-margin-25px-bottom">
                    <span class="alt-font font-weight-500 d-block text-white margin-20px-bottom xs-margin-10px-bottom">{{ __('landing.contact_information') }}</span>
                    <ul>
                        <li>GLOBALCARE ONE STOP SOLUTIONS SDN. BHD. (1540496­K)</li>
                        <li><a href="{{ route('landing.contactUs') }}">G-Vestor Tower Kompleks Pavilion Ampang, Menara G-Vestor, 200, Jalan Ampang, 50450 Kuala Lumpur, Wilayah Persekutuan Kuala Lumpur</a></li>
                        <li>support@myglobalcare.asia</li>
                    </ul>
                </div>
                <!-- end footer column -->
                <!-- start footer column -->
            {{--                <div class="col-12 col-lg-3 col-sm-6">--}}
            {{--                    <span class="alt-font font-weight-500 d-block text-white margin-20px-bottom">{{ __('landing.follow_us_on_instagram') }}</span>--}}
            {{--                    <div class="w-100 d-inline-block margin-10px-top">--}}
            {{--                        <ul class="instafeed-grid instafeed-wrapper grid grid-3col xl-grid-3col lg-grid-3col md-grid-3col sm-grid-3col xs-grid-3col gutter-small" data-total="3">--}}
            {{--                            <li class="grid-item"><figure><a href="single-project-page-02.html#" data-href="{{link}}" target="_blank"><img src="single-project-page-02.html#" data-src="{{image}}" class="insta-image" alt="" /><span class="insta-counts"><i class="fab fa-instagram"></i>{{likes}}</span></a></figure></li>--}}
            {{--                        </ul>--}}
            {{--                        <a class="alt-font text-extra-small text-uppercase font-weight-500 margin-20px-top d-inline-block" href="https://www.instagram.com/" target="_blank"><i class="fab fa-instagram icon-extra-small align-middle margin-10px-right text-gradient-light-purple-light-orange"></i><span class="d-inline-block align-middle">{{ __('landing.follow_instagram') }}</span></a>--}}
            {{--                    </div>--}}
            {{--                </div>--}}
            <!-- end footer column -->
            </div>
        </div>
    </div>
    <div class="footer-bottom padding-40px-tb border-top border-color-white-transparent">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-12 last-paragraph-no-margin sm-margin-20px-bottom">
                    <p>Copyright © GLOBALCARE ONE STOP SOLUTIONS SDN. BHD. (1540496­K). All Rights Reserved.</p>
                </div>
                {{-- <div class="col-12 col-md-6 ">
                    <a class="ml-4" href="{{ route('landing.privacy-policy') }}" target="_blank">{{ __('landing.privacy_policy') }}</a>
                    <a class="ml-4" href="{{ route('landing.terms-of-use') }}" target="_blank">{{ __('landing.terms_of_use') }}</a>
                    <a class="ml-4" href="{{ route('landing.delivery-policy') }}" target="_blank">{{ __('landing.delivery_policy') }}</a>
                    <a class="ml-4" href="{{ route('landing.refund-return-policy') }}" target="_blank">{{ __('landing.refund_&_return_policy') }}</a>
                    <a class="ml-4" href="#" target="_blank">{{ __('landing.privacy_policy') }}</a>
                    <a class="ml-4" href="#" target="_blank">{{ __('landing.terms_of_use') }}</a>
                   <a class="ml-4" href="#" target="_blank">{{ __('landing.delivery_policy') }}</a>
                    <a class="ml-4" href="#" target="_blank">{{ __('landing.refund_&_return_policy') }}</a>
                </div> --}}
            </div>
        </div>
    </div>
</footer>
<!-- end footer -->
