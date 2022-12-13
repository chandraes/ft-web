@extends('layouts.backend')
@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header border-bottom-0">
                <h3 class="card-title">Profile {{ucfirst(request()->segment(2))}}</h3>
            </div>
            <div class="card-body">
                <form action="{{route('pimpinan.update', $data->id)}}" method="POST" enctype="multipart/form-data">
                    @method('PUT')
                    @csrf
                    <div class="row mb-4">
                        <label class="col-md-2 form-label">Nama</label>
                        <div class="col-md-10">
                            <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" placeholder="Nama" value="{{$data->name}}">
                        </div>
                    </div>
                    <div class="row mb-4">
                        <label class="col-md-2 form-label">Jabatan</label>
                        <div class="col-md-10">
                            <input type="text" class="form-control @error('jabatan') is-invalid @enderror" name="jabatan" placeholder="Jabatan" value="{{$data->jabatan}}">
                        </div>
                    </div>
                    <div class="row mb-4">
                        <label class="col-md-2 form-label">Kategori Jabatan</label>
                        <div class="col-md-10">
                            <select name="category_pimpinan_id" class="form-control form-select @error('category_pimpinan_id')
                            is-invalid
                            @enderror ">
                                <option value="">Pilih Kategori Jabatan</option>
                                @foreach ($category as $c)
                                <option @if ($data->category_pimpinan_id == $c->id)
                                    selected
                                    @endif value="{{$c->id}}">{{$c->name}}</option>
                                @endforeach
                            </select>

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
                    <textarea class="content" name="description">{{clean($data->description)}}</textarea>
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
