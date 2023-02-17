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
                    <a class="modal-effect btn btn-success d-grid mx-3" data-bs-effect="effect-slide-in-right"
                        data-bs-toggle="modal" href="#category">Add Category</a>
                    <a href="{{route('lab.create')}}" class="btn btn-primary">{{__('Add New Laboratiorium')}}</a>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="row mt-4 mb-4">
    {{ $data->links() }}
    @foreach ($data as $d)
    <div class="col-sm-6 col-xl-4 mt-4">
        <div class="panel price panel-color plan-card text-center p-2">
            <div class="pt-4 px-4">
                <div class="mb-4"><img class="cover-image" src="{{asset($d->image)}}" alt="" style="height: 160px">
                </div>
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
                    <td><strong>Koordinator</strong></td>
                    <td>:</td>
                    <td>{{$d->koordinator_asisten}}</td>
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

<div class="modal fade" id="category">
    <div class="modal-dialog modal-dialog-scrollable" role="document">
        <div class="modal-content modal-content-demo">
            <div class="modal-header">
                <h6 class="modal-title">List Category</h6><button aria-label="Close" class="btn-close"
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
                            <td class="align-middle">{{$c->name}}</td>
                            <td class="text-center align-middle">
                                <div class="row">
                                    <div class="col-6">
                                        <form id="delete-item" action="{{route('lab.category.delete', $c->id)}}"
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
                <form action="{{route('lab.category')}}" method="post">
                    @csrf
                    <div class="mt-3">
                        <label for="name">Category Name</label>
                        <input type="text" name="name" id="name" class="form-control @error('name')
                    is-invalid
                    @enderror" placeholder="Add category">
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
