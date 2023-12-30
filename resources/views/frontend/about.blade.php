@extends('frontend.layout.master')
@section('title')
    About Us - Looms Fashion
@endsection
@section('content')
    	
	<!-- Page Title -->
    <section class="page-title">
        <div class="auto-container">
			<h2>About Us</h2>
			<ul class="bread-crumb clearfix">
				<li><a href="{{route('index')}}">Home</a></li>
				
				<li>About Us</li>
			</ul>
        </div>
    </section>
    <!-- End Page Title -->
	
	<!-- About Section -->
	<section class="about-section">
		<div class="auto-container">
			<div class="row align-items-center clearfix">
			
				<!-- Image Column -->
				<div class="image-column col-lg-6 col-md-12 col-sm-12">
					<div class="inner-column">
						<div class="image">
							<img src="{{(!empty($about->logo))?URL::to('storage/'.$about->logo):URL::to('image/no_image.png')}}" alt="24short-img">
							
							<!-- Email Box -->
							
							<!-- End Email Box -->
							
							<!-- Experiance Box -->
			
						</div>
					</div>
				</div>
				
				<!-- content Column -->
				<div class="content-column col-lg-6 col-md-12 col-sm-12">
					<div class="inner-column">
						<div class="title">About Looms Fashion</div>
						{!!$about->desc!!}
					</div>
				</div>
				
			</div>
		</div>
	</section>
	<!-- End About Section -->
@endsection