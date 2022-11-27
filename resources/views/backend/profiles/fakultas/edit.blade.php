@extends('layouts.backend')
@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header border-bottom-0">
                <h3 class="card-title">Profile {{ucfirst(request()->segment(2))}}</h3>
            </div>
            <div class="card-body">
                <form action="{{route('fakultas.update', $data->id)}}" method="POST" enctype="multipart/form-data">
                    @method('PUT')
                    @csrf
                    <div class="row mb-4">
                        <label class="col-md-2 form-label">Title</label>
                        <div class="col-md-10">
                            <input type="text" class="form-control @error('title') is-invalid @enderror" name="title" placeholder="Nama" value="{{$data->title}}">
                        </div>
                    </div>
                    <div class="row mb-4">
                        <label class="col-md-2 form-label">Subtitle</label>
                        <div class="col-md-10">
                            <input type="text" class="form-control @error('subtitle') is-invalid @enderror" name="subtitle" placeholder="Jabatan" value="{{$data->subtitle}}">
                        </div>
                    </div>

                    <div class="row mb-4">
                        <label class="col-md-2 form-label">Image</label>
                        <div class="form-group col-md-10">
                            <input class="form-control" type="file" name="image">
                        </div>
                        @if (!empty($data->image))
                        <div class="col-md-2"></div>
                        <div class="col-md-10 text-xl-right">
                            <img src="{{asset($data->image)}}" alt="image" class="thumbimg" style="width: 500px">
                        </div>
                        @endif
                    </div>
                    <div class="col-lg-12 col-md-6 col-12 my-4 float-right">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="is_active" id="invalidCheck" @if ($data->is_active == 1) checked @endif>
                            <label class="form-check-label" for="invalidCheck">Active <span class="text-muted">(*Check to activate)</span></label>
                        </div>
                    </div>
                    <textarea class="content" name="content">{{$data->content}}</textarea>
                    <div class="row mt-4">

                        <div class="col-lg-6 col-md-6 col-12 mt-4 btn-list">
                            <button type="submit" class="btn btn-success px-8 mt-2 btn-block">Save</button>
                            <a href="{{route(request()->segment(2).'.index')}}"
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

@endpush
