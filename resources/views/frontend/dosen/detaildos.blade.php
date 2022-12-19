@extends('layouts.frontend')
@section('content')
<!-- Page Title -->
<section class="page-title" style="background-image: url({{asset('assets_front/images/background/11.jpg')}})">
    <div class="auto-container">
        <ul class="page-breadcrumb">
            <li><a href="{{route('home')}}">home</a></li>
            <li>Dosen</li>
        </ul>
        <h2>{{$dosen->jabatan}}</h2>
    </div>
</section>
<!-- End Page Title -->

<!-- Team Detail Section -->
<section class="team-single-section">
    <div class="auto-container">
        <div class="row clearfix">

            <!-- Image Column -->
            <div class="image-column col-lg-4 col-md-12 col-sm-12">
                <div class="inner-column wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
                    <div class="image">
                        <img src="{{asset($dosen->image)}}" alt="" />
                    </div>
                </div>
            </div>

            <!-- Content Column -->
            <div class="content-column col-lg-8 col-md-12 col-sm-12">
                <div class="inner-column">
                    <h2>{{$dosen->name}}</h2>
                    {{-- <h2><span class="category">{{$dosen->jurusan_prodi}}</span></h2> --}}
                    <div class="my-4">
                        <h5>
                            Research Interest : @if ($dosen->research_interest && $dosen->research_interest->count() >
                            0)
                            @foreach ($dosen->research_interest as $item)
                            <span class="badge badge-success"> {{$item->name}} </span>
                            @endforeach
                            @endif
                        </h5>
                    </div>
                    <ul class="post-meta">

                        <li><span class="icon flaticon-email-1"></span> <a
                                href="mailto:{{$dosen->email}}">{{$dosen->email}}</a></li>
                        {{-- <li><span class="icon flaticon-call"></span> <a href="tel:000-000-0000">000 - 000 -
                                0000</a></li>
                        <li><span class="icon fa fa-whatsapp"></span> <a href="tel:999-999-9999">999 - 999 - 9999</a>
                        </li> --}}
                    </ul>
                    <div class="text my-6">
                        {!! clean($dosen->description) !!}
                    </div>

                    <!-- Social Box -->

                </div>
            </div>

        </div>
    </div>
</section>
<!-- End Team Detail Section -->
{{-- <section class="process-section"
    style="background-image:url({{asset('assets_front/images/background/pattern-8.png')}})">
    <div class="auto-container">
        <!-- Sec Title -->
        <div class="sec-title centered">

            <h2>PUBLIKASI</h2>
        </div>
        <div class="row clearfix">

            <!-- Process Block -->
            <a href="{{$dosen->gs_link}}" target="_blank" class="process-block col-lg-3 col-md-6 col-sm-12">
                <div class="inner-box wow flipInY" data-wow-delay="0ms" data-wow-duration="1500ms">

                    <div class="color-layer"></div>
                    <div class="color-layer-two-custom"></div>
                    <div class="icon"><img style="width: 100px" src="{{asset('images/google.png')}}" alt="scopus"></div>
                    <h5>Google <br>Scholar</h5>
                </div>
            </a>

            <!-- Process Block -->
            <a class="process-block col-lg-3 col-md-6 col-sm-12" target="_blank" href="{{$dosen->scopus_link}}">
                <div class="inner-box wow flipInY" data-wow-delay="150ms" data-wow-duration="1500ms">
                    <div class="color-layer"></div>
                    <div class="color-layer-two-custom"></div>
                    <div class="icon"><img style="width: 100px" src="{{asset('images/elsevier.png')}}" alt="scopus">
                    </div>
                    <h5>Scopus</h5>
                </div>
            </a>

            <!-- Process Block -->
            <a class="process-block col-lg-3 col-md-6 col-sm-12" target="_blank" href="{{$dosen->sinta_link}}"
                style="height: 200px">
                <div class="inner-box wow flipInY" data-wow-delay="300ms" data-wow-duration="1500ms">

                    <div class="color-layer"></div>
                    <div class="color-layer-two-custom"></div>
                    <div class="icon"><img style="width: 100px" src="{{asset('images/sinta-logo.png')}}" alt="scopus">
                    </div>
                    <h5>Sinta</h5>
                </div>
            </a>

            <!-- Process Block -->
            <a class="process-block col-lg-3 col-md-6 col-sm-12">
                <div class="inner-box wow flipInY" data-wow-delay="450ms" data-wow-duration="1500ms">

                    <div class="color-layer"></div>
                    <div class="color-layer-two-custom"></div>
                    <div class="icon"><img style="width: 100px" src="{{asset('images/wos-logo.png')}}" alt="scopus">
                    </div>
                    <h5>WoS (Web <br>of Science)</h5>
                </div>
            </a>

        </div>
    </div>
</section> --}}

