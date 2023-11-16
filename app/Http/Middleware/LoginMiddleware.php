<?php
namespace App\Http\Middleware;

use closure;

class LoginMiddleware
{
    public function handle($request, Closure $next)
    {
        if (!($request -> input('username') == 'mobile' && $request -> input('password') == 'legend')) {
            return "Anda tidak diijinkan  untuk mengakses mobile legend, karena username dan password salah.";
         }
         return $next($request);
    }
}