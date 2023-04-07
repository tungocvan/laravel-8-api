@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card"> 
                <div class="card-header">Đăng nhập tài khoản - Doctors</div>

                <div class="card-body">
                    @if (session('msg'))
                        <div class="alert alert-danger"  role="alert">
                                <strong>{{ session('msg') }}</strong>
                        </div>
                    @endif                    
                    <form method="POST" action="{{ route('doctors.login') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">Email</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}"  autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end">Mật khẩu</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password"  autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        Ghi nhớ tài khoản
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    Đăng nhập
                                </button>

                                @if (Route::has('doctors.forgot-password'))
                                    <a class="btn btn-link" href="{{ route('doctors.forgot-password') }}">
                                        Quên mật khẩu ?
                                    </a>
                                @endif
                            </div>
                            <div class="col-md-8 offset-md-4 mt-5">
                                <a href="{{route('auth.facebook')}}" class="btn btn-primary mr-5">Login With Facebook</a>
                                <a href="{{route('auth.google')}}" class="btn btn-primary">Login With Google</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
