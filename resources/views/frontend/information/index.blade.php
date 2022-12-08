@extends('layouts.frontend')
@section('content')
<section class="page-title" style="background-image: url({{asset('assets_front/images/background/7.jpg')}})">
    <div class="auto-container">
        <ul class="page-breadcrumb">
            <li><a href="{{route('home')}}">home</a></li>
            @if (request()->routeIs('search'))
            <li>Search</li>
            @else
            <li>{{request()->segment(3)}}</li>
            @endif

        </ul>
        <h2>{{request()->segment(3)}}</h2>
    </div>
</section>

<div class="sidebar-page-container style-two">
    <div class="auto-container">
        <div class="row clearfix">

            <!-- Content Side -->
            <div class="content-side col-lg-8 col-md-12 col-sm-12">
                <div class="blog-classic">
                    @if ($information->count() == 0)
                    <h2>Nothing to Show ...</h2>
                    @endif
                    @foreach ($information as $d)
                    <div class="news-block-four">
                        <div class="inner-box">
                            <div class="image">
                                <a href="{{route('detail-information', $d->id)}}"><img src="{{asset($d->image)}}" /></a>
                                <div class="post-date">{{date_format($d->created_at, "d")}}
                                    <br><span>{{date_format($d->created_at, "M/y")}}</span>
                                </div>
                            </div>
                            <div class="lower-content mt-3">
                                <h3><a href="{{route('detail-information', $d->id)}}">{{$d->title}}</a></h3>
                                <div class="text mb-6">
                                    @php
                                    @endphp
                                </div>
                                <a class="read-more mt-6" href="{{route('detail-information', $d->id)}}">Read More</a>
                            </div>
                        </div>
                    </div>
                    @endforeach
                    <!-- News Block Four -->


                    <!-- News Block Four -->
                    <div class="text-center align-middle">
                        {{ $information->links() }}
                    </div>

                </div>
            </div>

            <!-- Sidebar Side -->
            @include('frontend.information.inc.side')

        </div>
    </div>
</div>
@endsection
