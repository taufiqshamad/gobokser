@extends('layouts.app')

@section('content')
<!-- Header -->
    <header id="header" class="ex-header" style="background-color:#fff">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h1>Bengkel Tersedia</h1>
                    <h3>Silahkan pilih bengkel terdekat yang tersedia</h6>
                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </header> <!-- end of ex-header -->
<!-- end of header -->
<!-- Details 1 -->
    <div>
        <div class="container">
            <div class="row">

                <div class="col-lg-6" style="margin-top:40px;">
                    <div class="col-lg-12 shadow p-0">
                        <img class="img-fluid" style="width:100%" src="images/bengkel1.jpg" alt="alternative">
                        <div class="col-lg-12 py-4">
                            <h3 class="black">BENGKEL JAYA MANDIRI</h3>
                            <h6>Jl. Gatot Subroto No. 50A</h6>
                            <h4 class="text-info">No Antrian Sekarang : 54</h4>
                            <br>
                            <a href="{{ route('bookingComplete') }}" class="btn btn-solid-lg btn-block">Pilih Bengkel</a>
                        </div>
                    </div>
                </div> <!-- end of col -->

                <div class="col-lg-6" style="margin-top:40px;">
                    <div class="col-lg-12 shadow p-0">
                        <img class="img-fluid" style="width:100%" src="images/bengkel2.jpg" alt="alternative">
                        <div class="col-lg-12 py-4">
                            <h3 class="black">BENGKEL JAYA MANDIRI</h3>
                            <h6>Jl. Gatot Subroto No. 50A</h6>
                            <h4 class="text-info">No Antrian Sekarang : 54</h4>
                            <br>
                            <a href="{{ route('bookingComplete') }}" class="btn btn-solid-lg btn-block">Pilih Bengkel</a>
                        </div>
                    </div>
                </div> <!-- end of col -->

                <div class="col-lg-6" style="margin-top:40px;">
                    <div class="col-lg-12 shadow p-0">
                        <img class="img-fluid" style="width:100%" src="images/bengkel3.jpg" alt="alternative">
                        <div class="col-lg-12 py-4">
                            <h3 class="black">BENGKEL JAYA MANDIRI</h3>
                            <h6>Jl. Gatot Subroto No. 50A</h6>
                            <h4 class="text-info">No Antrian Sekarang : 54</h4>
                            <br>
                            <a href="{{ route('bookingComplete') }}" class="btn btn-solid-lg btn-block">Pilih Bengkel</a>
                        </div>
                    </div>
                </div> <!-- end of col -->

                <div class="col-lg-6" style="margin-top:40px;">
                    <div class="col-lg-12 shadow p-0">
                        <img class="img-fluid" style="width:100%" src="images/bengkel4.jpg" alt="alternative">
                        <div class="col-lg-12 py-4">
                            <h3 class="black">BENGKEL JAYA MANDIRI</h3>
                            <h6>Jl. Gatot Subroto No. 50A</h6>
                            <h4 class="text-info">No Antrian Sekarang : 54</h4>
                            <br>
                            <a href="{{ route('bookingComplete') }}" class="btn btn-solid-lg btn-block">Pilih Bengkel</a>
                        </div>
                    </div>
                </div> <!-- end of col -->

            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of basic-2 -->
    <!-- end of details 1 -->
@endsection
