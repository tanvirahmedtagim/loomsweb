<footer class="main-footer">
    <div class="pattern-layer-one" style="background-image: url(assets/images/icons/pattern-3.png)"></div>
    <div class="pattern-layer-two" style="background-image: url(assets/images/icons/vector-2.png)"></div>
    <div class="auto-container">

        <!-- Widgets Section -->
        <div class="widgets-section">
            <div class="clearfix row">
                <!-- Column -->
                <div class="mx-auto big-column col-lg-7 bg-info1 col-md-12 col-sm-12">
                    <div class="clearfix row">
                        <!-- Footer Column -->
                        <div class="footer-column col-lg-7 col-md-6 col-sm-12">
                            <div class="footer-widget links-widget">
                                <!-- Logo -->
                                <div class="logo"><a href="{{ route('index') }}"><img
                                            src="{{ asset('frontend') }}/assets/images/WhiteLogo.png"
                                            alt="logo" style="max-width: 243px;max-height:72px"></a></div>
                                <div class="text">{!! $contact->address !!}</div>
                                <ul class="contact-list">

                                    <li><span class="icon flaticon-call"></span>{{ $contact->phone }}</li>
                                </ul>
                            </div>
                        </div>

                        <!-- Footer Column -->
                        <div class="footer-column col-lg-5 col-md-6 col-sm-12">
                            <div class="footer-widget links-widget">
                                <h5>Find It Fast</h5>
                                <ul class="page-list">
                                    <li><a href="https://looms.fashion/shop-page">All Product</a></li>
                                    {{-- <li><a href="#">Cameras Photos</a></li>
                                    <li><a href="#">Fashion Collection</a></li>
                                    <li><a href="#">Hot Fashion Photo</a></li>
                                    <li><a href="#">Gift Card</a></li> --}}
                                    <li><a href="https://looms.fashion/contact-us">Contact Us</a></li>
                                    <li><a href="{{url('designer-register')}}">Login</a></li>
                                </ul>
                            </div>
                        </div>

                    </div>
                </div>

                <!-- Column -->
                {{-- <div class="big-column col-lg-5 col-md-12 col-sm-12">
                    <div class="clearfix row">

                        <!-- Footer Column -->
                        <div class="footer-column col-lg-7 col-md-6 col-sm-12">
                            <div class="footer-widget links-widget">
                                <h5>Quick Links</h5>
                                <ul class="page-list">
                                    <li><a href="#">Your Account</a></li>
                                    <li><a href="#">Returns & Exchanges</a></li>
                                    <li><a href="#">Return Center</a></li>
                                    <li><a href="#">Purchase Hisotry</a></li>
                                    <li><a href="#">App Download</a></li>
                                </ul>
                            </div>
                        </div>

                        <!-- Footer Column -->
                        <div class="footer-column col-lg-5 col-md-6 col-sm-12">
                            <div class="footer-widget instagram-widget">
                                <h5>Service us</h5>
                                <ul class="page-list-two">
                                    <li><a href="#">Support Center</a></li>
                                    <li><a href="#">Term & Conditions</a></li>
                                    <li><a href="#">Shipping</a></li>
                                    <li><a href="#">Privacy Policy</a></li>
                                    <li><a href="#">Help</a></li>
                                </ul>
                            </div>
                        </div>

                    </div>
                </div> --}}

            </div>
        </div>

        <!-- Footer Bottom -->
        <div class="footer-bottom">
            <div class="flex-wrap d-flex justify-content-between align-items-center">
                <div class="copyright"><span>&copy; 2023</span> Powered by Looms. All Rights Reserved.</div>
                <div class="email-box">
                    <a href="mailto:inf@creativbydesigns.com"><span
                            class="icon flaticon-mail"></span>{{ $contact->email }}</a>
                </div>
                <div class="cards"><img src="{{ asset('frontend') }}/assets/images/icons/cards.png" alt="24short-img">
                </div>
            </div>
        </div>

    </div>
</footer>
