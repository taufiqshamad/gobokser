@extends('layouts.app')

@section('content')
<!-- Header -->
    <header id="header" class="ex-header" style="background-color:#fff">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-3">
                    <h1>Login</h1>
                    <div class="form-container text-left">
                        <form method="POST" action="{{route('login')}}" data-toggle="validator" data-focus="false">
                            @csrf
                            <div class="form-group">
                                <label>Email</label>
                                <input type="text" class="form-control" id="pname" required name="email">
                            </div>
                            <div class="form-group">
                                <label>Password</label>
                                <input type="password" class="form-control" id="pemail" required name="password">
                            </div>
                            <div class="form-group">
                                <button type="submit" class="form-control-submit-button">Login</button>
                            </div>
                            <div class="form-group">
                                <label>Belum punya akun?</label>
                                <button type="submit" class="form-control-button">Daftar</button>
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
@endsection
