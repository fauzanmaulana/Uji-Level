<?php

namespace App\Http\Middleware;

use Closure;

class CheckRole
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next, $role)
    {

        $check = explode('.', $role);
        if(!$request->user()){
            return redirect('login');
        }else{
            if ($request->user()->role !== $check[0] || $request->user()->role !== $check[1] || $request->user()->role !== $check[2] || $request->user()->role !== $check[3]) {
                return redirect('login');
            }
        }

        return $next($request);
    }
}
