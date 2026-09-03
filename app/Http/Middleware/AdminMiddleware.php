<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class AdminMiddleware
{
    public function handle(Request $request, Closure $next): Response
    {
        /** @var \App\Models\User|null $user */
        $user = $request->user();

        if ($user && $user->isAdmin()) {
            return $next($request);
        }

        return redirect('/')->with('error', 'No tienes permisos de administrador.');
    }
}