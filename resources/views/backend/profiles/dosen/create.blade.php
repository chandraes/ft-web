@extends('layouts.backend')
@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header border-bottom-0">
                <h3 class="card-title">Profile {{ucfirst(request()->segment(2))}}</h3>
            </div>
            <div class="card-body">
                <form action="{{route('dosen.store')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="row mb-4">
                        <label class="col-md-2 form-label">Nama</label>
                        <div class="col-md-10">
                            <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" placeholder="Nama">
                            @error('name')
                            <span class="text-red">{{$message}}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="row mb-4">
                        <label class="col-md-2 form-label">NIP/NIDN</label>
                        <div class="col-md-10">
                            <input type="text" class="form-control @error('nip_nidn') is-invalid @enderror" name="nip_nidn"
                                placeholder="NIP / NIDN">
                            @error('nip_nidn')
                            <span class="text-red">{{$message}}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="row mb-4">
                        <label class="col-md-2 form-label">Research Interest</label>
                        <div class="col-md-10">
                            <input type="text" class="form-control @error('research_interest') is-invalid @enderror" data-role="tagsinput"
                            name="research_interest" placeholder="Pisahkan dengan (,)">
                            @error('research_interest')
                            <span class="text-red">{{$message}}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="row mb-4">
                        <label class="col-md-2 form-label">Riwayat Pendidikan</label>
                        <div class="col-md-10">
                            <div id="riwayat_pendidikan"></div>
                            <div class="row mt-2">
                                <div class="col-md-12">
                                    <button type="button" class="btn btn-primary" id="add_riwayat_pendidikan" onclick="add_more()">Tambah Riwayat Pendidikan</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row mb-4">
                        <label class="col-md-2 form-label">E-Mail</label>
                        <div class="col-md-10">
                            <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" placeholder="Ex: abcd@xx.com / defgh@abc.ac.id">
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
                                <option value="">Pilih Jurusan/Prodi</option>
                                @foreach ($category as $c)
                                <option value="{{$c->id}}">{{$c->jurusan_prodi}}</option>
                                @endforeach
                            </select>
                            @error('category_dosen_id')
                            <span class="text-red">{{$message}}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="row mb-4">
                        <label class="col-md-2 form-label">Mata Kuliah</label>
                        <div class="col-md-10">
                            <select class="form-control select2 @error('mata_kuliah_id') is-invalid @enderror" data-placeholder="Dosen Mata kuliah" multiple name="mata_kuliah_id[]">
                            </select>
                            @error('mata_kuliah_id')
                            <span class="text-red">{{$message}}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="row mb-4">
                        <label class="col-md-2 form-label">Google Scholar</label>
                        <div class="col-md-10">
                            <input type="text" class="form-control @error('gs_link') is-invalid @enderror" name="gs_link" placeholder="Url to Google Scholar">
                            @error('gs_link')
                            <span class="text-red">{{$message}}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="row mb-4">
                        <label class="col-md-2 form-label">Scopus</label>
                        <div class="col-md-10">
                            <input type="text" class="form-control @error('scopus_link') is-invalid @enderror" name="scopus_link" placeholder="Url to Scopus">
                            @error('scopus_link')
                            <span class="text-red">{{$message}}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="row mb-4">
                        <label class="col-md-2 form-label">Sinta</label>
                        <div class="col-md-10">
                            <input type="text" class="form-control @error('sinta_link') is-invalid @enderror" name="sinta_link" placeholder="Url to Sinta">
                            @error('sinta_link')
                            <span class="text-red">{{$message}}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="row mb-4">
                        <label class="col-md-2 form-label">WoS (Web of Science)</label>
                        <div class="col-md-10">
                            <input type="text" class="form-control @error('wos_link') is-invalid @enderror" name="wos_link" placeholder="Url to WoS (Web of Science)">
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
                    </div>
                    <div class="row mb-4">
                        <label class="col-md-2 form-label">Tugas Laboratorium</label>
                        <div class="col-md-10">
                            <div class="row" id="tugas_lab"></div>
                            <div class="row mt-2">
                                <div class="col-md-12">
                                    <button type="button" class="btn btn-primary" id="add_pengalaman_kerja" onclick="add_more_tugas()">Tambah Tugas Lab</button>
                                </div>
                            </div>
                        </div>
                    </div>
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

    var i = 1;
    function add_more() {
        i++;
        $('#riwayat_pendidikan').append('<div class="row mt-2" id="row'+i+'"><div class="col-md-3"><input type="text" class="form-control" name="jenjang_pendidikan[]" placeholder="Jenjang Pendidikan" required></div><div class="col-md-3"><input type="text" class="form-control" name="program_studi[]" placeholder="Program Studi"></div><div class="col-md-3"><input type="text" class="form-control" name="tempat_pendidikan[]" placeholder="Tempat Pendidikan"></div><div class="col-md-3"><input type="text" class="form-control" name="tahun_lulus[]" placeholder="Tahun Lulus"><button type="button" class="btn btn-danger mt-2" onclick="remove('+i+')">Hapus</button></div></div>');
    }
    function remove(row_id) {
        $('#row'+row_id).remove();
    }

    var j = 1;
    function add_more_tugas() {
        j++;
        $('#tugas_lab').append('<div class="row mt-2" id="row_tugas'+j+'"><div class="col-md-2"><input type="text" class="form-control" name="tahun[]" placeholder="Tahun" required></div><div class="col-md-10"><input type="text" class="form-control" name="judul[]" placeholder="Judul"></div><div class="row mt-2"></div><div class="col-md-6"><input type="text" class="form-control" name="spesialisasi[]" placeholder="Spesialisasi"></div><div class="col-md-6"><input type="text" class="form-control" name="capaian[]" placeholder="Capaian"><button type="button" class="btn btn-danger mt-2" onclick="remove_tugas('+j+')">Hapus</button></div></div></div>');
    }

    function remove_tugas(row_id) {
        $('#row_tugas'+row_id).remove();
    }

    $(document).ready(function () {
        $('.select2').select2({
            minimumInputLength: 3,
            ajax: {
                url: '{{route('dosen.search')}}',
                dataType: 'json',
                delay: 250,
                data: function (params) {
                    return {
                        q: params.term, // search term
                        page: params.page
                    };
                },
                // append to select2 option with selected

                processResults: function (data) {
                    return {
                        results: $.map(data.mk, function (item) {
                            //with selected
                            return {
                                text: item.kode+' - '+item.name,
                                id: item.id,
                            }
                        })
                    };
                },
                cache: true
            },
        });
        
    
        

    });
</script>
@endpush
