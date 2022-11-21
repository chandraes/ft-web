@extends('layouts.backend')
@section('content')
<div class="row">
    <div class="col-12 col-sm-12">
        <div class="card ">
            <div class="card-header">
                <h3 class="card-title mb-0">{{__('Daftar Visi Misi')}}</h3>
                <div class="card-options">
                    <a href="{{route('visi.create')}}" class="btn btn-primary">{{__('Add New')}}</a>
                </div>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table id="data-table" class="table table-bordered text-nowrap mb-0">
                        <thead class="border-top">
                            <tr>
                                <th class="bg-transparent border-bottom-0 w-5 text-center">No</th>
                                <th class="bg-transparent border-bottom-0 text-center">Visi</th>
                                <th class="bg-transparent border-bottom-0 text-center">Active</th>
                                <th class="bg-transparent border-bottom-0 text-center">Action</th>
                            </tr>
                        </thead>
                        <tbody>

                            <tr>
                                <td></td>
                                <td></td>
                                <td class="text-center" align="center"><i class="fa fa-check-square-o" style="font-size: 1.8em"></i></td>
                                <td align="center">
                                    <div class="row">
                                        <div class="col-6">
                                            <a class="btn btn-primary btn-sm rounded-11 mx-2 btn-block" data-bs-toggle="tooltip"
                                            href="#" data-bs-original-title="Edit"><i><svg
                                                    class="table-edit" xmlns="http://www.w3.org/2000/svg" height="20"
                                                    viewBox="0 0 24 24" width="16">
                                                    <path d="M0 0h24v24H0V0z" fill="none" />
                                                    <path
                                                        d="M3 17.25V21h3.75L17.81 9.94l-3.75-3.75L3 17.25zM5.92 19H5v-.92l9.06-9.06.92.92L5.92 19zM20.71 5.63l-2.34-2.34c-.2-.2-.45-.29-.71-.29s-.51.1-.7.29l-1.83 1.83 3.75 3.75 1.83-1.83c.39-.39.39-1.02 0-1.41z" />
                                                </svg></i></a>
                                        </div>
                                            <div class="col-6">
                                                <form  id="delete-user" action="" method="post">
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


                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <!-- COL END -->
</div>
@endsection
