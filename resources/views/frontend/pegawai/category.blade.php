@extends('layouts.frontend')
@section('content')

<section class="page-title" style="background-image: url({{asset('assets_front/images/background/13.jpg')}})">
    <div class="auto-container">
        <ul class="page-breadcrumb">
            <li><a href="{{route('home')}}">home</a></li>
            <li>{{__('Karyawan')}}</li>
        </ul>
        <h2>{{__($category->jurusan_prodi)}}</h2>
    </div>
</section>
<!-- End Page Title -->

<!-- Team Section -->
<section class="team-page-section">
    <div class="auto-container">
        <!-- Sec Title -->
        <div class="sec-title centered">
            <div class="title"><span class="separator"></span>Our Leader<span class="separator-two"></span></div>
            <h2>Staff Kepegawaian</h2>
        </div>
        <div class="row clearfix aligns-items-center justify-content-center">
            <!-- Team Block -->
            @if ($pegawais->count() == 0)
            <h2>NO DATA</h2>
            @endif
            @foreach ($pegawais as $e)
                <div class="team-block col-lg-4 col-md-6 col-sm-12 ">
                    <div class="inner-box wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
                        <div class="pattern-layer" style="background-image:url({{asset($e->image)}})"></div>
                        <div class="image">
                            <a href="{{route('detail-employee', ['id'=> $e->id])}}"><img src="{{asset($e->image)}}" style="height: 300px"/></a>
                        </div>
                        <div class="lower-content">
                            <h4><a href="{{route('detail-employee', ['id'=> $e->id])}}">{{$e->name}}</a></h4>
                            <div class="designation">{{$e->jabatan}}</div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>


</section>
@endsection
@push('js')
<script src="https://cdnjs.cloudflare.com/ajax/libs/mixitup/3.0.0/mixitup.min.js"></script>
<script>
    const mixer = mixitup('.lab-item', {
        selectors: {
            target: '.mix'
        },
        animation: {
            duration: 300
        }
    });

    const filterBtns = document.querySelector('.filter-labs');

    filterBtns.addEventListener('click', e => {
        if (e.target.matches('.filter-lab')) {
            const filter = e.target.dataset.filter;
            mixer.filter(filter);

            //add active class
            filterBtns.querySelector('.active').classList.remove('active');
            e.target.classList.add('active', 'filter');

        }

    });
</script>
@endpush
