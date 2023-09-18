@extends('layouts.backend')
@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header border-bottom-0">
                <h3 class="card-title">Add {{ucfirst(request()->segment(2))}}</h3>
            </div>
            <div class="card-body">
                <form action="{{route('lab-equipment.update', $data->id)}}" method="post"  enctype="multipart/form-data">
                    @method('PUT')
                    @csrf
                    <input type="hidden" name="lab_id" value="{{$data->lab_id}}">
                    <div class="row mb-4">
                        <label class="col-md-2 form-label">Nama Alat</label>
                        <div class="col-md-10">
                            <input type="text" class="form-control @error('name') is-invalid @enderror"
                                name="name" placeholder="Nama Alat" value="{{$data->name}}">
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
                    @if ($data->labEquipmentImage->count() > 0)
                    <div class="row mb-4">
                        <div class="col-md-2"></div>
                        <div class="col-md-5">
                            <div class="row">
                                <table class="table">
                                @foreach ($data->labEquipmentImage as $item)
                                        <tr>
                                            <td class="align-middle">Image</td>
                                            <td class="align-middle">:</td>
                                            <td class="align-middle"><img src="{{asset($item->eq_image)}}" alt="" class="img-fluid img-cover" width="100px"></td>
                                            <td class="align-middle"><a onclick="return confirm('Are you sure?')" href="{{route('lab-equipment-image.delete', $item->id)}}" class="btn btn-danger mt-2">Delete</a></td>
                                        </tr>
                                @endforeach

                            </table>
                            </div>
                        </div>
                    </div>
                    @endif
                    <div class="row mb-4">
                        <label class="col-md-2 form-label">Standar Pengujian <br> <span style="color: #929292">
                                *Pisahkan dengan (;)</span> </label>
                        <div class="col-md-10">
                            <input type="text" name="std_pengujian" id="pengujian-tag"
                                class="form-control tagify @error('std_pengujian') is-invalid @enderror" value="{{$data->std_pengujian}}"/>
                            @error('std_pengujian')
                            <span class="text-red">{{$message}}</span>
                            @enderror
                        </div>
                    </div>
                    {{-- button save and cancel --}}
                    <div class="row">
                        <div class="col-md-12 text-center">
                            <button type="submit" class="btn btn-primary">Update</button>
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