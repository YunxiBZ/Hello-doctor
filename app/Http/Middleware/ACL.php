<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ACL
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next, ...$routeRoles)
    {
        // on vérifie que l'utilisateur est connecté
        if (Auth::check()) {
            $userConnected = Auth::user();
            $userRoles = explode(",", $userConnected->roles);

            // on regarde tous les droits autorisé sur la route
            foreach ($routeRoles as $roleRoute) {
                // on vérifie que le rôle en cours d'analyse de la route existe dans la liste des rôles de l'utilisateur
                if (in_array($roleRoute, $userRoles)) {
                    return $next($request);
                }
            }
        }

        abort(403);
    }
}
