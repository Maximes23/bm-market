<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class AdminMiddleware
{
    public function handle(Request $request, Closure $next): Response
    {
        // Vérifie si l'utilisateur est connecté ET si son rôle est 'admin'
        if (Auth::check() && Auth::user()->role === 'admin') {
            // Si c'est un admin, on le laisse passer
            return $next($request);
        }

        // Sinon, on le redirige
        return redirect('/dashboard')->with('error', 'Accès non autorisé.');
    }
}