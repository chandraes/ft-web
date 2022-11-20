@extends('layouts.backend')
@section('content')


    <!-- ROW-5 -->
    <div class="row">
        <div class="col-12 col-sm-12">
            <div class="card ">
                <div class="card-header">
                    <h3 class="card-title mb-0">{{__('List User')}}</h3>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="data-table" class="table table-bordered text-nowrap mb-0">
                            <thead class="border-top">
                                <tr>
                                    <th class="bg-transparent border-bottom-0 w-5">No</th>
                                    <th class="bg-transparent border-bottom-0">Name</th>
                                    <th class="bg-transparent border-bottom-0">Email</th>
                                    <th class="bg-transparent border-bottom-0 text-center">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($user as $u)
                                <tr>
                                    <td>{{$loop->iteration}}</td>
                                    <td>{{$u->name}}</td>
                                    <td>{{$u->email}}</td>
                                    <td align="center">
                                        <a class="btn btn-primary btn-sm rounded-11 me-2" data-bs-toggle="tooltip" href="{{route('users.edit', $u->id)}}"
                                        data-bs-original-title="Edit"><i><svg class="table-edit"
                                                xmlns="http://www.w3.org/2000/svg" height="20" viewBox="0 0 24 24"
                                                width="16">
                                                <path d="M0 0h24v24H0V0z" fill="none" />
                                                <path
                                                    d="M3 17.25V21h3.75L17.81 9.94l-3.75-3.75L3 17.25zM5.92 19H5v-.92l9.06-9.06.92.92L5.92 19zM20.71 5.63l-2.34-2.34c-.2-.2-.45-.29-.71-.29s-.51.1-.7.29l-1.83 1.83 3.75 3.75 1.83-1.83c.39-.39.39-1.02 0-1.41z" />
                                            </svg></i></a>
                                    <a class="btn btn-danger btn-sm rounded-11" data-bs-toggle="tooltip"
                                        data-bs-original-title="Delete"><i><svg class="table-delete"
                                                xmlns="http://www.w3.org/2000/svg" height="20" viewBox="0 0 24 24"
                                                width="16">
                                                <path d="M0 0h24v24H0V0z" fill="none" />
                                                <path
                                                    d="M6 19c0 1.1.9 2 2 2h8c1.1 0 2-.9 2-2V7H6v12zM8 9h8v10H8V9zm7.5-5l-1-1h-5l-1 1H5v2h14V4h-3.5z" />
                                            </svg></i></a>
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
