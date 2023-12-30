@extends('frontend.layout.master')
@section('title')
    Booking - Looms
@endsection
@section('content')
    	<!-- Page Title -->
        <section class="page-title">
            <div class="auto-container">
                <h2>Booking Page</h2>
                <ul class="bread-crumb clearfix">
                    <li><a href="{{route('index')}}">Home</a></li>
                    <li>Designer</li>
                    <li>Booking</li>
                </ul>
            </div>
        </section>
        <!-- End Page Title -->
        
        <!-- Register Section -->
        <div class="register-section">
            <div class="auto-container">
                <div class="inner-container">
                    <div class="row clearfix">
                        <!-- Column -->
                        <div class="column col-lg-12 col-md-12 col-sm-12 justify-content-center">
                            <!-- Login Form -->
                            <div class="styled-form">
                                <h4>Book an appoinment</h4>
                             
                             @if(Session::has('error'))
                             <div class="alert alert-danger">{{Session::get('error')}}</div>
                          @endif
                                <form method="POST" action="{{ route('booking.store') }}">
                                    @csrf
                            
                                    <!-- Name -->
                                    <div>
                                        <x-input-label for="name" :value="__('Name')" />
                                        <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
                                        <x-input-error :messages="$errors->get('name')" class="mt-2" />
                                    </div>
                            
                                    <!-- Email Address -->
                                    <div class="mt-4">
                                        <x-input-label for="email" :value="__('Email')" />
                                        <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autocomplete="username" />
                                        <input type="hidden" name="role" value="user">
                                        <x-input-error :messages="$errors->get('email')" class="mt-2" />
                                    </div>
                            
                 <!-- phone Address -->
                                    <div class="mt-4">
                                        <x-input-label for="email" :value="__('Phone')" />
                                        <x-text-input id="email" class="block mt-1 w-full" type="text" name="phone" :value="old('phone')" required autocomplete="username" />
                                        <input type="hidden" name="designer_id" value="{{$designer->id}}">
                                        <x-input-error :messages="$errors->get('phone')" class="mt-2" />
                                    </div>
                       
                                    <div class="flex items-center justify-end mt-4">
                             
                            
                                        <x-primary-button class="ml-4 theme-btn btn-style-one">
                                            {{ __('Submit') }}
                                        </x-primary-button>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <!-- Column -->
                  
                    </div>
                </div>
            </div>
        </div>
        <!-- End Register Section -->
        
        <!-- Gallery Section -->
{{--       <section class="gallery-section">
            <div class="outer-container">
                <div class="instagram-carousel owl-carousel owl-theme">
                    
                    <!-- Insta Gallery -->
                    <div class="insta-gallery">
                        <img src="{{asset('frontend')}}/assets/images/gallery/1.jpg" alt="24short-img">
                        <div class="overlay-box">
                            <div class="overlay-inner">
                                <a class="lightbox-image icon flaticon-instagram" href="{{asset('frontend')}}/assets/images/gallery/1.jpg"></a>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Insta Gallery -->
                    <div class="insta-gallery">
                        <img src="{{asset('frontend')}}/assets/images/gallery/2.jpg" alt="24short-img">
                        <div class="overlay-box">
                            <div class="overlay-inner">
                                <a class="lightbox-image icon flaticon-instagram" href="{{asset('frontend')}}/assets/images/gallery/1.jpg"></a>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Insta Gallery -->
                    <div class="insta-gallery">
                        <img src="{{asset('frontend')}}/assets/images/gallery/3.jpg" alt="24short-img">
                        <div class="overlay-box">
                            <div class="overlay-inner">
                                <a class="lightbox-image icon flaticon-instagram" href="{{asset('frontend')}}/assets/images/gallery/3.jpg"></a>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Insta Gallery -->
                    <div class="insta-gallery">
                        <img src="{{asset('frontend')}}/assets/images/gallery/4.jpg" alt="24short-img">
                        <div class="overlay-box">
                            <div class="overlay-inner">
                                <a class="lightbox-image icon flaticon-instagram" href="{{asset('frontend')}}/assets/images/gallery/4.jpg"></a>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Insta Gallery -->
                    <div class="insta-gallery">
                        <img src="{{asset('frontend')}}/assets/images/gallery/5.jpg" alt="24short-img">
                        <div class="overlay-box">
                            <div class="overlay-inner">
                                <a class="lightbox-image icon flaticon-instagram" href="{{asset('frontend')}}/assets/images/gallery/5.jpg"></a>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Insta Gallery -->
                    <div class="insta-gallery">
                        <img src="{{asset('frontend')}}/assets/images/gallery/6.jpg" alt="24short-img">
                        <div class="overlay-box">
                            <div class="overlay-inner">
                                <a class="lightbox-image icon flaticon-instagram" href="{{asset('frontend')}}/assets/images/gallery/6.jpg"></a>
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>
        </section>--}}
        <!-- End Gallery Section -->
@endsection