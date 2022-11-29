@extends('layouts.backend')
@section('content')
<div class="row">
    <div class="col-md-12 col-lg-12">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">User Details</h3>
            </div>
            <div class="card-body">
                <form action="{{route('users.update', $user->id)}}" method="POST">
                    @method('PUT')
                    @csrf

                <div class="form-row">
                    <div class="form-group col-md-12 mb-0">
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" id="name1" placeholder="First Name" value="{{$user->name}}">
                        </div>
                    </div>
                </div>
                <div class="form-group ">
                    <label for="email">E-Mail</label>
                    <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" id="inputEmail5" placeholder="Email Address" value="{{$user->email}}">
                </div>
                <div class="form-group ">
                    <label>Password</label>
                    <input type="password" class="form-control @error('password') is-invalid @enderror" name="password" id="exampleInputPassword7" placeholder="Keep empty if dont want to change!">
                </div>
                <div class="form-group ">
                    <label>Confirm Password</label>
                    <input type="password" class="form-control @error('password') is-invalid @enderror" name="password_confirmation" id="exampleInputPassword7" placeholder="Keep empty if dont want to change!">
                </div>
                <div class="form-footer form-row mt-2">
                    <div class="col-lg-6 col-md-12">
                        <button type="submit" class="btn btn-success btn-block mt-2">{{__('Update')}}</button>
                    </div>
                    <div class="col-lg-6 col-md-12">
                        <a href="{{route('users.index')}}" class="btn btn-warning btn-block mt-2">{{__('Cancel')}}</a>
                    </div>
                </div>
            </form>
            </div>
        </div>
    </div>

</div>
@endsection
