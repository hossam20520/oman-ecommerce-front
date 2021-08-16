<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class mongoAuthController
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

        $request->session()->get('token');
        $code = $request->session()->get('code');
        // dd((\Request::is('admin/connections')));
   if($code == 403 && !(\Request::is('admin/connections/*'))){


    return redirect()->route('admin.connections.show' , 1);
   }
        // Session::put('code', 403); 
        return $next($request);
    }
}
