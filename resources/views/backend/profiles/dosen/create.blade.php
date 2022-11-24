@extends('layouts.backend')
@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header border-bottom-0">
                <h3 class="card-title">Profile {{ucfirst(request()->segment(1))}}</h3>
            </div>
            <div class="card-body">
                <form action="{{route('dosen.store')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="row mb-4">
                        <label class="col-md-2 form-label">Nama</label>
                        <div class="col-md-10">
                            <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" placeholder="Nama">
                        </div>
                    </div>
                    <div class="row mb-4">
                        <label class="col-md-2 form-label">Jurusan / Prodi</label>
                        <div class="col-md-10">
                            <select name="category_dosen_id" class="form-control form-select @error('category_dosen_id')
                            is-invalid
                            @enderror ">
                                <option value="">Pilih Jurusan/Prodi</option>
                                @foreach ($category as $c)
                                <option value="{{$c->id}}">{{$c->jurusan_prodi}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="row mb-4">
                        <label class="col-md-2 form-label">Image</label>
                        <div class="form-group col-md-10">
                            <input class="form-control" type="file" name="image">
                        </div>
                    </div>
                    <textarea class="content" name="description"></textarea>
                    <div class="row mt-4">

                        <div class="col-lg-6 col-md-6 col-12 mt-4 btn-list">
                            <button type="submit" class="btn btn-success px-8 mt-2 btn-block">Save</button>
                            <a href="{{route(request()->segment(1).'.index')}}"
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
