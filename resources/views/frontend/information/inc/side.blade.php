@php
    $category = App\Models\Informasi\CategoryInformation::withCount('information')->get();
    $last = App\Models\Informasi\Informasi::latest()->take(4)->get();
@endphp

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
                    @foreach ($category as $c)
                    <li><a href="{{route('information', ['id'=> $c->id, 'name'=> $c->name])}}">{{$c->name}}
                            <span>( {{$c->information_count}} )</span></a></li>
                    @endforeach
                </ul>
            </div>
        </div>

        <!-- Posts Widget -->
        <div class="sidebar-widget popular-posts">
            <div class="widget-content">
                <div class="sidebar-title">
                    <h4>Lastest Articles</h4>
                </div>
                @foreach ($last as $l)
                <article class="post">
                    <figure class="post-thumb"><img src="{{asset($l->image)}}" alt=""><a
                            href="{{route('detail-information', $l->id)}}" class="overlay-box"><span
                                class="icon fa fa-link"></span></a></figure>
                    <div class="text"><a href="{{route('detail-information', $l->id)}}">{{$l->title}}</a></div>
                    <div class="post-info">{{date_format($l->created_at, "F d, Y")}}</div>
                </article>
                @endforeach

            </div>
        </div>

    </aside>
</div>
