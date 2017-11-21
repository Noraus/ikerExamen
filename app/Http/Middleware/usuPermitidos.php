<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\DB;

class usuPermitidos
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
        $nombre = $request->nombre;
        $permiso = DB::table('usuPermitidos')->where('nombreUsu', $nombre)->value('permiso');
        if ($permiso == 1) {
            return redirect('/usuPermitido');
        } else {
            return redirect('/usuNoPermitido');
        }
        //return $next($request);
    }
}
