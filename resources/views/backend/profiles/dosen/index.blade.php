@extends('layouts.backend')
@section('content')

@if (session('success'))
<div id="notif" class="alert alert-success">
    {{ session('success') }}
</div>
@endif
@error('jurusan_prodi')
<div id="notif" class="alert alert-warning">
    {{ $message }}
</div>
@enderror
<div class="row">
    <div class="col-12 col-sm-12">
        <div class="card ">
            <div class="card-header">
                <h3 class="card-title mb-0">{{'List '. ucfirst(request()->segment(2))}}</h3>
                <div class="card-options">
                    <a class="btn btn-info" href="{{route('mata-kuliah.index')}}">Mata Kuliah</a>
                    <a class="modal-effect btn btn-success d-grid mx-3" data-bs-effect="effect-slide-in-right"
                        data-bs-toggle="modal" href="#jurusan">Tambah Jurusan/Prodi</a>
                    <a href="{{route('dosen.create')}}" class="ml-4 btn btn-primary">{{__('Add New')}}</a>
                </div>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table id="data-table" class="table table-bordered text-nowrap mb-0">
                        <thead class="border-top">
                            <tr class="text-center">
                                <th class="bg-transparent border-bottom-0 w-5">Kategori</th>
                                <th class="bg-transparent border-bottom-0">Nama</th>
                                <th class="bg-transparent border-bottom-0">Deskripsi</th>
                                <th class="bg-transparent border-bottom-0">Image</th>
                                <th class="bg-transparent border-bottom-0">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($data as $d)
                            <tr>
                                <td class="text-center align-middle" align="center">
                                    {{$d->jurusan_prodi}}
                                </td>
                                <td class="align-middle">{{$d->name}}</td>
                                <td class="align-middle">{!! clean($d->short_description) !!}</td>
                                <td class="text-center align-center">
                                    <span class="avatar avatar-xxl bradius cover-image"
                                        data-bs-image-src="{{asset($d->image)}}"
                                        style="background: url(&quot;{{asset($d->image)}}&quot;) center center;"></span>

                                </td>
                                <td align="center">
                                    <div class="row">
                                        <div class="col-6">
                                            <a class="btn btn-primary btn-sm rounded-11 mx-2 btn-block"
                                                data-bs-toggle="tooltip" href="{{route('dosen.edit', $d->id)}}"
                                                data-bs-original-title="Edit"><i><svg class="table-edit"
                                                        xmlns="http://www.w3.org/2000/svg" height="20"
                                                        viewBox="0 0 24 24" width="16">
                                                        <path d="M0 0h24v24H0V0z" fill="none" />
                                                        <path
                                                            d="M3 17.25V21h3.75L17.81 9.94l-3.75-3.75L3 17.25zM5.92 19H5v-.92l9.06-9.06.92.92L5.92 19zM20.71 5.63l-2.34-2.34c-.2-.2-.45-.29-.71-.29s-.51.1-.7.29l-1.83 1.83 3.75 3.75 1.83-1.83c.39-.39.39-1.02 0-1.41z" />
                                                    </svg></i></a>
                                        </div>
                                        <div class="col-6">
                                            <form id="delete-item" action="{{route('dosen.destroy', $d->id)}}"
                                                method="post">
                                                @method('DELETE')
                                                @csrf
                                                <button type="submit"
                                                    class="btn btn-danger btn-sm rounded-11 mx-2 btn-block"
                                                    data-bs-toggle="tooltip" data-bs-original-title="Delete"><i><svg
                                                            class="table-delete" xmlns="http://www.w3.org/2000/svg"
                                                            height="20" viewBox="0 0 24 24" width="16">
                                                            <path d="M0 0h24v24H0V0z" fill="none" />
                                                            <path
                                                                d="M6 19c0 1.1.9 2 2 2h8c1.1 0 2-.9 2-2V7H6v12zM8 9h8v10H8V9zm7.5-5l-1-1h-5l-1 1H5v2h14V4h-3.5z" />
                                                        </svg></i>
                                                </button>
                                        </div>

                                        </form>
                                    </div>
                                </td>
                                @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <!-- COL END -->
</div>
<div class="modal fade" id="jurusan">
    <div class="modal-dialog modal-dialog-scrollable" role="document">
        <div class="modal-content modal-content-demo">
            <div class="modal-header">
                <h6 class="modal-title">List Jurusan / Prodi</h6><button aria-label="Close" class="btn-close"
                    data-bs-dismiss="modal"><span aria-hidden="true">&times;</span></button>
            </div>
            <div class="modal-body">
                <table id="data-table" class="table table-bordered text-nowrap mb-0">
                    <thead>
                        <tr class="text-center align-middle">
                            <th>No</th>
                            <th>Nama</th>
                            <th>ACT</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($category as $c)
                        <tr>
                            <td class="text-center align-middle">{{$loop->iteration}}</td>
                            <td class="align-middle">{{$c->jurusan_prodi}}</td>
                            <td align="center">
                                <div class="row">
                                    <div class="col-6">
                                        <form id="delete-item" action="{{route('dosen.category.delete', $c->id)}}"
                                            method="post">
                                            @method('DELETE')
                                            @csrf
                                            <button type="submit"
                                                class="btn btn-danger btn-sm rounded-11 mx-2 btn-block"
                                                data-bs-toggle="tooltip" data-bs-original-title="Delete"><i><svg
                                                        class="table-delete" xmlns="http://www.w3.org/2000/svg"
                                                        height="20" viewBox="0 0 24 24" width="16">
                                                        <path d="M0 0h24v24H0V0z" fill="none" />
                                                        <path
                                                            d="M6 19c0 1.1.9 2 2 2h8c1.1 0 2-.9 2-2V7H6v12zM8 9h8v10H8V9zm7.5-5l-1-1h-5l-1 1H5v2h14V4h-3.5z" />
                                                    </svg></i>
                                            </button>
                                    </div>

                                    </form>
                                </div>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                <form action="{{route('dosen.category')}}" method="post">
                    @csrf
                    <div class="mt-3">
                        <label for="name">Nama Jurusan / Prodi</label>
                        <input type="text" name="jurusan_prodi" id="name" class="form-control @error('jurusan_prodi')
                    is-invalid
                    @enderror" placeholder="Tambah Jurusan / prodi">
                    </div>
            </div>

            <div class="modal-footer">
                <button type="submit" class="btn btn-primary">Save</button>
                </form>
                <button class="btn btn-light" data-bs-dismiss="modal">Close</button>
            </div>

        </div>
    </div>
</div>
<!-- ROW-5 END -->
@endsection
@push('js')
<script src="{{asset('assets/plugins/datatable/responsive.bootstrap5.min.js')}}"></script>
<script src="{{asset('assets/plugins/datatable/js/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('assets/plugins/datatable/js/dataTables.bootstrap5.js')}}"></script>
<script>
    setTimeout(() => {
            $('#notif').hide();
        }, 3000);

        $(document).on('submit', '#delete-item', function(){
            var result = confirm('Do you want to perform this action?');
            if(!result){
                return false;
            }
        });
</script>
@endpush
