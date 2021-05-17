@extends('layouts.appAdmin')

@section('content')
<!-- Header -->
    <header id="header" class="ex-header" style="background-color:#fff">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h1>Booking masuk</h1>
                    <h3>Daftar booking yang masuk</h6>
                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </header> <!-- end of ex-header -->
<!-- end of header -->
<!-- Details 1 -->
    <div>
        <div class="container">
            <div class="row">
                @foreach($bookings as $booking)

                <div class="col-lg-12" style="margin-top:40px;">
                    <div class="col-lg-12 shadow p-0 d-flex flex-wrap">
                        <div class="col-lg-6 py-4">
                            <div>
                                <span style="font-size:10px;color:#fff;padding:10px;border-radius:50px;background-color:{{ $booking->bookingComplete==true?"#28a745":"#ffc107" }}">
                                    {{ $booking->bookingComplete==true?"Complete":"Belum Complete" }}
                                </span>
                            </div>
                            <h3 class="black mt-3">{{ $booking->tipe_service=='motor'?'Motor':'Mobil' }} - {{ $booking->tipe_kendaraan }}</h3>

                            <h6>{{ $booking->no_polisi }}</h6>
                            <h4 class="text-info">{{ $booking->lokasi }}</h4>
                            @if(!empty($booking->user))
                            <br>
                            <h6>Pemesan</h6>
                            <h4 class="black">{{ $booking->user->nama }}</h6>
                            <h4>{{ $booking->user->no_telp }}</h6>
                            @endif
                            {{-- <hr> --}}
                            @if(empty($booking->user->no_antrian))
                                {{-- <a href="{{ route('admin.showBooking', $booking) }}" class="btn btn-solid-lg btn-block">Kirim No. Antrian</a> --}}
                            @else
                                {{-- <a href="{{ route('admin.showBooking', $booking) }}" class="btn btn-solid-lg btn-block">Complete Booking</a> --}}
                            @endif
                        </div>
                        <div class="col-lg-6 py-4">
                            @if(!$booking->bookingComplete)
                            <h2 class="black">Antrian</h2>
                            @if(empty($booking->no_antrian))
                            <form method="POST" action="{{ route('admin.prosesAntrian', $booking) }}">
                                @csrf
                                <div class="form-group">
                                    <label>Bengkel</label>
                                    <select name="bengkel" class="form-control">
                                        @foreach($bengkels as $bengkel)
                                        <option value="{{ $bengkel->id }}">{{ $bengkel->nama }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>No. Antrian</label>
                                    <input type="text" name="no_antrian" class="form-control">
                                </div>
                                <button type="submit" class="btn btn-solid-lg btn-block">Proses Antrian</button>
                            </form>
                            @else
                            <h4 class="text-info">No. Antrian : {{ $booking->no_antrian }}</h4>
                            <br>
                            <h6>Bengkel</h6>
                            <h4 class="black">{{ $booking->bengkel->nama }}</h4>
                            <form method="POST" action="{{ route('admin.completeBooking', $booking) }}">
                                @csrf
                                <button type="submit" class="btn btn-solid-lg btn-block">Complete Booking</button>
                            </form>
                            @endif
                            @endif
                        </div>
                    </div>
                </div> <!-- end of col -->

                @endforeach
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of basic-2 -->
    <!-- end of details 1 -->
@endsection
