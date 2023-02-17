@extends('layouts.backend')
@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header border-bottom-0">
                <h3 class="card-title">Edit {{ucfirst(request()->segment(2))}}</h3>
            </div>
            <div class="card-body">
                <form action="{{route('mata-kuliah.update', $data->id)}}" method="POST">
                    @method('PUT')
                    @csrf
                    <div class="row mb-4">
                        <label class="col-md-2 form-label">Kode Mata Kuliah</label>
                        <div class="col-md-10">
                            <input type="text" class="form-control @error('kode') is-invalid @enderror" name="kode" value="{{$data->kode}}"
                                placeholder="Kode mata kuliah">
                            @error('kode')
                            <span class="text-red">{{$message}}</span>
                            @enderror
                        </div>

                    </div>
                    <div class="row mb-4">
                        <label class="col-md-2 form-label">Nama Mata Kuliah</label>
                        <div class="col-md-10">
                            <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{$data->name}}"
                                placeholder="Nama Mata Kuliah">
                            @error('name')
                            <span class="text-red">{{$message}}</span>
                            @enderror
                        </div>

                    </div>
                    <div class="row mt-4">
                        <div class="col-lg-6 col-md-6 col-12 mt-4 btn-list">
                            <button type="submit" class="btn btn-success px-8 mt-2 btn-block">Update</button>
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
