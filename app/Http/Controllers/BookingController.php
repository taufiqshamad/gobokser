<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\{Booking, User};
use Illuminate\Support\Facades\Auth;

class BookingController extends Controller
{
    public function __construct()
    {
    	$this->middleware('auth');
    }

    public function services()
    {
    	return view('services');
    }

    public function bookingForm($type)
    {
    	return view('lokasi', compact('type'));
    }

    public function book(Request $request)
    {
    	$type		= $request->type;
    	$lokasi		= $request->lokasi;
    	$tipe_kendaraan		= $request->tipe_kendaraan;
    	$no_polisi		= $request->no_polisi;
    	$keluhan		= $request->keluhan;

    	$book = new Booking;
    	$book->tipe_service = $type;
    	$book->lokasi = $lokasi;
    	$book->tipe_kendaraan = $tipe_kendaraan;
    	$book->no_polisi = $no_polisi;
    	$book->keluhan = $keluhan;

    	if($book->save())
    		$user = User::find(Auth::user()->id);
    		$user->booking_id = $book->id;
    		$user->save();
    		
    		return redirect()->route('bookingComplete');
    }
}
