<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;
class AuthenticateAdmin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if(Auth::check()){
            if(!Auth::user()->isAdmin){
                Auth::logout();
                return redirect()->route('admin.login')->with('alert', 'Anda bukan admin, tidak bisa masuk ke halaman admin');
            }
            return $next($request);
        }
        else{
            return redirect()->route('admin.login')->with('alert', 'Anda belum masuk, silahkan masuk terlebih dahulu');
        }
    }
}
