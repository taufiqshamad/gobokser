@extends('layouts.app')

@section('content')
<!-- Header -->
    <header id="header" class="ex-header" style="background-color:#fff;">
        <div class="header-content mt-4">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="col-lg-12">
                            <div class="text-container text-left">
                                <img src="images/gobokser_logo.svg" alt="alternative" height="50px">
                                <h1 style="width:100%;margin-top:40px">BOOKING SERVICE ONLINE</h1>
                                <p class="p-large">Servis Motor dan Mobil dengan Go-bokser, cepat dan mudah</p>
                                <a class="btn-solid-lg" href="{{ route('services') }}">Booking Sekarang</a>
                                <a class="btn-outline-lg" href="{{ route('login') }}">Login</a>
                            </div>
                        </div>
                    </div> <!-- end of col -->
                    <div class="col-lg-6">
                        <div class="col-lg-12">
                            <div class="image-container">
                                <img class="img-fluid" src="images/booking_schedule_isometric_illustration-04-800.jpg" alt="alternative">
                            </div> <!-- end of image-container -->
                        </div>
                    </div> <!-- end of col -->
                </div> <!-- end of row -->
            </div> <!-- end of container -->
        </div> <!-- end of header-content -->
    </header> <!-- end of ex-header -->
<!-- end of header -->
@endsection
