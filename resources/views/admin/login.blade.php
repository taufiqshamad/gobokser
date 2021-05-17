@extends('layouts.appAdmin')

@section('content')
<!-- Header -->
    <header id="header" class="ex-header" style="background-color:#fff">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-3">
                    <h1>Login Admin</h1>
                    <div class="form-container text-left">
                        <form method="POST" action="{{ route('admin.auth') }}" data-toggle="validator" data-focus="false">
                            @csrf
                            <div class="form-group">
                                <label>Email</label>
                                <input type="text" class="form-control" name="email" required>
                            </div>
                            <div class="form-group">
                                <label>Password</label>
                                <input type="password" class="form-control" name="password" required>
                            </div>
                            <div class="form-group">
                                <button type="submit" class="form-control-submit-button">Login</button>
                            </div>
                            @if(session('alert'))
                                <div class="form-group">
                                    <span class="text-danger">{{ session('alert') }}</span>
                                </div>
                            @endif
                        </form>
                    </div> <!-- end of form container -->
                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </header> <!-- end of ex-header -->
<!-- end of header -->
@endsection
