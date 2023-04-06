@extends('layouts.backend')
@section('content')
@if (session('success'))
<div id="notif" class="alert alert-success">
    {{ session('success') }}
</div>
@endif
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header border-bottom-0">
                <h3 class="card-title">Peralatan {{$lab->name}}</h3>
            </div>
            <div class="card-body">
                <table class="table table-bordered" id="data-table">
                    <thead class="text-center">
                        <tr>
                            <td>No</td>
                            <td>Nama Alat</td>
                            <td>Action</td>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($lab->equipment as $e)
                        <tr>
                            <td class="text-center align-middle">{{$loop->iteration}}</td>
                            <td class="align-middle">{{$e->name}}</td>
                            <td class="text-center align-middle">
                                <a href="{{route('lab-equipment.edit', $e->id)}}"
                                    class="btn btn-primary">Edit</a>
                                <form id="delete-item" action="{{route('lab-equipment.delete', $e->id)}}" method="post"
                                    class="d-inline">
                                    @csrf
                                    @method('delete')
                                    <button type="submit" class="btn btn-danger">Delete</button>
                                </form>
                            </td>
                        </tr>

                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
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