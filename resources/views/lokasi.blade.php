@extends('layouts.app')

@section('content')
<!-- Header -->
    <header id="header" class="ex-header" style="background-color:#fff">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-3">
                    <h2 class="black">Lokasi dan Keluhan</h1>
                    <h5>Silahkan isi lokasi anda saat ini dan keluhan anda</h6>
                    <form method="POST" action="{{route('book')}}">
                        @csrf
                        <div class="form-group pt-4 mt-4">
                            <h3 class="float-left black">Tipe Service : <span class="text-info">{{ $type=="motor"?"Motor":"Mobil" }}</span></h3>
                            <input type="hidden" name="type" value="{{ $type }}">
                        </div>
                        <div class="form-group pt-4 mt-4">
                            <label class="float-left">Lokasi</label>
                            <input class="form-control" placeholder="Contoh : Jl. Sisingamangaraja No. 54A" name="lokasi">
                        </div>
                        <div class="form-group">
                            <label class="float-left">Kendaraan</label>
                            <input class="form-control" name="tipe_kendaraan" placeholder="Contoh : Honda Brio">
                        </div>
                        <div class="form-group">
                            <label class="float-left">No. Polisi</label>
                            <input class="form-control" name="no_polisi" placeholder="Contoh : BA 1541 SC">
                        </div>
                        <div class="form-group">
                            <label class="float-left">Keluhan</label>
                            <textarea name="keluhan" placeholder="Contoh : Mesin Mati Mendadak atau Ban Bocor" class="form-control">
                                
                            </textarea>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-solid-lg btn-block">Lanjut</button>  
                        </div>
                    </form>
                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </header> <!-- end of ex-header -->
<!-- end of header -->
@endsection
