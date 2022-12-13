@extends('layouts.frontend')
@section('content')

<section class="page-title" style="background-image: url({{asset('assets_front/images/background/8.jpg')}})">
    <div class="auto-container">
        <ul class="page-breadcrumb">
            <li><a href="{{route('home')}}">home</a></li>
        </ul>
        <h2>Visi & Misi</h2>
    </div>
</section>
<!-- End Page Title -->

<!-- Privacy Section -->
	<section class="privacy-section">
		<div class="auto-container">
            <!-- Privacy Content -->
            @foreach ($visis as $v)
            <div class="privacy-content">
                <div class="row clearfix">
                    <!-- Content Column -->
                    <div class="content-column col-lg-12 col-md-12 col-sm-12">
                        <div class="inner-column">

                            <div class="text">
                                {!!$v->visi!!}
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
    </section>

@endsection


