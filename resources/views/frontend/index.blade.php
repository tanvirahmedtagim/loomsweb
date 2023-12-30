@extends('frontend.layout.master')
@section('title')
    Looms Fashion
@endsection

@section('content')
    <style>
        .text-size-btn {
            font-size: 20px;
            color: black !important;
        }

        @media only screen and (max-width: 800px) {
            .main-slider .slide {
                position: relative;
                overflow: hidden;
                /* padding:200px 0px 180px; */
                height: 40vh !important;
                background-size: cover;
            }

            .text-size-btn {
                font-size: 12px;
            }
            h2{
                font-size: 19px !important;
            }
        }

        @media only screen and (max-width: 500px) {
            .main-slider .slide {
                position: relative;
                overflow: hidden;
                /* padding:200px 0px 180px; */
                height: 38vh !important;
                background-size: cover;
            }
        }

        @media only screen and (max-width: 400px) {
            .main-slider .slide {
                position: relative;
                overflow: hidden;
                /* padding:200px 0px 180px; */
                height: 35vh !important;
                background-size: cover;
            }
        }

        @media only screen and (max-width: 300px) {
            .main-slider .slide {
                position: relative;
                overflow: hidden;
                /* padding:200px 0px 180px; */
                height: 32vh !important;
                background-size: cover;
            }
        }
    </style>
    <!-- Main Section -->
    <section class="main-slider">
        <div class="main-slider-carousel owl-carousel owl-theme">
            @foreach ($slider as $item)
                <div class="slide">
                    <!-- Ct Dot Animated -->
                    <!-- End Ct Dot Animated -->
                    <div class="image-layer"
                        style="background-size: cover !important; background-position: center !important;
                            background-image: url({{ !empty($item->logo) ? URL::to('storage/' . $item->logo) : URL::to('image/no_image.png') }})">
                    </div>
                    <div class="auto-container">
                        <!-- Content Column -->
                        <div class="content-box">
                            <div class="box-inner">
                                <div class="vector-icon-three"
                                    style="background-image: url(frontend/assets/images/main-slider/vector-3.png)"></div>
                                {{-- <div class="title">{{$item->title}}</div>
                                <h1>{{$item->subtitle}}</h1> --}}
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
            <!-- Slide One -->
            <!-- End Slide One -->
        </div>

    </section>
    <!-- End Main Section -->

    <!-- Featured Section -->
    <section class="featured-section">
        <div class="vector-layer-two" style="background-image: url(frontend/assets/images/icons/feature.png)"></div>
        <div class="auto-container">
            <div class="inner-container">
                <div class="clearfix row">

                    <!-- Feature Block -->
                    <div class="feature-block col-xl-3 col-lg-6 col-md-6 col-sm-12">
                        <div class="inner-box">
                            <div class="content d-flex">
                                {{-- <div class="icon flaticon-fast"></div> --}}
                                <i class="me-2 fa-solid fa-shirt text-light" style="font-size: 30px"></i>
                                <h2 class="pt-2">Best Designer Cloaths</h2>
                                {{-- <div class="text">Free shipping over $100</div> --}}
                            </div>
                        </div>
                    </div>
                    <!-- Feature Block -->
                    <div class="feature-block col-xl-3 col-lg-6 col-md-6 col-sm-12">
                        <div class="inner-box">
                            <div class="content d-flex">
                                {{-- <div class="icon flaticon-fast"></div> --}}
                                <i class="me-2 fa-solid fa-credit-card text-light" style="font-size: 30px"></i>
                                <h2 class="pt-2">Payment Secure</h2>
                                {{-- <div class="text">Free shipping over $100</div> --}}
                            </div>
                        </div>
                    </div>
                    <!-- Feature Block -->
                    <div class="feature-block col-xl-3 col-lg-6 col-md-6 col-sm-12">
                        <div class="inner-box">
                            <div class="content d-flex">
                                {{-- <div class="icon flaticon-fast"></div> --}}
                                <i class="me-2 fa-solid fa-vest-patches text-light" style="font-size: 30px"></i>
                                <h2 class="pt-2">Best Production Line</h2>
                                {{-- <div class="text">Free shipping over $100</div> --}}
                            </div>
                        </div>
                    </div>
                    <!-- Feature Block -->
                    <div class="feature-block col-xl-3 col-lg-6 col-md-6 col-sm-12">
                        <div class="inner-box">
                            <div class="content d-flex">
                                {{-- <div class="icon flaticon-fast"></div> --}}
                                <i class="me-2 fa-solid fa-headset text-light" style="font-size: 30px"></i>
                                <h2 class="pt-2">Best Customer Service</h2>
                                {{-- <div class="text">Free shipping over $100</div> --}}
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <!-- End Featured Section -->

    <!-- Shop By Category Section -->
    {{-- <section class="shopby-category-section">
        <div class="auto-container">
            <div class="sec-title">
                <h2><span>CHOOSE </span> FROM CATEGORY !</h2>
            </div>
            <div style="display: flex;align-items: center;justify-content: center;"
                class="shopby-category owl-carousel owl-theme bg-theamvtg">
                <!-- Shop category -->
                @foreach ($category as $item)
                    <div class="shop-category">
                        <div class="category-image">
                            <a class="text-center" href="#">
                                <img style=""
                                    src="{{ !empty($item->logo) ? URL::to('storage/' . $item->logo) : URL::to('image/no_image.png') }}"
                                    alt="24short-img">
                                <span class="category-title">{{ $item->name }}</span>
                            </a>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section> --}}

    <section class="shopby-category-section">
        <div class="auto-container">
            <div class="sec-title">
                <h2><span>CHOOSE </span> FROM CATEGORY !</h2>
            </div>
            <div style="display: flex;align-items: center;justify-content: center;" class="row">
                <!-- Shop category -->
                @foreach ($category as $item)
                    <div class="col-md-2 bg-info1 col-3 text-center">
                        <a class="" href="{{route('designer.category', $item->id)}}">
                            <img style="border-radius:50%; object-fit: cover; " class=""
                                src="{{ !empty($item->logo) ? URL::to('storage/' . $item->logo) : URL::to('image/no_image.png') }}"
                                alt="24short-img">
                            <br>
                            <span style="" class="text-size-btn">{{ $item->name }}</p>
                        </a>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    <!-- End Shop By Category Section -->

    <!-- Products Section -->
    <section class="products-section">
        <div class="auto-container">
            <!-- Sec Title -->
            <div class="sec-title">
                <h2><span>CUSTOMISED</span> DESIGNS FOR YOU !</h2>
            </div>

            <div class="four-item-carousel owl-carousel owl-theme">
                @foreach ($designer as $item)
                    @php
                        $products = App\Models\Product::select('logo')
                            ->where('designer_id', $item->id)
                            ->first();
                    @endphp
                    <div class="shop-item">
                        <div class="inner-box">
                            <div class="image">
                                <a href="{{ route('designer.single', $item->id) }}">
                                    <img src="{{ !empty($products->logo) ? URL::to('storage/' . $products->logo) : URL::to('image/no_image.png') }}"
                                        alt="24short-img">
                                </a>
                            </div>
                            <div class="lower-content">

                                <h6><a href="{{ route('designer.single', $item->id) }}">{{ $item->name }}</a></h6>
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="price">{{ $item->min_price }} Tk - {{ $item->max_price }} Tk</div>

                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
                <!-- Shop Item -->
            </div>
        </div>
    </section>
    <!-- End Products Section -->

    <!-- Products Section Two -->
    <section class="products-section-two">
        <div class="bottom-white-border"></div>
        <div class="auto-container">
            <!-- Sec Title -->
            <div class="sec-title centered">
                <h2><span>POPULAR</span> DESIGNERS FOR YOU !</h2>
            </div>
            <div class="inner-container">
                <div class="single-item-carousel owl-carousel owl-theme">
                    <!-- Slide -->
                    <div class="slide">
                        <div class="clearfix row">
                            @foreach ($designer as $key => $item)
                                <!-- Product Block Four -->
                                <div class="product-block-four col-lg-3 col-md-6 col-sm-6 col-6">
                                    <div class="flex-wrap inner-box d-flex justify-content-between align-items-center">
                                        <div class="image">

                                            <img src="{{ !empty($item->logo) ? URL::to('storage/' . $item->logo) : URL::to('image/no_image.png') }}"
                                                alt="24short-img">
                                        </div>
                                        <div class="content">
                                            <h6><a
                                                    href="{{ route('designer.single', $item->id) }}">{{ $item->name }}</a>
                                            </h6>
                                            <div class="total-products">
                                                @if ($item->sales_quantity > 0)
                                                    ({{ $item->sales_quantity }} Products)
                                                @else
                                                    ({{ $item->sales_quantity }} Product)
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Products Section Two -->

    <!-- Counter Section -->


    <!-- Products Section Three -->
    <section class="products-section-three">
        <div class="auto-container">
            <!-- Sec Title -->
            <div class="sec-title">
                <h2><span>PRODUCTS OF </span> YOUR CHOICE !</h2>
            </div>

            <!-- MixitUp Galery -->
            <div class="mixitup-gallery">

                <!-- Filter -->
                <div class="filters">
                    <ul class="filter-tabs">
                        <li class="active filter" data-role="button" data-filter="all">Trending</li>
                        @foreach ($category as $item)
                            <li class="filter" data-role="button" data-filter=".{{ $item->id }}">
                                {{ $item->name }}
                            </li>
                        @endforeach


                    </ul>
                </div>

                <div class="clearfix filter-list row">

                    @foreach ($product as $item)
                        @if ($item->designer->approve == '1')
                            <div class="shop-item mix music {{ $item->category }} col-lg-3 col-md-6 col-sm-12 col-6">
                                <div class="inner-box">
                                    <div class="image">
                                        <a href="{{ route('designer.single', $item->designer->id) }}"><img
                                                src="{{ !empty($item->logo) ? URL::to('storage/' . $item->logo) : URL::to('image/no_image.png') }}"
                                                alt="24short-img"></a>
                                        <span class="tag flaticon-heart"></span>

                                    </div>
                                    <div class="lower-content">

                                        {{-- <h6 class="">
                                            <a href="{{ route('designer.single', $item->designer->id) }}">
                                                {{ $item->name }}
                                            </a>
                                        </h6> --}}
                                        {{-- <b>{{ $item->designer->name }}</b> --}}
                                        <div class="m-0 bg-info1 d-flex justify-content-between align-items-center">
                                            <div class="price">{{ $item->designer->min_price }}Tk -
                                                {{ $item->designer->max_price }}Tk</div>
                                            <!-- Quantity Box -->
                                            <div class="quantity-box">

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endif
                    @endforeach
                    <!-- Shop Item -->

                    {{ $product->links() }}

                </div>

                <!-- Button Box -->
                <div class="text-center button-box">
                    <a href="{{ route('shop') }}" class="theme-btn btn-style-one">
                        Shop Now <span class="icon flaticon-right-arrow"></span>
                    </a>
                </div>

            </div>
        </div>
    </section>
    <!-- End Products Section Three -->

    <!-- Sponsors Section -->
    <section class="sponsors-section">
        <div class="auto-container">
            <div class="inner-container">
                <div class="sponsors-outer">
                    <!-- Sponsors Carousel -->
                    <ul class="sponsors-carousel owl-carousel owl-theme owl-loaded owl-drag"
                        style="display: flex;align-items: center;justify-content: center;">
                        @foreach ($partner as $item)
                            <li class="slide-item">
                                <figure class="image-box"><a href="#"><img
                                            src="{{ !empty($item->logo) ? URL::to('storage/' . $item->logo) : URL::to('image/no_image.png') }}"
                                            alt="" style= "max-height:90px"></a></figure>
                            </li>
                        @endforeach

                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!-- End Sponsors Section -->
@endsection
