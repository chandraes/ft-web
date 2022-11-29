@extends('layouts.backend')
@section('content')

@if (session('success'))
<div id="notif" class="alert alert-success">
    {{ session('success') }}
</div>
@endif
<div class="row">
    <div class="col-12 col-sm-12">
        <div class="card ">
            <div class="card-header">
                <h3 class="card-title mb-0">{{'List '. ucfirst(request()->segment(2))}}</h3>
                <div class="card-options">
                    <a href="{{route('pegawai.create')}}" class="btn btn-primary">{{__('Add New')}}</a>
                </div>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table id="data-table" class="table table-bordered text-nowrap mb-0">
                        <thead class="border-top">
                            <tr class="text-center">
                                <th class="bg-transparent border-bottom-0">Nama</th>
                                <th class="bg-transparent border-bottom-0">Jabatan</th>
                                <th class="bg-transparent border-bottom-0">Deskripsi</th>
                                <th class="bg-transparent border-bottom-0">Image</th>
                                <th class="bg-transparent border-bottom-0">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($data as $d)
                            <tr>

                                <td class="align-middle">{{$d->name}}</td>
                                <td class="align-middle">{{$d->jabatan}}</td>
                                <td class="align-middle">{!! substr($d->description, 0, 100). ".........." !!}</td>
                                <td class="text-center align-center">
                                    <span class="avatar avatar-xxl bradius cover-image" data-bs-image-src="{{asset($d->image)}}" style="background: url(&quot;{{asset($d->image)}}&quot;) center center;"></span>

                                </td>
                                <td align="center">
                                    <div class="row">
                                        <div class="col-6">
                                            <a class="btn btn-primary btn-sm rounded-11 mx-2 btn-block" data-bs-toggle="tooltip"
                                            href="{{route('pegawai.edit', $d->id)}}" data-bs-original-title="Edit"><i><svg
                                                    class="table-edit" xmlns="http://www.w3.org/2000/svg" height="20"
                                                    viewBox="0 0 24 24" width="16">
                                                    <path d="M0 0h24v24H0V0z" fill="none" />
                                                    <path
                                                        d="M3 17.25V21h3.75L17.81 9.94l-3.75-3.75L3 17.25zM5.92 19H5v-.92l9.06-9.06.92.92L5.92 19zM20.71 5.63l-2.34-2.34c-.2-.2-.45-.29-.71-.29s-.51.1-.7.29l-1.83 1.83 3.75 3.75 1.83-1.83c.39-.39.39-1.02 0-1.41z" />
                                                </svg></i></a>
                                        </div>
                                            <div class="col-6">
                                                <form  id="delete-item" action="{{route('pegawai.destroy', $d->id)}}" method="post">
                                                    @method('DELETE')
                                                    @csrf
                                                    <button type="submit" class="btn btn-danger btn-sm rounded-11 mx-2 btn-block" data-bs-toggle="tooltip"
                                                        data-bs-original-title="Delete"><i><svg class="table-delete"
                                                                xmlns="http://www.w3.org/2000/svg" height="20" viewBox="0 0 24 24"
                                                                width="16">
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
