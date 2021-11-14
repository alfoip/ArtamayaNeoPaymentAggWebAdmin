<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;

class AuthAdminOnly
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        Log::debug('HIHIHI');
        Log::debug($request->session()->exists('xxxSessId'));
        Log::debug($request->session()->get('xxxSessId'));

        if ($request->session()->exists('xxxSessId') && $request->session()->exists('xxxSessEmail')) {
            return $next($request);
        } else {
            $request->session()->flush();
            Auth::logout();
            return redirect('/login');
        }
    }
}
