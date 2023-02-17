@extends('layouts.frontend')
@section('content')
<!-- Page Title -->
<section class="page-title" style="background-image: url({{asset('assets_front/images/background/7.jpg')}})">
    <div class="auto-container">
        <ul class="page-breadcrumb">
            <li><a href="{{route('home')}}">home</a></li>
            <li>Contact Us</li>

        </ul>
        <h2>{{request()->segment(1)}} Us</h2>
    </div>
</section>

<!-- Contact Info Section -->
<section class="contact-info-section">
    <div class="auto-container">
        <!-- Sec Title -->
        <div class="sec-title centered">
            <div class="title"><span class="separator"></span>Contact Information<span class="separator-two"></span></div>

        </div>
        <div class="row clearfix">

            <!-- Info Column -->
            <div class="info-column col-lg-4 col-md-6 col-sm-12">
                <div class="inner-column">
                    <div class="icon flaticon-maps-and-flags"></div>
                    <strong>Address:</strong>
                    {{$data->address}}<br>
                </div>
            </div>

            <!-- Info Column -->
            <div class="info-column col-lg-4 col-md-6 col-sm-12">
                <div class="inner-column">
                    <div class="icon flaticon-telephone-1"></div>
                    <strong>Call:</strong>
                    Phone : <a href="tel:{{$data->phone}}">{{$data->phone}}</a><br>
                    Fax : <a href="tel:{{$data->fax}}">{{$data->fax}}</a>
                </div>
            </div>

            <!-- Info Column -->
            <div class="info-column col-lg-4 col-md-6 col-sm-12">
                <div class="inner-column">
                    <div class="icon flaticon-email-2"></div>
                    <strong>E-Mail:</strong>
                    Email : <a href="mailto:{{$data->email}}">{{$data->email}}</a><br>
                </div>
            </div>

        </div>
    </div>
</section>

<!-- Map Section -->
<section class="map-section-section">
    <!-- Map Boxed -->
    <div class="map-boxed">
        <!-- Map Outer -->
        <div class="map-outer">
            <iframe src="{!!$data->map!!}" width="100%" height="560px" frameborder="0" style="border:0;"
                allowfullscreen=""></iframe>
        </div>
    </div>
</section>
@endsection
