<header class="main-header">

    <!-- Header Lower -->
    <div class="header-lower">

        <div class="auto-container">
            <div class="inner-container d-flex justify-content-between align-items-center">

                <div class="logo-box d-flex align-items-center">
                    {{-- <a class="nav-link" data-bs-toggle="offcanvas" href="#offcanvascart" role="button">
                    <div class="nav-toggle-btn a-nav-toggle navSidebar-button">
                        <span class="hamburger">
                          <span class="top-bun"></span>
                          <span class="meat"></span>
                          <span class="bottom-bun"></span>
                        </span>
                      </div>
                    </a> --}}
                    <!-- Logo -->
                    <div class="logo"><a href="{{ route('index') }}"><img
                                src="{{ !empty($logo->logo) ? URL::to('storage/' . $logo->logo) : URL::to('image/no_image.png') }}"
                                alt="logo"></a></div>
                </div>
                <div class="clearfix nav-outer">

                    <!-- Main Menu -->
                    <nav class="main-menu show navbar-expand-md">
                        <div class="navbar-header">
                            <button class="navbar-toggler" type="button" data-toggle="collapse"
                                data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                                aria-expanded="false" aria-label="Toggle navigation">
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                        </div>

                        <div class="clearfix navbar-collapse collapse" id="navbarSupportedContent">
                            <ul class="clearfix navigation">
                                <li class=""><a href="{{ route('index') }}">Home</a>

                                </li>
                                <li><a href="{{ route('about_us') }}">About Us</a></li>
                                <li class="dropdown"><a href="#">Registration</a>
                                    <ul>
                                        <li>
                                            <a href="{{ route('designer_register') }}">Designer Registration/Login</a>
                                        </li>
                                        {{-- <li>
                                            @if (Session::has('name'))
                                                {{ Session::get('name') }}
                                            @else
                                                <a href="{{ route('user_register') }}">
                                                    Register/Login
                                                </a>
                                            @endif
                                        </li> --}}
                                    </ul>
                                </li>
                                <li class=""><a href="{{ route('shop') }}">Shop</a>

                                </li>
                                {{-- <li class="dropdown"><a href="#">Our Collection</a>
                                    <ul>
                                        <li><a href="collection.html">Collection</a></li>
                                        <li><a href="single-collection.html">Single Collection</a></li>
                                        <li><a href="gift.html">Gift Cart</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown"><a href="#">Blog</a>
                                    <ul>
                                        <li><a href="blog.html">Our Blog</a></li>
                                        <li><a href="blog-grid.html">Blog Grid Layout</a></li>
                                        <li><a href="blog-detail.html">Blog Single</a></li>
                                        <li><a href="not-found.html">Not Found</a></li>
                                    </ul>
                                </li> --}}

                                <li><a href="{{ route('contact_us') }}">Contact us</a></li>
                            </ul>
                        </div>

                    </nav>
                    <!-- Main Menu End-->

                </div>

                <!-- Outer Box -->
                <div class="outer-box d-flex align-items-center">

                    <!-- Options Box -->
                    {{-- <div class="options-box d-flex align-items-center">

                        <!-- Search Box -->
                        <div class="search-box-outer">
                            <div class="search-box-btn"><span class="flaticon-search-1"></span></div>
                        </div>

                        <!-- User Box -->
                        <a class="user-box flaticon-user-3" data-bs-toggle="modal" data-bs-target="#loginmodal" href="javascript:void(0)"></a>

                        <!-- Like Box -->
                        <div class="like-box">
                            <a class="user-box flaticon-heart" href="contact.html"></a>
                            <span class="total-like">0</span>
                        </div>

                    </div> --}}

                    <!-- Cart Box -->
                    <div class="cart-box">
                        <div class="box-inner">
                            <a href="#" class="icon-box">
                                {{-- <span class="icon flaticon-bag ">    --}}
                                <!-- Start of CuterCounter Code -->

                                <!-- End of CuterCounter Code -->
                               <span style="font-size: 14px"> {{ @$visitorCount }}</span>
                                {{-- </span> --}}
                                <i class="total-cart ">
                                    {{-- {{ @$visitorCount + 457 }} --}}
                                    <!-- End of CuterCounter Code --></i>
                            </a>
                            Phone<br>
                            <a class="phone" href="tel:{{ $contact->phone }}">{{ $contact->phone }}</a>
                        </div>
                    </div>
                    <!-- End Cart Box -->

                    <!-- Mobile Navigation Toggler -->
                    <div class="mobile-nav-toggler"><span class="icon flaticon-menu"></span></div>

                </div>
                <!-- End Outer Box -->

            </div>

        </div>
    </div>
    <!-- End Header Lower -->

    <!-- Sticky Header  -->
    <div class="sticky-header">
        <div class="auto-container">
            <div class="d-flex justify-content-between align-items-center">
                <!-- Logo -->
                <div class="logo">
                    <a href="{{ route('index') }}" title=""><img
                            src="{{ !empty($logo->logo) ? URL::to('storage/' . $logo->logo) : URL::to('image/no_image.png') }}"
                            alt="logo" style="max-height: 60px;max-width:130px"></a>
                </div>

                <!-- Right Col -->
                <div class="right-box">
                    <!-- Main Menu -->
                    <nav class="main-menu">
                        <!--Keep This Empty / Menu will come through Javascript-->
                    </nav>
                    <!-- Main Menu End-->

                    <!-- Mobile Navigation Toggler -->
                    <div class="mobile-nav-toggler"><span class="icon flaticon-menu"></span></div>
                </div>

            </div>
        </div>
    </div>
    <!-- End Sticky Menu -->

    <!-- Mobile Menu  -->
    <div class="mobile-menu">
        <div class="menu-backdrop"></div>
        <div class="close-btn"><span class="icon flaticon-multiply"></span></div>
        <nav class="menu-box">
            <div class="nav-logo"><a href="{{ route('index') }}"><img
                        src="{{ !empty($logo->logo) ? URL::to('storage/' . $logo->logo) : URL::to('image/no_image.png') }}"
                        alt="logo" style="max-height: 60px;max-width:130px"></a></div>
            <!-- Search -->
            {{-- <div class="search-box">
                <form method="post" action="https://24short.creativbydesigns.com/demos/contact.html">
                    <div class="form-group">
                        <input type="search" name="search-field" value="" placeholder="SEARCH HERE" required>
                        <button type="submit"><span class="icon flaticon-search-1"></span></button>
                    </div>
                </form>
            </div> --}}
            <div class="menu-outer"><!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header-->
            </div>
        </nav>
    </div>
    <!-- End Mobile Menu -->

</header>
