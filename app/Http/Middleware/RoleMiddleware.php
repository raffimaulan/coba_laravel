<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RoleMiddleware
{
    /**
     * Handle an incoming request.
     * Cek role user, jika tidak sesuai, redirect atau abort.
     */
    public function handle(Request $request, Closure $next, ...$roles)
    {
        $user = Auth::user();
        if (!$user || !in_array($user->role, $roles)) {
            // Bisa redirect ke halaman 403 atau dashboard misal
            abort(403, 'Unauthorized');
        }

        return $next($request);
    }
}
