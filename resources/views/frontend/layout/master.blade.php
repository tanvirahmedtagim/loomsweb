<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from 24short.creativbydesigns.com/demos/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 08 Nov 2023 05:41:13 GMT -->

<head>
    <meta charset="utf-8">
    <title>@yield('title')</title>
    <!-- Meta -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="looms fashion">
    <meta name="keywords" content="Looms Fashion">

    <!-- Responsive -->
    <meta name="viewport" content="width=device-width,initial-scale=1.0">

    <!-- Favicons Icon -->
    <link rel="shortcut icon"
        href="{{ !empty($logo->logo) ? URL::to('storage/' . $logo->logo) : URL::to('image/no_image.png') }}"
        type="image/x-icon">
    <link rel="icon"
        href="{{ !empty($logo->logo) ? URL::to('storage/' . $logo->logo) : URL::to('image/no_image.png') }}"
        type="image/x-icon">

    <!-- Stylesheets -->
    <link href="{{ asset('frontend') }}/assets/css/bootstrap.css" rel="stylesheet">
    <link href="{{ asset('frontend') }}/assets/css/style.css" rel="stylesheet">
    <link href="{{ asset('frontend') }}/assets/css/responsive.css" rel="stylesheet">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Urbanist:wght@400;500;600;700;800;900&amp;display=swap"
        rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
        integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />


</head>

