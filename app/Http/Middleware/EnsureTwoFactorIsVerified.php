<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class EnsureTwoFactorIsVerified
{
    public function handle(Request $request, Closure $next): Response
    {
        $user = $request->user();

        if ($user && $user->google2fa_enabled && ! $request->session()->get('2fa_verified')) {
            if (! $request->routeIs('2fa.challenge', '2fa.verify', 'logout')) {
                return redirect()->route('2fa.challenge');
            }
        }

        return $next($request);
    }
}