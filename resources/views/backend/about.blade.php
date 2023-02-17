@extends('layouts.backend')
@section('content')
@if (session('success'))
<div id="notif" class="alert alert-success">
    {{ session('success') }}
</div>
@endif
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header border-bottom-0">
                <h3 class="card-title">{{ucfirst(request()->segment(2))}}</h3>
            </div>
            <div class="card-body">
                <form action="{{route('tentang.createOrUpdate')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="row mb-4">
                        <label class="col-md-2 form-label">About</label>
                        <div class="col-md-10">
                            <textarea class="content" name="about">
                                @if (!empty($data->about))
                                {!!clean($data->about)!!}
                                @endif

                            </textarea>
                            @error('about')
                            <span class="text-red">{{$message}}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="row mb-4">
                        <label class="col-md-2 form-label">Cover Image</label>
                        <div class="form-group col-md-10">
                            <input class="form-control" type="file" name="image">
                            @error('image')
                            <span class="text-red">{{$message}}</span>
                            @enderror
                        </div>
                        @if (!empty($data->image))
                        <div class="col-md-2"></div>
                        <div class="col-md-10 text-xl-right">
                            <img src="{{asset($data->image)}}" alt="image" class="thumbimg" style="width: 500px">
                        </div>
                        @endif
                    </div>
                    <div class="row mb-4">
                        <label class="col-md-2 form-label"><span class="fa fa-phone"></span> Phone</label>
                        <div class="col-md-10">
                            <input type="text" class="form-control @error('phone') is-invalid @enderror" name="phone" value="{{$data->phone ?? ''}}"
                                placeholder="phone">
                            @error('phone')
                            <span class="text-red">{{$message}}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="row mb-4">
                        <label class="col-md-2 form-label"><span class="fa fa-fax"></span> Fax</label>
                        <div class="col-md-10">
                            <input type="text" class="form-control @error('fax') is-invalid @enderror" name="fax" value="{{$data->fax ?? ''}}"
                                placeholder="fax">
                            @error('fax')
                            <span class="text-red">{{$message}}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="row mb-4">
                        <label class="col-md-2 form-label"><span class="fa fa-envelope-open"></span> E-Mail</label>
                        <div class="col-md-10">
                            <input type="text" class="form-control @error('email') is-invalid @enderror" name="email" value="{{$data->email ?? ''}}"
                                placeholder="email">
                            @error('email')
                            <span class="text-red">{{$message}}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="row mb-4">
                        <label class="col-md-2 form-label"><span class="fa fa-map"></span> Address</label>
                        <div class="col-md-10">
                            <input type="text" class="form-control @error('address') is-invalid @enderror" name="address" value="{{$data->address ?? ''}}"
                                placeholder="address">
                            @error('address')
                            <span class="text-red">{{$message}}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="row mb-4">
                        <label class="col-md-2 form-label"><span class="fa fa-map"></span> Map</label>
                        <div class="col-md-10">
                            <input type="text" class="form-control @error('map') is-invalid @enderror" name="map" value="{{$data->map ?? ''}}"
                                placeholder="Url Embedded Map">
                            @error('map')
                            <span class="text-red">{{$message}}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="mt-6">
                        <hr>
                        <h3 >Sosial Media</h3>
                        <hr>
                    </div>

                    <div class="row mb-4">
                        <label class="col-md-2 form-label"><span class="fa fa-facebook-square"></span> Facebook</label>
                        <div class="col-md-10">
                            <input type="text" class="form-control @error('facebook') is-invalid @enderror" name="facebook" value="{{$data->facebook ?? ''}}"
                                placeholder="facebook">
                            @error('facebook')
                            <span class="text-red">{{$message}}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="row mb-4">
                        <label class="col-md-2 form-label"><span class="fa fa-instagram"></span> Instagram</label>
                        <div class="col-md-10">
                            <input type="text" class="form-control @error('instagram') is-invalid @enderror" name="instagram" value="{{$data->instagram ?? ''}}"
                                placeholder="instagram">
                            @error('instagram')
                            <span class="text-red">{{$message}}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="row mb-4">
                        <label class="col-md-2 form-label"><span class="fa fa-twitter"></span> Twitter</label>
                        <div class="col-md-10">
                            <input type="text" class="form-control @error('twitter') is-invalid @enderror" name="twitter" value="{{$data->twitter ?? ''}}"
                                placeholder="twitter">
                            @error('twitter')
                            <span class="text-red">{{$message}}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="row mb-4">
                        <label class="col-md-2 form-label"><span class="fa fa-youtube"></span> Youtube</label>
                        <div class="col-md-10">
                            <input type="text" class="form-control @error('youtube') is-invalid @enderror" name="youtube" value="{{$data->youtube ?? ''}}"
                                placeholder="youtube">
                            @error('youtube')
                            <span class="text-red">{{$message}}</span>
                            @enderror
                        </div>
                    </div>

                    <div class="row mt-4">
                        <div class="col-lg-6 col-md-6 col-12 mt-4 btn-list">
                            <button type="submit" class="btn btn-success px-8 mt-2 btn-block">Save</button>
                            <a href="{{route(request()->segment(2).'')}}"
                                class="btn btn-primary ml-2 px-8 mt-2 btn-block">Cancel</a>
                        </div>
                    </div>
                </form>

            </div>
        </div>
    </div>
</div>

@endsection
@push('css')
<link href="{{asset('assets/css/animated.css')}}" rel="stylesheet" />
@endpush
@push('js')
<!-- WYSIWYG Editor JS -->
<script src="{{asset('assets/plugins/wysiwyag/jquery.richtext.js')}}"></script>
<script src="{{asset('assets/plugins/wysiwyag/wysiwyag.js')}}"></script>
<script>

   setTimeout(() => {
           $('#notif').hide();
       }, 3000);


</script>
@endpush
