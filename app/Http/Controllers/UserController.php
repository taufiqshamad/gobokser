<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function __constuct()
    {
    	$this->middleware('auth');
    }

    public function account()
    {
    	$user = Auth::user();
    	return view('account',compact('user'));
    }
}
