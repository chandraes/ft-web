@extends('layouts.backend')
@section('content')
@if (session('success'))
<div id="notif" class="alert alert-success">
    {{ session('success') }}
</div>
@endif
<div class="row">
    <div class="col-12 col-sm-12">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title mb-0">{{'List '. ucfirst(request()->segment(2))}}</h3>
                <div class="card-options">
                    <a href="{{route('lab.create')}}" class="btn btn-primary">{{__('Add New Laboratiorium')}}</a>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="row mt-4">
    {{ $data->links() }}
    @foreach ($data as $d)
    <div class="col-sm-6 col-xl-3">
        <div class="panel price panel-color plan-card text-center p-2" style="height: 590px">
            <div class="pt-4 px-4">
                <div class="mb-4"><img class="cover-image" src="{{asset($d->image)}}" alt=""></div>
                <h4 class="text-uppercase fw-semibold text-primary card-category bg-primary-transparent">{{$d->name}}
                </h4>
            </div>
            {{-- <div class="panel-body text-center">
                <p class="lead"><strong>Kepala Laboratorium</strong></p>
            </div> --}}
            <table class="table">
                <tr style="text-align: left">
                    <td><strong>Kepala</strong></td>
                    <td>:</td>
                    <td>{{$d->kepala_lab}}</td>
                </tr>
                <tr style="text-align: left">
                    <td><strong>Location</strong></td>
                    <td>:</td>
                    <td>{{$d->location}}</td>
                </tr>
            </table>
            <div class="panel-body text-center mt-2">
                <p>{!! clean($d->short_description) !!}</p>
            </div>
            <div class="panel-footer text-center">
                <a class="btn btn-lg btn-primary btn-block mb-2" href="{{route('lab.edit', $d->id)}}">Detail
                    Edit</a>
                <form id="delete-item" action="{{route('lab.destroy', $d->id)}}" method="post">
                    @method('DELETE')
                    @csrf
                    <button type="submit" class="btn btn-lg btn-danger btn-block">Delete</button>
                </form>
            </div>
        </div>
    </div><!-- COL-END -->
    @endforeach
    {{ $data->links() }}
</div>

@endsection
@push('js')
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
