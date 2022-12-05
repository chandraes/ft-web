@extends('layouts.frontend')
@section('content')

<section class="page-title" style="background-image: url({{asset('assets_front/images/background/7.jpg')}})">
    <div class="auto-container">
        <ul class="page-breadcrumb">
            <li><a href="{{route('home')}}">home</a></li>
            <li>Leader</li>
        </ul>
        <h2>Pimpinan</h2>
    </div>
</section>
<!-- End Page Title -->

<!-- Team Section -->
<section class="team-page-section">
    <div class="auto-container">
        <!-- Sec Title -->
        <div class="sec-title centered">
            <div class="title"><span class="separator"></span>Our Leader<span class="separator-two"></span></div>
            <h2>Dekan</h2>
        </div>

        <div class="row clearfix aligns-items-center justify-content-center">
            <!-- Team Block -->
            @foreach ($pimpinans as $p)
                @if ($p->category_pimpinan_id = 1)
                <div class="team-block col-lg-4 col-md-6 col-sm-12 ">
                    <div class="inner-box wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
                        <div class="pattern-layer" style="background-image:url({{asset($p->image)}})"></div>
                        <div class="image">
                            <a href="team-detail.html"><img src="{{asset($p->image)}}" /></a>
                            <!-- Social Box -->
                        </div>
                        <div class="lower-content">
                            <h4><a href="team-detail.html">{{$p->name}}</a></h4>
                            <div class="designation">{{$p->jabatan}}</div>
                        </div>
                    </div>
                </div>
                @endif
            @endforeach



        </div>

        <div class="sec-title centered my-10">
            <div class="title"><span class="separator"></span>Our Leader<span class="separator-two"></span></div>
            <h2>Wakil Dekan</h2>
        </div>
        <div class="row clearfix">
            <!-- Team Block -->
            <div class="team-block col-lg-4 col-md-6 col-sm-12">
                <div class="inner-box wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
                    <div class="pattern-layer" style="background-image:url({{asset('assets_front/images/background/pattern-4.jpg')}})"></div>
                    <div class="image">
                        <a href="team-detail.html"><img src="images/resource/team-1.jpg" /></a>
                        <!-- Social Box -->
                    </div>
                    <div class="lower-content">
                        <h4><a href="team-detail.html">Jhon Castellon</a></h4>
                        <div class="designation">Builder Advisor</div>
                    </div>
                </div>
            </div>

            <!-- Team Block -->
            <div class="team-block col-lg-4 col-md-6 col-sm-12">
                <div class="inner-box wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
                    <div class="pattern-layer" style="background-image:url(images/background/pattern-4.jpg)"></div>
                    <div class="image">
                        <a href="team-detail.html"><img src="images/resource/team-2.jpg" /></a>

                    </div>
                    <div class="lower-content">
                        <h4><a href="team-detail.html">Nelson Mecoy</a></h4>
                        <div class="designation">Architecture</div>
                    </div>
                </div>
            </div>

            <!-- Team Block -->
            <div class="team-block col-lg-4 col-md-6 col-sm-12">
                <div class="inner-box wow fadeInRight" data-wow-delay="0ms" data-wow-duration="1500ms">
                    <div class="pattern-layer" style="background-image:url(images/background/pattern-4.jpg)"></div>
                    <div class="image">
                        <a href="team-detail.html"><img src="images/resource/team-3.jpg" /></a>

                    </div>
                    <div class="lower-content">
                        <h4><a href="team-detail.html">Celsiya Malcom</a></h4>
                        <div class="designation">Marketing Adcisor</div>
                    </div>
                </div>
            </div>

            <!-- Team Block -->
            <div class="team-block col-lg-4 col-md-6 col-sm-12">
                <div class="inner-box wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
                    <div class="pattern-layer" style="background-image:url(images/background/pattern-4.jpg)"></div>
                    <div class="image">
                        <a href="team-detail.html"><img src="images/resource/team-1.jpg" /></a>

                    </div>
                    <div class="lower-content">
                        <h4><a href="team-detail.html">Jhon Castellon</a></h4>
                        <div class="designation">Builder Advisor</div>
                    </div>
                </div>
            </div>

            <!-- Team Block -->
            <div class="team-block col-lg-4 col-md-6 col-sm-12">
                <div class="inner-box wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
                    <div class="pattern-layer" style="background-image:url(images/background/pattern-4.jpg)"></div>
                    <div class="image">
                        <a href="team-detail.html"><img src="images/resource/team-2.jpg" /></a>

                    </div>
                    <div class="lower-content">
                        <h4><a href="team-detail.html">Nelson Mecoy</a></h4>
                        <div class="designation">Architecture</div>
                    </div>
                </div>
            </div>

            <!-- Team Block -->
            <div class="team-block col-lg-4 col-md-6 col-sm-12">
                <div class="inner-box wow fadeInRight" data-wow-delay="0ms" data-wow-duration="1500ms">
                    <div class="pattern-layer" style="background-image:url(images/background/pattern-4.jpg)"></div>
                    <div class="image">
                        <a href="team-detail.html"><img src="images/resource/team-3.jpg" /></a>

                    </div>
                    <div class="lower-content">
                        <h4><a href="team-detail.html">Celsiya Malcom</a></h4>
                        <div class="designation">Marketing Adcisor</div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>
@endsection
