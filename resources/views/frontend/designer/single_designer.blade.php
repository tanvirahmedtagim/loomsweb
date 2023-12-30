@extends('frontend.layout.master')
@section('title')
    {{$designer->name}}  - Looms
@endsection
@section('content')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.4.2/css/fontawesome.min.css" integrity="sha384-BY+fdrpOd3gfeRvTSMT+VUZmA728cfF9Z2G42xpaRkUGu2i3DyzpTURDo5A6CaLK" crossorigin="anonymous">
    	<!-- Page Title -->
        <section class="page-title">
            <div class="auto-container">
                <h2>{{$designer->name}}</h2>
                <ul class="bread-crumb clearfix">
                    <li><a href="{{route('index')}}">Home</a></li>
                    <li>Designer</li>
                   
                </ul>
            </div>
        </section>
        <!-- End Page Title -->
        
        	<!-- Shop Detail Section -->
	<section class="shop-detail-section">
		<div class="auto-container">
			<!-- Upper Box -->
			<div class="upper-box">
				<div class="row clearfix">
					<!-- Gallery Column -->
					<div class="gallery-column col-lg-6 col-md-12 col-sm-12">
						<div class="inner-column">
							<div class="carousel-outer">
                                <!-- Swiper -->
                                @php
                                $product = App\Models\Product::select('logo')->where('designer_id', $designer->id)->get();
                            @endphp
                                <div class="swiper-container content-carousel">
                                    <div class="swiper-wrapper">
                                      {{--  <div class="swiper-slide">
                                            <figure class="image"><a href="{{(!empty($product[0]->logo))?URL::to('storage/'.$product[0]->logo):URL::to('image/no_image.png')}}" class="lightbox-image"><img src="{{(!empty($product[0]->logo))?URL::to('storage/'.$product[0]->logo):URL::to('image/no_image.png')}}" alt="" style="max-height: 673px;max-width:518px"></a></figure>
                                        </div>--}}
                                        @foreach ($product as $item)
                                        <div class="swiper-slide">
                                            <figure class="image"><a href="{{(!empty($item->logo))?URL::to('storage/'.$item->logo):URL::to('image/no_image.png')}}" class="lightbox-image"><img src="{{(!empty($item->logo))?URL::to('storage/'.$item->logo):URL::to('image/no_image.png')}}" alt=""></a></figure>
                                        </div>
                                        @endforeach
                                    </div>
                                </div>

                                <div class="swiper-container thumbs-carousel">
                                    <div class="swiper-wrapper">
                               
                                     @foreach ($product as $item)
                                        <div class="swiper-slide">
                                            <figure class="thumb"><img src="{{(!empty($item->logo))?URL::to('storage/'.$item->logo):URL::to('image/no_image.png')}}" alt=""></figure>
                                        </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
						</div>
					</div>
					<!-- Content Column -->
					<div class="content-column col-lg-6 col-md-12 col-sm-12">
						<div class="inner-column">
							<h3>{{@$designer->name}}</h3>
							<!-- Rating -->
					
							<!-- Price -->
							<div class="price">{{@$designer->min_price}} Tk- {{@$designer->max_price}} Tk</div>
								<div class="text"><b>Description  </b> : {!!$designer->description!!}</div>
                            <div class="text"><b>Experience  </b> : {!!$designer->experience!!}</div>
                            <div class="text"><b>Expertise  </b> : {!!$designer->expertise!!}</div>
							<div class="d-flex flex-wrap">
								<!-- Model -->
								<div class="model">
									<span class="model-title">Info :</span>
								</div>
								<!-- Select Size -->
								<div class="select-size-box clearfix">
									<div class="select-box"><input type="radio" name="payment-group" id="radio-one" checked><label for="radio-one">{{@$designer->age}}</label></div>
									<div class="select-box"><input type="radio" name="payment-group" id="radio-two" ><label for="radio-two">{{@$designer->gender}}</label></div>
                                    <div class="select-box"><input type="radio" name="payment-group" id="radio-three" ><label for="radio-three">{{@$designer->prefer->name}}</label></div>
								</div>
							</div>
							
                            @php
                                $category = App\Models\Product::select('category')->where('designer_id', $designer->id)->get();
                            @endphp
							<!-- Categories -->
							<div class="categories"><span>Categories :</span> 
                                @foreach ($category as $item)
                                    <span style="background-color: azure">{{@$item->categories->name}}</span> &nbsp;
                                @endforeach
                            </div>
							
							<!-- Tags -->
							
							
							<!-- Social Box -->
							<ul class="social-box">
								<li class="share">Share:</li>
								<li><a href="{{@$designer->facebook}}" class=""><i class="fa-brands fa-facebook"></i></a></li>
								<li><a href="{{@$designer->instagram}}" class=""><i class="fa-brands fa-instagram"></i></a></li>
								<li><a href="{{@$designer->youtube}}" class=""><i class="fa-brands fa-youtube"></i></a></li>
								
							</ul>
							
							<div class="d-flex align-items-center flex-wrap">
							
								<!-- Button Box -->
								<div class="button-box">
									<a href="{{route('booking.designer', $designer->id)}}" class="theme-btn btn-style-one">
										Book Now
									</a>
								</div>
								
								<!-- Quantity Box -->
					
								
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- End Upper Box -->
			
			<!-- Lower Box -->

			<!-- End Lower Box -->
			
		</div>
	</section>
	<!-- End Shop Page Section -->
	

	<!-- End Products Section Six -->
@endsection