<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Auth;

class AdminMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if (!Auth::check()) {
            return redirect()->route('user.login');
        }
        $role = Auth::user()->role;
        if ($role == 2) {
            return $next($request);
        }
        if ($role == 1) {
            return redirect()->route('doctor.dashboard');
        }
        if ($role == 0) {
            return redirect()->route('patein.dashboard');
        }
    }
}
