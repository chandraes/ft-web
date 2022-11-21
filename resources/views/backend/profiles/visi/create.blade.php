@extends('layouts.backend')
@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header border-bottom-0">
                <h3 class="card-title">Visi & Misi</h3>
            </div>
            <div class="card-body">
                <form action="{{route('visi.store')}}" method="POST">
                    @csrf
                    <textarea class="content" name="content"></textarea>
                    <div class="row mt-4">
                        <div class="col-lg-12 col-md-6 col-12 mt-4 float-right">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="active" id="invalidCheck">
                                <label class="form-check-label" for="invalidCheck">Active</label>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-12 mt-4 btn-list">
                            <button type="submit" class="btn btn-success px-8 mt-2 btn-block">Save</button>
                            <a href="{{route('visi.index')}}"
                                class="btn btn-primary ml-2 px-8 mt-2 btn-block">Cancel</a>
                        </div>
                    </div>
                </form>

            </div>
        </div>
    </div>
</div>

@endsection
@push('css')
<link href="{{asset('assets/css/animated.css')}}" rel="stylesheet" />
@endpush
@push('js')
<!-- WYSIWYG Editor JS -->
<script src="{{asset('assets/plugins/wysiwyag/jquery.richtext.js')}}"></script>
<script src="{{asset('assets/plugins/wysiwyag/wysiwyag.js')}}"></script>

@endpush
