@extends('layouts.app')

@section('content')
<!-- Header -->
    <header id="header" class="ex-header" style="background-color:#fff">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h1>Halaman Akun</h1>
                    <h3>Anda dapat mengelola akun dan nomor antrian</h6>
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
                            <h3 class="black">Nomor Antrian</h3>
                            <h6>Nomor antrian anda saat ini:</h6>
                            <h1 class="text-info">{{ $user->booking->no_antrian??"Belum ada Antrian" }}</h1>
                            <br>
                            {{-- <a href="{{ route('bookingComplete') }}" class="btn btn-solid-lg btn-block">Pilih Bengkel</a> --}}
                        </div>
                    </div>
                </div> <!-- end of col -->

                <div class="col-lg-6" style="margin-top:40px;">
                    <div class="col-lg-12 shadow p-0">
                        <div class="col-lg-12 py-4">
                            <h3 class="black">Akun Anda</h3>
                            <hr>
                            <h6>Nama</h6>
                            <h4 class="black">{{ $user->nama }}</h4>
                            <h6>Alamat</h6>
                            <h4 class="black">{{ $user->alamat }}</h4>
                            <h6>No. HP</h6>
                            <h4 class="black">{{ $user->no_telp }}</h4>
                            <h6>Email</h6>
                            <h4 class="black">{{ $user->email }}</h4>

                            {{-- <a href="{{ route('bookingComplete') }}" class="btn btn-solid-lg btn-block">Pilih Bengkel</a> --}}
                        </div>
                    </div>
                </div> <!-- end of col -->

            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of basic-2 -->
    <!-- end of details 1 -->
@endsection
