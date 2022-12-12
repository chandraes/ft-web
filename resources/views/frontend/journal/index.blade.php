@extends('layouts.frontend')
@section('content')
<!-- Page Title -->
<section class="page-title" style="background-image: url({{asset('assets_front/images/background/7.jpg')}})">
    <div class="auto-container">
        <ul class="page-breadcrumb">
            <li><a href="{{route('home')}}">home</a></li>
            <li>Journal</li>

        </ul>
        <h2>{{request()->segment(1)}}</h2>
    </div>
</section>

<!-- Testimonial Section -->
<section class="testimonial-page-section">
    <div class="auto-container">
        <div class="row clearfix">
            @foreach ($data as $d)
            <!-- Testimonial Block -->
            <div class="testimonial-block col-lg-12 col-md-12 col-sm-12">
                <div class="inner-box">
                    <div class="quote-icon flaticon-quote-2"></div>
                    <div class="author-image-outer">
                        <div class="author-image">
                            <img src="{{asset($d->image)}}" alt="{{$d->title}}" />
                        </div>
                        <h4>{{$d->title}}</h4>

                    </div>

                    <div class="text">{!! $d->content !!}</div>
                </div>
            </div>
            @endforeach




            <!--Styled Pagination-->
            {{-- <ul class="styled-pagination text-center">
                <li class="prev"><a href="#"><span class="fa fa-angle-double-left"></span> Prev</a></li>
                <li><a href="#">1</a></li>
                <li><a href="#" class="active">2</a></li>
                <li><a href="#">3</a></li>
                <li class="next"><a href="#">Next <span class="fa fa-angle-double-right"></span></a></li>
            </ul> --}}
            <!--End Styled Pagination-->

        </div>
        <div class="text-center">
            {{$data->links()}}
        </div>

</section>
@endsection