<body>

    <div class="page-wrapper">

        <!-- Preloader -->
        <div class="loader-wrap">
            <div class="preloader">
                {{-- <div class="preloader-close">x</div> --}}
                <div id="handle-preloader" class="handle-preloader">
                    <div class="animation-preloader">
                        <div class="spinner"></div>
                        <div class="txt-loading">
                            <span data-text-preloader="L" class="letters-loading">
                                L
                            </span>
                            <span data-text-preloader="O" class="letters-loading">
                                O
                            </span>
                            <span data-text-preloader="O" class="letters-loading">
                                O
                            </span>
                            <span data-text-preloader="M" class="letters-loading">
                                M
                            </span>
                            <span data-text-preloader="S" class="letters-loading">
                                S
                            </span>
                            <span data-text-preloader="." class="letters-loading">
                                .
                            </span>
                            <span data-text-preloader="." class="letters-loading">
                                .
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Preloader End -->

        <!-- Main Header -->
        @include('frontend.layout.header')
        <!-- End Main Header -->

        <!-- Sidebar Cart Item -->
        @include('frontend.layout.sidebar')
        <!-- END sidebar widget item -->

        @yield('content')
        <!-- End Gallery Section -->

        <!-- Main Footer -->
        @include('frontend.layout.footer')
        <!-- End Main Footer -->

    </div>
    <!-- End PageWrapper -->

    <!-- Search Popup -->
    <div class="search-popup">
        <div class="color-layer"></div>
        <button class="close-search"><span class="fa fa-arrow-up"></span></button>
        <form method="post" action="https://24short.creativbydesigns.com/demos/blog.html">
            <div class="form-group">
                <input type="search" name="search-field" value="" placeholder="Search Here" required="">
                <button type="submit"><i class="fa fa-search"></i></button>
            </div>
        </form>
    </div>
    <!-- End Search Popup -->

    <!-- Login Modal -->
    <div class="modal fade" id="loginmodal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header login-header">
                    <button type="button" class="btn-close login-close--btn" data-bs-dismiss="modal"
                        aria-label="Close"></button>
                </div>
                <div class="modal-body login-popup">
                    <div class="row align-items-center">
                        <div class="col-lg-6 col-md-6">
                            <img class="login-popup-img"
                                src="{{ asset('frontend') }}/assets/images/resource/login-popup.jpg"
                                alt="Sign-up-pop-up">
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <div class="account-popup">
                                <h4 class="login-message">SIGN UP FOR SALE UPDATES</h4>
                                <div class="form-heading">Login with your email ID</div>
                                <form class="login-popup-form">
                                    <input class="input-form" placeholder="Email Address" type="text">
                                    <input class="input-form" placeholder="Password" type="password">
                                    <button class="theme-btn btn-style-one">Log In</button>
                                </form>
                                <small class="account-link">Don't have an account? <a class="signup-link link-color"
                                        href="#">Sign-up</a></small>
                                <div id="default-module">
                                    <div class="social-head">Social sign-in</div>
                                    <div class="d-flex align-items-center">
                                        <div class="facebook columns">
                                            <a id="facebook_login" class="fb-auth" data-gaclick="1"
                                                data-gaaction="Connect_FB" href="#">
                                                <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="32"
                                                    height="32" viewBox="0 0 50 50">
                                                    <path
                                                        d="M32,11h5c0.552,0,1-0.448,1-1V3.263c0-0.524-0.403-0.96-0.925-0.997C35.484,2.153,32.376,2,30.141,2C24,2,20,5.68,20,12.368 V19h-7c-0.552,0-1,0.448-1,1v7c0,0.552,0.448,1,1,1h7v19c0,0.552,0.448,1,1,1h7c0.552,0,1-0.448,1-1V28h7.222 c0.51,0,0.938-0.383,0.994-0.89l0.778-7C38.06,19.518,37.596,19,37,19h-8v-5C29,12.343,30.343,11,32,11z">
                                                    </path>
                                                </svg> <span>Connect</span></a>
                                        </div>
                                        <div class="google columns">
                                            <a id="google_login" class="google-auth" data-gaclick="1"
                                                data-gaaction="Connect_G" href="#">
                                                <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="32"
                                                    height="32" viewBox="0 0 32 32">
                                                    <path
                                                        d="M 11 7 C 6.027344 7 2 11.027344 2 16 C 2 20.972656 6.027344 25 11 25 C 15.972656 25 20 20.972656 20 16 C 20 15.382813 19.933594 14.78125 19.8125 14.199219 L 19.765625 14 L 11 14 L 11 17 L 17 17 C 16.523438 19.835938 13.972656 22 11 22 C 7.6875 22 5 19.3125 5 16 C 5 12.6875 7.6875 10 11 10 C 12.5 10 13.867188 10.554688 14.921875 11.464844 L 17.070313 9.359375 C 15.46875 7.894531 13.339844 7 11 7 Z M 25 11 L 25 14 L 22 14 L 22 16 L 25 16 L 25 19 L 27 19 L 27 16 L 30 16 L 30 14 L 27 14 L 27 11 Z">
                                                    </path>
                                                </svg>
                                                <span>Connect</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Login Modal End -->

    <!-- Scroll To Top -->
    <div class="scroll-to-top" id="scroll-to-top" data-target="html"><span class="fa fa-arrow-up"></span></div>

    <script src="{{ asset('frontend') }}/assets/js/jquery.js"></script>
    <script src="{{ asset('frontend') }}/assets/js/popper.min.js"></script>
    <script src="{{ asset('frontend') }}/assets/js/bootstrap.min.js"></script>
    <script src="{{ asset('frontend') }}/assets/js/magnific-popup.min.js"></script>
    <script src="{{ asset('frontend') }}/assets/js/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="{{ asset('frontend') }}/assets/js/appear.js"></script>
    <script src="{{ asset('frontend') }}/assets/js/parallax.min.js"></script>
    <script src="{{ asset('frontend') }}/assets/js/tilt.jquery.min.js"></script>
    <script src="{{ asset('frontend') }}/assets/js/jquery.paroller.min.js"></script>
    <script src="{{ asset('frontend') }}/assets/js/owl.js"></script>
    <script src="{{ asset('frontend') }}/assets/js/wow.js"></script>
    <script src="{{ asset('frontend') }}/assets/js/swiper.min.js"></script>
    <script src="{{ asset('frontend') }}/assets/js/touchspin.js"></script>
    <script src="{{ asset('frontend') }}/assets/js/odometer.js"></script>
    <script src="{{ asset('frontend') }}/assets/js/mixitup.js"></script>
    <script src="{{ asset('frontend') }}/assets/js/jquery.marquee.min.js"></script>
    <script src="{{ asset('frontend') }}/assets/js/nav-tool.js"></script>
    <script src="{{ asset('frontend') }}/assets/js/jquery-ui.js"></script>
    <script src="{{ asset('frontend') }}/assets/js/script.js"></script>
    <script>
        var counterContainer = document.querySelector(".website-counter");
        var resetButton = document.querySelector("#reset");
        var visitCount = localStorage.getItem("page_view");

        // Check if page_view entry is present
        if (visitCount) {
            visitCount = Number(visitCount) + 1;
            localStorage.setItem("page_view", visitCount);
        } else {
            visitCount = 1;
            localStorage.setItem("page_view", 1);
        }
        counterContainer.innerHTML = visitCount;

        // Adding onClick event listener
        resetButton.addEventListener("click", () => {
            visitCount = 1;
            localStorage.setItem("page_view", 1);
            counterContainer.innerHTML = visitCount;
        });
    </script>
</body>

</html>
