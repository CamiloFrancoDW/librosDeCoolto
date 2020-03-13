<?php

namespace App\Http\Middleware;

use Closure;
use Auth;
class Validar_admin
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
        $user = Auth::user();
        if( $user->user_tipe !=1 ) {
            return redirect('/');    
        }
        return $next($request);
    }
}
