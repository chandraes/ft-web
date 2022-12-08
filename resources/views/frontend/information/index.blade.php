@extends('layouts.frontend')
@section('content')
<section class="page-title" style="background-image: url({{asset('assets_front/images/background/7.jpg')}})">
    <div class="auto-container">
        <ul class="page-breadcrumb">
            <li><a href="{{route('home')}}">home</a></li>
            <li>{{request()->segment(3)}}</li>
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
                    @foreach ($information as $d)
                    <div class="news-block-four">
                        <div class="inner-box">
                            <div class="image">
                                <a href="news-detail.html"><img src="{{asset($d->image)}}" /></a>
                                <div class="post-date">{{date_format($d->created_at, "d")}}
                                    <br><span>{{date_format($d->created_at, "M/y")}}</span></div>
                            </div>
                            <div class="lower-content mt-3">
                                <h3><a href="news-detail.html">{{$d->title}}</a></h3>
                                <div class="text mb-6">
                                    @php
                                    @endphp
                                </div>
                                <a class="read-more mt-6" href="news-detail.html">Read More</a>
                            </div>
                        </div>
                    </div>
                    @endforeach
                    <!-- News Block Four -->


                    <!-- News Block Four -->


                    <!--Styled Pagination-->
                    <ul class="styled-pagination text-center">
                        <li class="prev"><a href="#"><span class="fa fa-angle-double-left"></span> Prev</a></li>
                        <li><a href="#">1</a></li>
                        <li><a href="#" class="active">2</a></li>
                        <li><a href="#">3</a></li>
                        <li class="next"><a href="#">Next <span class="fa fa-angle-double-right"></span></a></li>
                    </ul>
                    <!--End Styled Pagination-->

                </div>
            </div>

            <!-- Sidebar Side -->
            <div class="sidebar-side col-lg-4 col-md-12 col-sm-12">
                <aside class="sidebar sticky-top">

                    <!-- Search Widget -->
                    <div class="sidebar-widget search-box">
                        <div class="widget-content">
                            <div class="sidebar-title">
                                <h4>Search</h4>
                            </div>
                            <form method="post" action="contact.html">
                                <div class="form-group">
                                    <input type="search" name="search-field" value="" placeholder="Search Here"
                                        required>
                                    <button type="submit"><span class="icon fa fa-search"></span></button>
                                </div>
                            </form>
                        </div>
                    </div>

                    <!-- Categories Widget -->
                    <div class="sidebar-widget categories-widget">
                        <div class="widget-content">
                            <div class="sidebar-title">
                                <h4>Categories</h4>
                            </div>
                            <ul class="blog-cat">
                                <li><a href="portfolio-detail.html">General Contracting <span>( 01 )</span></a></li>
                                <li><a href="portfolio-detail.html">Apartment Design <span>( 25 )</span></a></li>
                                <li><a href="portfolio-detail.html">Metrial Managment <span>( 66 )</span></a></li>
                                <li><a href="portfolio-detail.html">Building Renovation <span>( 12 )</span></a></li>
                                <li><a href="portfolio-detail.html">Building Construction <span>( 11 )</span></a></li>
                                <li><a href="portfolio-detail.html">Architecture Design <span>( 02 )</span></a></li>
                            </ul>
                        </div>
                    </div>

                    <!-- Posts Widget -->
                    <div class="sidebar-widget popular-posts">
                        <div class="widget-content">
                            <div class="sidebar-title">
                                <h4>Popular Articles</h4>
                            </div>
                            <article class="post">
                                <figure class="post-thumb"><img src="images/resource/post-thumb-3.jpg" alt=""><a
                                        href="news-detail.html" class="overlay-box"><span
                                            class="icon fa fa-link"></span></a></figure>
                                <div class="text"><a href="news-detail.html">Commercial design for project</a></div>
                                <div class="post-info">November 21, 2021</div>
                            </article>
                            <article class="post">
                                <figure class="post-thumb"><img src="images/resource/post-thumb-4.jpg" alt=""><a
                                        href="news-detail.html" class="overlay-box"><span
                                            class="icon fa fa-link"></span></a></figure>
                                <div class="text"><a href="news-detail.html">Guide to remodeling your building.</a>
                                </div>
                                <div class="post-info">November 28, 2021</div>
                            </article>
                            <article class="post">
                                <figure class="post-thumb"><img src="images/resource/post-thumb-5.jpg" alt=""><a
                                        href="news-detail.html" class="overlay-box"><span
                                            class="icon fa fa-link"></span></a></figure>
                                <div class="text"><a href="news-detail.html">Best factory award of the year 2021</a>
                                </div>
                                <div class="post-info">December 04, 2021</div>
                            </article>
                            <article class="post">
                                <figure class="post-thumb"><img src="images/resource/post-thumb-6.jpg" alt=""><a
                                        href="news-detail.html" class="overlay-box"><span
                                            class="icon fa fa-link"></span></a></figure>
                                <div class="text"><a href="news-detail.html">What are the benefits of Leed
                                        certification?</a></div>
                                <div class="post-info">December 04, 2021</div>
                            </article>
                        </div>
                    </div>

                </aside>
            </div>

        </div>
    </div>
</div>
@endsection
