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
                    <a href="{{route('lab.create')}}" class="btn btn-primary">{{__('Add New Laboratiorium')}}</a>
                </div>
            </div>
            <div class="card-body">

            </div>
        </div>
    </div>
</div>
@endsection
