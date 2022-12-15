@extends('layouts.frontend')
@section('content')

<section class="page-title" style="background-image: url({{asset('assets_front/images/background/9.jpg')}})">
    <div class="auto-container">
        <ul class="page-breadcrumb">
            <li><a href="{{route('home')}}">home</a></li>
        </ul>
        <h2>laboratorium</h2>
    </div>
</section>

<!-- Project Section -->
<section class="project-section">
    <div class="side-image">
        <img src="images/resource/project.png" alt="" />
    </div>
    <div class="auto-container">
        <!-- MixitUp Galery -->
        <div class="mixitup-gallery">

            <!-- Filter -->
            <div class="filters clearfix">

                <ul class="filter-tabs filter-btns text-center clearfix">
                    <li class="active filter" data-role="button" data-filter="all">SEMUA</li>
                    <li class="filter" data-role="button" data-filter=".architecture">MESIN</li>
                    <li class="filter" data-role="button" data-filter=".building">SIPIL</li>
                    <li class="filter" data-role="button" data-filter=".construction">PERTAMBANGAN</li>
                    <li class="filter" data-role="button" data-filter=".industrial">ELEKTRO</li>
                    <li class="filter" data-role="button" data-filter=".industrial">KIMIA</li>
                    <li class="filter" data-role="button" data-filter=".industrial">GEOLOGI</li>
                    <li class="filter" data-role="button" data-filter=".industrial">ARSITEKTUR</li>
                </ul>

            </div>
@endsection

