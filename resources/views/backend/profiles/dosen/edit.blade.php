@extends('layouts.backend')
@section('content')

<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header border-bottom-0">
                <h3 class="card-title">Profile {{ucfirst(request()->segment(2))}}</h3>
            </div>
            <div class="card-body">
                <form action="{{route('dosen.update', $data->id)}}" method="POST" enctype="multipart/form-data">
                    @method('PUT')
                    @csrf
                    <div class="row mb-4">
                        <label class="col-md-2 form-label">Nama</label>
                        <div class="col-md-10">
                            <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" placeholder="Nama" value="{{$data->name}}">
                        </div>
                    </div>
                    <div class="row mb-4">
                        <label class="col-md-2 form-label">Research Interest</label>
                        <div class="col-md-10">
                            <input type="text" class="form-control @error('tags') is-invalid @enderror" data-role="tagsinput" value="{{$data->tags}}" style="border: 1px solid #ced4da;"
                            name="tags" placeholder="Pisahkan dengan (,)">
                            @error('tags')
                            <span class="text-red">{{$message}}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="row mb-4">
                        <label class="col-md-2 form-label">E-Mail</label>
                        <div class="col-md-10">
                            <input type="email" class="form-control @error('email') is-invalid @enderror" value="{{$data->email}}"
                            name="email" placeholder="Ex: abcd@xx.com / defgh@abc.ac.id">
                            @error('email')
                            <span class="text-red">{{$message}}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="row mb-4">
                        <label class="col-md-2 form-label">Jurusan / Prodi</label>
                        <div class="col-md-10">
                            <select name="category_dosen_id" class="form-control form-select @error('category_dosen_id')
                            is-invalid
                            @enderror ">
                                <option value="">Pilih Jurusan / Prodi</option>
                                @foreach ($category as $c)
                                <option @if ($data->category_dosen_id == $c->id)
                                    selected
                                    @endif value="{{$c->id}}">{{$c->jurusan_prodi}}</option>
                                @endforeach
                            </select>

                        </div>
                    </div>
                    <div class="row mb-4">
                        <label class="col-md-2 form-label">Mata Kuliah</label>
                        <div class="col-md-10">
                            <select class="form-control select2 @error('mata_kuliah_id') is-invalid @enderror" data-placeholder="Dosen Mata kuliah" multiple name="mata_kuliah_id[]">
                                @foreach ($mk as $d)
                                <option value="{{$d->id}}"
                                    @if (in_array($d->id, $data->mk_dosen->pluck('mata_kuliah_id')->toArray()))
                                    selected
                                    @endif
                                    >
                                    {{$d->kode}} - {{$d->name}}
                                </option>
                                @endforeach
                            </select>
                            @error('mata_kuliah_id')
                            <span class="text-red">{{$message}}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="row mb-4">
                        <label class="col-md-2 form-label">Google Scholar</label>
                        <div class="col-md-10">
                            <input type="text" class="form-control @error('gs_link') is-invalid @enderror" name="gs_link" value="{{$data->gs_link}}"
                            placeholder="Url to Google Scholar">
                            @error('gs_link')
                            <span class="text-red">{{$message}}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="row mb-4">
                        <label class="col-md-2 form-label">Scopus</label>
                        <div class="col-md-10">
                            <input type="text" class="form-control @error('scopus_link') is-invalid @enderror" name="scopus_link" value="{{$data->scopus_link}}"
                            placeholder="Url to Scopus">
                            @error('scopus_link')
                            <span class="text-red">{{$message}}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="row mb-4">
                        <label class="col-md-2 form-label">Sinta</label>
                        <div class="col-md-10">
                            <input type="text" class="form-control @error('sinta_link') is-invalid @enderror" name="sinta_link" value="{{$data->sinta_link}}"
                            placeholder="Url to Sinta">
                            @error('sinta_link')
                            <span class="text-red">{{$message}}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="row mb-4">
                        <label class="col-md-2 form-label">WoS (Web of Science)</label>
                        <div class="col-md-10">
                            <input type="text" class="form-control @error('wos_link') is-invalid @enderror" name="wos_link" value="{{$data->wos_link}}"
                            placeholder="Url to WoS (Web of Science)">
                            @error('wos_link')
                            <span class="text-red">{{$message}}</span>
                            @enderror
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
<link
      href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-tagsinput/0.8.0/bootstrap-tagsinput.css"
      rel="stylesheet"
    />
@endpush
@push('js')
<!-- WYSIWYG Editor JS -->
<script src="{{asset('assets/plugins/wysiwyag/jquery.richtext.js')}}"></script>
<script src="{{asset('assets/plugins/wysiwyag/wysiwyag.js')}}"></script>
<script src="{{asset('assets/plugins/select2/select2.full.min.js')}}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-tagsinput/0.8.0/bootstrap-tagsinput.js"></script>

<script>
    $(document).ready(function () {
        $('.select2').select2();
    });
</script>
@endpush