<section class="counter-section-two">
    <div class="auto-container">

        <!-- Sec Title -->
        <div class="sec-title centered">

            <h2>-- PUBLIKASI --</h2>
        </div>
        <!-- Fact Counter -->
        <div class="fact-counter-two">
            <div class="row clearfix">

                <!-- Column -->
                <a class="column counter-column col-lg-3 col-md-6 col-sm-12" target="_blank" href="{{$dosen->gs_link}}">
                    <div class="inner wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
                        <div class="content">
                            <div class="icon"><img style="width: 60px" src="{{asset('images/google-white.png')}}"
                                    alt="google-scholar"></div>
                            <div class="counter-title">
                                <h4>Google Scholar</h4>
                            </div>

                        </div>
                    </div>
                </a>

                <!-- Column -->
                <a class="column counter-column col-lg-3 col-md-6 col-sm-12" target="_blank"
                    href="{{$dosen->scopus_link}}">
                    <div class="inner wow fadeInLeft" data-wow-delay="300ms" data-wow-duration="1500ms">
                        <div class="content">
                            <div class="icon"><img style="width: 60px" src="{{asset('images/elsevier-white.png')}}"
                                    alt="scopus"></div>
                            <div class="counter-title">
                                <h4>Scopus</h4>
                            </div>
                        </div>
                    </div>
                </a>

                <!-- Column -->
                <a class="column counter-column col-lg-3 col-md-6 col-sm-12" target="_blank"
                    href="{{$dosen->sinta_link}}">
                    <div class="inner wow fadeInLeft" data-wow-delay="600ms" data-wow-duration="1500ms">
                        <div class="content">
                            <div class="icon"><img style="width: 60px" src="{{asset('images/sinta-white.png')}}"
                                    alt="sinta"></div>
                            <div class="counter-title">
                                <h4>Sinta</h4>
                            </div>
                        </div>
                    </div>
                </a>

                <!-- Column -->
                <a class="column counter-column col-lg-3 col-md-6 col-sm-12" target="_blank"
                    href="{{$dosen->wos_link}}">
                    <div class="inner wow fadeInLeft" data-wow-delay="900ms" data-wow-duration="1500ms">
                        <div class="content">
                            <div class="icon"><img style="width: 60px" src="{{asset('images/wos-white.png')}}"
                                    alt="sinta"></div>
                            <div class="counter-title">
                                <h4>WoS (Web of Science)</h4>
                            </div>
                        </div>
                    </div>
                </a>

            </div>
        </div>

    </div>
</section>

<section class="process-section"
    style="background-image:url({{asset('assets_front/images/background/pattern-8.png')}})">
    <div class="auto-container">
        <!-- Sec Title -->
        <div class="sec-title centered">

            <h2>-- Pengampu Mata Kuliah --</h2>
        </div>
        <div class="row clearfix">
            @if ($dosen->mata_kuliah && $dosen->mata_kuliah->count() > 0)
            <table class="table table-bordered table-hover">
                <thead>
                    <tr>
                        <th class="text-center">No</th>
                        <th>Kode MK</th>
                        <th>Nama MK</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($dosen->mata_kuliah as $m)
                    <tr>
                        <td class="text-center">{{$loop->iteration}}</td>
                        <td>{{$m->kode}}</td>
                        <td>{{$m->name}}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            @else
            <h2 class="title">
                Nothing to show!!
            </h2>
            @endif
        </div>
    </div>
</section>
@endsection
