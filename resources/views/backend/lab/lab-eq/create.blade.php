@extends('layouts.backend')
@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header border-bottom-0">
                <h3 class="card-title">Add {{ucfirst(request()->segment(2))}}</h3>
            </div>
            <div class="card-body">
                <form action="{{route('lab-equipment.store')}}" method="post"  enctype="multipart/form-data">
                    @method('POST')
                    @csrf
                    <input type="hidden" name="lab_id" value="{{$labId}}">
                    <div class="row mb-4">
                        <label class="col-md-2 form-label">Nama Alat</label>
                        <div class="col-md-10">
                            <input type="text" class="form-control @error('name') is-invalid @enderror"
                                name="name" placeholder="Nama Alat">
                            @error('name')
                            <span class="text-red">{{$message}}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="row mb-4">
                        <label class="col-md-2 form-label">Equipment Image <br> (* Multiple Image)</label>
                        <div class="col-md-10">
                            <div class="form-group">
                                <div class="file-upload-wrapper" data-text="Select your file!"><input id="gallery"
                                        name="eq_image[]" type="file" class="form-control" value=""
                                        accept=".jpg, .png, image/jpeg, image/png" multiple></div>
                            </div>
                        </div>
                    </div>
                    <div class="row mb-4">
                        <label class="col-md-2 form-label">Dosen yang menguji</label>
                        <div class="col-md-10">
                            <select class="form-control select2 @error('dosen_uji') is-invalid @enderror"
                                data-placeholder="Choose team" multiple name="dosen_uji[]">
                                @foreach ($dosen as $d)
                                <option value="{{$d->id}}">
                                    {{$d->name}}
                                </option>
                                @endforeach
                            </select>
                            @error('dosen_uji')
                            <span class="text-red">{{$message}}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="row mb-4">
                        <label class="col-md-2 form-label">Pengujian <br> <span style="color: #929292"> *Pisahkan dengan
                                (;)</span> </label>
                        <div class="col-md-10">
                            <input type="text" name="pengujian" id="pengujian-tag"
                                class="form-control tagify @error('pengujian') is-invalid @enderror" />
                            @error('pengujian')
                            <span class="text-red">{{$message}}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="row mb-4">
                        <label class="col-md-2 form-label">Standar Pengujian <br> <span style="color: #929292">
                                *Pisahkan dengan (;)</span> </label>
                        <div class="col-md-10">
                            <input type="text" name="std_pengujian" id="pengujian-tag"
                                class="form-control tagify @error('std_pengujian') is-invalid @enderror" />
                            @error('std_pengujian')
                            <span class="text-red">{{$message}}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="row mb-4">
                        <label class="col-md-2 form-label">Capaian <br> <span style="color: #929292"> *Pisahkan dengan
                                (;)</span> </label>
                        <div class="col-md-10">
                            <input type="text" name="capaian" id="pengujian-tag"
                                class="form-control tagify @error('capaian') is-invalid @enderror" />
                            @error('capaian')
                            <span class="text-red">{{$message}}</span>
                            @enderror
                        </div>
                    </div>
                    {{-- button save and cancel --}}
                    <div class="row">
                        <div class="col-md-12 text-center">
                            <button type="submit" class="btn btn-primary">Save</button>
                            <a href="{{route('lab-equipment')}}" class="btn btn-danger">Cancel</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
@push('css')
<link href="https://cdn.jsdelivr.net/npm/@yaireo/tagify/dist/tagify.css" rel="stylesheet" type="text/css" />
@endpush
@push('js')
<script src="{{asset('assets/plugins/select2/select2.full.min.js')}}"></script>
<script src="https://cdn.jsdelivr.net/npm/@yaireo/tagify"></script>
<script src="https://cdn.jsdelivr.net/npm/@yaireo/tagify/dist/tagify.polyfills.min.js"></script>
<script>
    const inputAll = document.querySelectorAll('.tagify');
    
    inputAll.forEach(function (input) {
        new Tagify(input, {
            delimiters: ";",
        })
    });

    $(document).ready(function () {
        $('.select2').select2();
    });
</script>
@endpush