@extends('layouts.frontend')
@section('content')
<section class="page-title" style="background-image: url({{asset('assets_front/images/background/7.jpg')}})">
    <div class="auto-container">
        <ul class="page-breadcrumb">
            <li><a href="{{route('home')}}">home</a></li>
            <li>Detail</li>
        </ul>
        <h2>{{$information->title}}</h2>
    </div>
</section>

<div class="sidebar-page-container style-two">
    <div class="auto-container">
        <div class="row clearfix">

            <!-- Content Side -->
            <div class="content-side col-lg-8 col-md-12 col-sm-12">
                <div class="blog-detail">
                    <div class="inner-box">
                        <div class="image">
                            <img src="{{asset($information->image)}}" />
                            <div class="post-date">{{date_format($information->created_at, "d")}}
                                <br><span>{{date_format($information->created_at, "M/y")}}</span>
                            </div>
                        </div>
                        <div class="lower-content">
                            <h3>{{$information->title}}</h3>
                            {!! clean($information->content) !!}
                        </div>
                    </div>
                </div>
            </div>

            @include('frontend.information.inc.side')

        </div>
    </div>
</div>
@endsection
