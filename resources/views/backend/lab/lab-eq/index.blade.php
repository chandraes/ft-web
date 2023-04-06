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
            <div class="card-body">
                <table class="table table-bordered" id="data-table">
                    <thead class="text-center">
                        <tr>
                            <th>No</th>
                            <th>Lab Name</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($data as $d)
                        <tr>
                            <td class="text-center">{{$loop->iteration}}</td>
                            <td>{{$d->name}}</td>
                            <td class="text-center">
                                @if ($d->equipment->count() > 0)
                                    <a href="{{route('lab-equipment.show', $d->id)}}" class="btn btn-sm btn-success">Show</a>
                                @endif
                                <a href="{{route('lab-equipment.create', $d->id)}}" class="btn btn-primary btn-sm">Add Equipment</a>
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
</script>
@endpush