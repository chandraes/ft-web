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

<section class="project-section">
    <div class="auto-container">
        <!-- MixitUp Galery -->
        <div class="mixitup-gallery">
            <div class="filter-labs filters filter-tabs filter-btns text-center clearfix">
                <ul class="filter-tabs filter-btns text-center clearfix">
                    <li data-role="button" class="active filter-lab filter" data-filter="all">All</li>
                    @foreach ($category as $c)
                    <li data-role="button" class="filter-lab" data-filter=".{{strtolower($c->name)}}">{{strtoupper($c->name)}}</li>
                    @endforeach
                </ul>
            </div>
            <div class="lab-item row clearfix">
                @foreach ($data as $d)
                <div class="gallery-block mix all {{strtolower($d->category_name)}} col-lg-4 col-md-6 col-sm-12">
                    <div class="inner-box">
                        <figure class="image-box">
                            <img src="{{asset($d->image)}}" alt="" style="height: 300px">
                            <div class="overlay-box">
                                <div class="overlay-inner">
                                    <div class="content">
                                        <a href="{{asset($d->image)}}" data-caption="" data-fancybox="gallery"
                                            class="icon flaticon-full-screen"></a>
                                        <a href="{{route('detail-laboratory', ['id' => $d->id, 'slug' => $d->slug])}}" class="icon flaticon-link"></a>
                                    </div>
                                </div>
                            </div>
                        </figure>
                        <div class="lower-content">
                            <div class="title">{{$d->category_name}}</div>
                            <h5 style="font-size: 15px"><a href="{{route('detail-laboratory', ['id' => $d->id, 'slug' => $d->slug])}}">{{$d->name}}</a></h5>
                        </div>
                    </div>
                </div>
                @endforeach

            </div>
        </div>
    </div>

</section>


@endsection
@push('css')
{{--
<link href="{{asset('assets_front/css/try.css')}}" rel="stylesheet" /> --}}
@endpush
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
