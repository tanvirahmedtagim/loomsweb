@extends('frontend.layout.master')
@section('title')
   Confirm Booking - Looms
@endsection
@section('content')
        	<!-- Page Title -->
            <section class="page-title">
                <div class="auto-container">
                    <h2>Confirm Booking</h2>
                    <ul class="bread-crumb clearfix">
                        <li><a href="{{route('index')}}">Home</a></li>
                        
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
                        <div class="column col-lg-6 col-md-12 col-sm-12 offset-lg-3 text-center">
                            <!-- Login Form -->
                            <div class="styled-form ">
                                <h4 class="text-success">
                                    @if(Session::has('success'))
                                        {{Session::get('success')}}
                                    @endif
                                </h4>
                                <a href="{{ route('index') }}" class="btn btn-lg btn-info-success">Thanks</a>
                            </div>
                        </div>
                        <!-- Column -->
                  
                    </div>
                </div>
            </div>
        </div>
        <!-- End Register Section -->
@endsection