<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\{Hash,Auth};
use App\{Booking, User, Bengkel};

class AdminController extends Controller
{
    public function __construct()
    {
    	$this->middleware('auth.admin')->except(['login','auth']);
    }

    public function home()
    {
    	$bookings = Booking::all();
    	$bengkels = Bengkel::all();
    	return view('admin.home', compact(['bookings','bengkels']));
    }

    public function showBooking($id)
    {
    	$booking = Booking::find($id);
    	return view('admin.showBooking', compact('booking'));
    }

    public function prosesAntrian(Request $request, $id)
    {
    	$booking = Booking::find($id);
    	$booking->no_antrian = $request->no_antrian;
    	$booking->bengkel_id = $request->bengkel;
    	if($booking->save())
	    	return redirect()->route('admin.home')->with([
	    		'success' => 'Antrian Berhasil Diproses'
	    	]);
    }

    public function completeBooking($id)
    {
    	$booking = Booking::find($id);
    	$booking->bookingComplete = true;
    	$booking->user->booking_id = NULL;
    	$booking->user->save();
    	if($booking->save())
    		return redirect()->route('admin.home')->with([
	    		'success' => 'Antrian Berhasil Diproses'
	    	]);		
    }

    public function login()
    {
    	return view('admin.login');
    }

    public function auth(Request $request)
    {
        $this->validate($request, [
            'email'     => 'required',
            'password'  => 'required|min:3'
        ]);
        $email = $request->email;
        if(!Auth::attempt($request->only('email', 'password'))){
            // echo "L";
            // exit;
            Auth::logout();
            return redirect()->back()->with([
                'alert'=>'Email atau Password Salah',
                'email' => $email
            ]);
        }

        if(!Auth::user()->isAdmin){
            // echo "M";
            // exit;
            Auth::logout();
            return redirect()->back()->with([
                'alert'=>'Maaf, Anda Bukan Admin',
                'email' => $email
            ]);
        }
        // echo "D";
        // exit;
        return redirect()->route('admin.home');
    }

    public function logout()
    {
        Auth::logout();

        return redirect()->route('admin.login');
    }
}
