@extends('layouts.app')

@section('content')
<!-- Header -->
    <header id="header" class="ex-header" style="background-color:#fff">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h1>Detail Booking</h1>
                    <h3>Pilih Bengkel dan Kirim No. Antrian</h6>
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
                        <div class="col-lg-12 py-4">
                            <div>
                                <span style="font-size:10px;color:#fff;padding:10px;border-radius:50px;background-color:{{ $booking->bookingComplete==true?"#28a745":"#ffc107" }}">
                                    {{ $booking->bookingComplete==true?"Complete":"Belum Complete" }}
                                </span>
                            </div>
                            <h3 class="black mt-3">{{ $booking->tipe_service=='motor'?'Motor':'Mobil' }} - {{ $booking->tipe_kendaraan }}</h3>

                            <h6>{{ $booking->no_polisi }}</h6>
                            <h4 class="text-info">{{ $booking->lokasi }}</h4>
                            <br>
                            <h6>Pemesan</h6>
                            <h4 class="black">{{ $booking->user->nama }}</h6>
                            <h4>{{ $booking->user->no_telp }}</h6>
                        </div>
                    </div>
                </div> <!-- end of col -->

            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of basic-2 -->
    <!-- end of details 1 -->
@endsection
