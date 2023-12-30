@extends('frontend.layout.master')
@section('title')
    Designer Registration - Looms
@endsection
@section('content')
    <!-- Page Title -->
    <section class="page-title">
        <div class="auto-container">
            <h2>Login Page</h2>
            <ul class="clearfix bread-crumb">
                <li><a href="{{ route('index') }}">Home</a></li>
                <li>Designer</li>
                <li>Register</li>
            </ul>
        </div>
    </section>
    <!-- End Page Title -->

    <!-- Register Section -->
    <div class="register-section">
        <div class="auto-container">
            <div class="inner-container">
                <div class="clearfix row">
                    <!-- Column -->
                    <div class="column col-lg-6 col-md-12 col-sm-12">
                        <!-- Login Form -->
                        <div class="styled-form">
                            <h4>Sign Up</h4>
                            @if (Session::has('error'))
                                <div class="alert alert-danger">{{ Session::get('error') }}</div>
                            @endif
                            <form method="POST" action="{{ route('register') }}">
                                @csrf

                                <!-- Name -->
                                <div>
                                    <x-input-label for="name" :value="__('Name')" />
                                    <x-text-input id="name" class="block w-full mt-1" type="text" name="name"
                                        :value="old('name')" required autofocus autocomplete="name" />
                                    <x-input-error :messages="$errors->get('name')" class="mt-2" />
                                </div>

                                <!-- Email Address -->
                                <div class="mt-4">
                                    <x-input-label for="email" :value="__('Email')" />
                                    <x-text-input id="email" class="block w-full mt-1" type="email" name="email"
                                        :value="old('email')" required autocomplete="username" />
                                    <input type="hidden" name="role" value="designer">
                                    <x-input-error :messages="$errors->get('email')" class="mt-2" />
                                </div>

                                <!-- gender -->
                                <div class="mt-4">
                                    <x-input-label for="email" :value="__('Gender')" />
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="gender" id=""
                                            value="Male" checked>
                                        <label class="form-check-label" for="">
                                            Male
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="gender" id=""
                                            value="Female">
                                        <label class="form-check-label" for="">
                                            Female
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="gender" id=""
                                            value="Others">
                                        <label class="form-check-label" for="">
                                            Others
                                        </label>
                                    </div>

                                    <x-input-error :messages="$errors->get('gender')" class="mt-2" />
                                </div>


                                <!-- mobile -->
                                <div class="mt-4">
                                    <x-input-label for="mobile" :value="__('Mobile No.')" />
                                    <x-text-input id="mobile" class="block w-full mt-1" type="text" name="mobile"
                                        :value="old('mobile')" required autocomplete="username" />

                                    <x-input-error :messages="$errors->get('mobile')" class="mt-2" />
                                </div>

                                <!-- mobile -->
                                <div class="mt-4">
                                    <x-input-label for="age" :value="__('Age')" />
                                    <x-text-input id="age" class="block w-full mt-1" type="number" name="age"
                                        :value="old('age')" required autocomplete="username" />

                                    <x-input-error :messages="$errors->get('age')" class="mt-2" />
                                </div>

                                <!-- location -->
                                <div class="mt-4">
                                    <x-input-label for="mobile" :value="__('Description')" />

                                    <textarea name="description" id="" cols="30" rows="10" class="block w-full mt-1"></textarea>
                                    <x-input-error :messages="$errors->get('description')" class="mt-2" />
                                </div>

                                <!-- experience -->
                                <div class="mt-4">
                                    <x-input-label for="mobile" :value="__('Experience')" />

                                    <textarea name="experience" id="" cols="30" rows="10" class="block w-full mt-1"></textarea>
                                    <x-input-error :messages="$errors->get('experience')" class="mt-2" />
                                </div>

                                <!-- Expertise -->
                                <div class="mt-4">
                                    <x-input-label for="mobile" :value="__('Expertise')" />

                                    <textarea name="expertise" id="" cols="30" rows="10" class="block w-full mt-1"></textarea>
                                    <x-input-error :messages="$errors->get('expertise')" class="mt-2" />
                                </div>

                                <!-- location -->
                                <div class="mt-4">
                                    <x-input-label for="mobile" :value="__('Preferred Type')" />
                                    @foreach ($prefer as $item)
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="preferred_type"
                                                id="" value="{{ $item->id }}">
                                            <label class="form-check-label" for="">
                                                {{ $item->name }}
                                            </label>
                                        </div>
                                    @endforeach
                                    <x-input-error :messages="$errors->get('preferred_type')" class="mt-2" />
                                </div>

                                <!-- max price -->
                                <div class="mt-4">
                                    <x-input-label for="mobile" :value="__('Max Price')" />
                                    <x-text-input id="mobile" class="block w-full mt-1" type="text"
                                        name="max_price" :value="old('max_price')" required autocomplete="username" />

                                    <x-input-error :messages="$errors->get('max_price')" class="mt-2" />
                                </div>

                                <!-- min price -->
                                <div class="mt-4">
                                    <x-input-label for="mobile" :value="__('Min Price.')" />
                                    <x-text-input id="mobile" class="block w-full mt-1" type="text"
                                        name="min_price" :value="old('min_price')" required autocomplete="username" />

                                    <x-input-error :messages="$errors->get('min_price')" class="mt-2" />
                                </div>
                                <!-- logo -->
                                <br>

                                <!-- Password -->
                                <div class="mt-4">
                                    <x-input-label for="password" :value="__('Password')" />

                                    <x-text-input id="password" class="block w-full mt-1" type="password"
                                        name="password" required autocomplete="new-password" />

                                    <x-input-error :messages="$errors->get('password')" class="mt-2" />
                                </div>

                                <!-- Confirm Password -->
                                <div class="mt-4">
                                    <x-input-label for="password_confirmation" :value="__('Confirm Password')" />

                                    <x-text-input id="password_confirmation" class="block w-full mt-1" type="password"
                                        name="password_confirmation" required autocomplete="new-password" />

                                    <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
                                </div>

                                <div class="flex items-center justify-end mt-4">
                                    <a class="text-sm text-gray-600 underline rounded-md dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800"
                                        href="{{ route('login') }}">
                                        {{ __('Already registered?') }}
                                    </a>

                                    <x-primary-button class="ml-4 theme-btn btn-style-one">
                                        {{ __('Register') }}
                                    </x-primary-button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <!-- Column -->
                    <div class="column col-lg-6 col-md-12 col-sm-12">
                        <!-- Login Form -->
                        <div class="styled-form">
                            <h4>Login here</h4>
                            @if (Session::has('success'))
                                <div class="alert alert-success">{{ Session::get('success') }}</div>
                            @endif
                            @if (Session::has('error'))
                                <div class="alert alert-danger">{{ Session::get('error') }}</div>
                            @endif
                            <form method="post" action="{{ route('login') }}">
                                @csrf
                                <div class="form-group">
                                    <label>Email address</label>
                                    <input type="email" name="email" value="" placeholder="Enter Email Adress"
                                        required>
                                </div>

                                <div class="form-group">
                                    <label> Password</label>
                                    <input type="password" name="password" value="" placeholder="Enter password"
                                        required>
                                </div>
                                <div class="form-group">
                                    <div class="check-box">
                                        <input type="checkbox" name="remember-password" id="type-2">
                                        <label for="type-2">Remember Me?</label>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="check-box">
                                        <a href="{{url('forgot-password')}}" >Forgot password? </a>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <button type="submit" class="theme-btn btn-style-one">
                                        Login here
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Register Section -->

    <!-- Gallery Section -->
    <!--<section class="gallery-section">-->
    <!--    <div class="outer-container">-->
    <!--        <div class="instagram-carousel owl-carousel owl-theme">-->

                <!-- Insta Gallery -->
    <!--            <div class="insta-gallery">-->
    <!--                <img src="{{ asset('frontend') }}/assets/images/gallery/1.jpg" alt="24short-img">-->
    <!--                <div class="overlay-box">-->
    <!--                    <div class="overlay-inner">-->
    <!--                        <a class="lightbox-image icon flaticon-instagram"-->
    <!--                            href="{{ asset('frontend') }}/assets/images/gallery/1.jpg"></a>-->
    <!--                    </div>-->
    <!--                </div>-->
    <!--            </div>-->

                <!-- Insta Gallery -->
    <!--            <div class="insta-gallery">-->
    <!--                <img src="{{ asset('frontend') }}/assets/images/gallery/2.jpg" alt="24short-img">-->
    <!--                <div class="overlay-box">-->
    <!--                    <div class="overlay-inner">-->
    <!--                        <a class="lightbox-image icon flaticon-instagram"-->
    <!--                            href="{{ asset('frontend') }}/assets/images/gallery/1.jpg"></a>-->
    <!--                    </div>-->
    <!--                </div>-->
    <!--            </div>-->

                <!-- Insta Gallery -->
    <!--            <div class="insta-gallery">-->
    <!--                <img src="{{ asset('frontend') }}/assets/images/gallery/3.jpg" alt="24short-img">-->
    <!--                <div class="overlay-box">-->
    <!--                    <div class="overlay-inner">-->
    <!--                        <a class="lightbox-image icon flaticon-instagram"-->
    <!--                            href="{{ asset('frontend') }}/assets/images/gallery/3.jpg"></a>-->
    <!--                    </div>-->
    <!--                </div>-->
    <!--            </div>-->

                <!-- Insta Gallery -->
    <!--            <div class="insta-gallery">-->
    <!--                <img src="{{ asset('frontend') }}/assets/images/gallery/4.jpg" alt="24short-img">-->
    <!--                <div class="overlay-box">-->
    <!--                    <div class="overlay-inner">-->
    <!--                        <a class="lightbox-image icon flaticon-instagram"-->
    <!--                            href="{{ asset('frontend') }}/assets/images/gallery/4.jpg"></a>-->
    <!--                    </div>-->
    <!--                </div>-->
    <!--            </div>-->

                <!-- Insta Gallery -->
    <!--            <div class="insta-gallery">-->
    <!--                <img src="{{ asset('frontend') }}/assets/images/gallery/5.jpg" alt="24short-img">-->
    <!--                <div class="overlay-box">-->
    <!--                    <div class="overlay-inner">-->
    <!--                        <a class="lightbox-image icon flaticon-instagram"-->
    <!--                            href="{{ asset('frontend') }}/assets/images/gallery/5.jpg"></a>-->
    <!--                    </div>-->
    <!--                </div>-->
    <!--            </div>-->

                <!-- Insta Gallery -->
    <!--            <div class="insta-gallery">-->
    <!--                <img src="{{ asset('frontend') }}/assets/images/gallery/6.jpg" alt="24short-img">-->
    <!--                <div class="overlay-box">-->
    <!--                    <div class="overlay-inner">-->
    <!--                        <a class="lightbox-image icon flaticon-instagram"-->
    <!--                            href="{{ asset('frontend') }}/assets/images/gallery/6.jpg"></a>-->
    <!--                    </div>-->
    <!--                </div>-->
    <!--            </div>-->

    <!--        </div>-->
    <!--    </div>-->
    <!--</section>-->
    <!-- End Gallery Section -->
@endsection
