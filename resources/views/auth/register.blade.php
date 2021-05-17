@extends('layouts.app')

@section('content')
<!-- Header -->
    <header id="header" class="ex-header" style="background-color:#fff">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-3">
                    <h1>Register</h1>
                    <div class="form-container text-left">
                        <form method="POST" action="{{ route('register') }}" data-toggle="validator" data-focus="false">
                            @csrf
                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>N{{ $message }}</strong>
                                    </span>
                                @enderror
                                @error('alamat')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>A{{ $message }}</strong>
                                    </span>
                                @enderror
                                @error('no_telp')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>T{{ $message }}</strong>
                                    </span>
                                @enderror
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>E{{ $message }}</strong>
                                    </span>
                                @enderror
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>P{{ $message }}</strong>
                                    </span>
                                @enderror
                            <div class="form-group">
                                <label>Nama</label>
                                <input type="text" class="form-control" name="nama" value="{{ old('nama') }}">
                            </div>
                            <div class="form-group">
                                <label>Alamat</label>
                                <textarea type="text" class="form-control" name="alamat">{{ old('alamat') }}</textarea>
                            </div>
                            <div class="form-group">
                                <label>No. Telp</label>
                                <input type="text" class="form-control" name="no_telp" value="{{ old('no_telp') }}">
                            </div>
                            <div class="form-group">
                                <label>Email</label>
                                <input type="email" class="form-control" name="email" value="{{ old('email') }}">
                            </div>
                            <div class="form-group">
                                <label>Password</label>
                                <input type="password" class="form-control" name="password">
                            </div>
                            <div class="form-group">
                                <label>Konfirmasi Password</label>
                                <input type="password" class="form-control" name="password_confirmation">
                            </div>
                            <div class="form-group">
                                <button type="submit" class="form-control-submit-button">Register</button>
                            </div>
                            <div class="form-group">
                                <label>Sudah punya akun?</label>
                                <button type="submit" class="form-control-button">Login</button>
                            </div>
                            <div class="form-message">
                                <div id="pmsgSubmit" class="h3 text-center hidden"></div>
                            </div>
                        </form>
                    </div> <!-- end of form container -->
                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </header> <!-- end of ex-header -->
<!-- end of header -->
<div class="container" style="display:none">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
