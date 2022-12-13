@extends('layouts.layout')
@section('content')
<div id="global-loader">
    <img src="../assets/images/loader.svg" class="loader-img" alt="Loader">
</div>
<!-- /GLOABAL LOADER -->

<!-- PAGE -->
<div class="page login-page">
    <div>
        <!-- CONTAINER OPEN -->
        <div class="col col-login mx-auto mt-7">
            <div class="text-center">
                <img src="{{asset('images/ft-logo-white.png')}}" class="header-brand-img" alt="" style="height: 100px" >
            </div>
        </div>
        <div class="container-login100">
            <div class="wrap-login100 p-0">
                <div class="card-body">
                        <form method="POST" action="{{ route('login') }}" class="login100-form validate-form">
                            @csrf
                        <span class="login100-form-title">
                            {{ __('Login') }}
                        </span>
                        <div class="wrap-input100 validate-input" data-bs-validate = "Valid email is required: ex@abc.xyz">
                            <input class="input100" type="text" name="email" placeholder="Email">
                            <span class="focus-input100"></span>
                            <span class="symbol-input100">
                                <i class="zmdi zmdi-email" aria-hidden="true"></i>
                            </span>
                            @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>
                        <div class="wrap-input100 validate-input" data-bs-validate = "Password is required">
                            <input class="input100" type="password" name="password" placeholder="Password">
                            <span class="focus-input100"></span>
                            <span class="symbol-input100">
                                <i class="zmdi zmdi-lock" aria-hidden="true"></i>
                            </span>
                            @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>
                        <div class="text-end pt-1">
                            @if (Route::has('password.request'))
                            <a class="text-primary ms-1" href="{{ route('password.request') }}">
                                {{ __('Forgot Your Password?') }}
                            </a>
                        @endif
                        </div>
                        <div class="container-login100-form-btn">
                            <button type="submit" class="login100-form-btn btn-primary">
                                {{ __('Login') }}
                            </button>
                        </div>
                        {{-- <div class="text-center pt-3">
                            <p class="text-dark mb-0">Not a member?<a href="register.html" class="text-primary ms-1">Create an Account</a></p>
                        </div> --}}
                    </form>
                </div>
                <div class="card-footer">
                    <div class="d-flex justify-content-center my-3">
                        <span>Copyright <i class="fa fa-copyright"> 2022 FT Universitas Sriwijaya </span></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
