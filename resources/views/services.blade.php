@extends('layouts.app')

@section('content')
<!-- Header -->
    <header id="header" class="ex-header" style="background-color:#fff">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h1>Pilih Service</h1>
                    <h3>Silahkan pilih service dibawah sesuai kendaraan anda</h6>
                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </header> <!-- end of ex-header -->
<!-- end of header -->
<!-- Details 1 -->
    <div id="details" class="basic-2">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <img class="img-fluid" src="images/category-bike.jpg" alt="alternative">
                </div> <!-- end of col -->
                <div class="col-lg-6">
                    <div class="text-container">
                        <h3>Service Motor</h3>
                        <p>Perbaiki masalah pada motor anda lewat booking online. Tim kami akan langsung datang ke tempat anda</p>
                        <a class="btn-solid-reg popup-with-move-anim" href="{{ route('bookingForm', 'motor') }}">Pilih Service Motor</a>
                    </div> <!-- end of text-container -->
                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of basic-2 -->
    <!-- end of details 1 -->


    <!-- Details 2 -->
    <div class="basic-3" style="margin-bottom:-100px">
        <div class="second">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="text-container">
                            <h3>Service Mobil</h3>
                            <p>Perbaiki masalah pada mobil anda lewat booking online. Tim kami akan langsung datang ke tempat anda</p>
                            <a class="btn-solid-reg popup-with-move-anim" href="{{ route('bookingForm', 'mobil') }}">Pilih Service Mobil</a>
                        </div> <!-- end of text-container -->
                    </div> <!-- end of col -->
                    <div class="col-lg-6">
                        <img class="img-fluid" src="images/category-car.jpg" alt="alternative">
                    </div> <!-- end of col -->
                </div> <!-- end of row -->
            </div> <!-- end of container -->
        </div> <!-- end of second -->
    </div> <!-- end of basic-3 -->    
<!-- end of details 2 -->
@endsection
