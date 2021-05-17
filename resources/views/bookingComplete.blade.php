@extends('layouts.app')

@section('content')
<!-- Header -->
    <header id="header" class="ex-header" style="background-color:#fff">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <i class="fas fa-check-circle text-success h1"></i>
                    <h1>Booking Berhasil!</h1>
                    <h3>Nomor antrian anda sedang di proses. Biasanya memakan waktu 5 menit</h3>
                    <br><br><hr><br><br>
                    <h6>Anda bisa melihat nomor antrian pada halaman Akun.</h6>
                    <br>
                    <a href="{{ route('home') }}" class="btn btn-outline-lg"><i class="fas fa-chevron-left"></i> Home</a> <a href="{{route('account')}}" class="btn btn-solid-lg">Halaman Akun <i class="fas fa-chevron-right"></i></a>
                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </header> <!-- end of ex-header -->
<!-- end of header -->
@endsection
