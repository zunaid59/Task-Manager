<?php

namespace App\Http\Middleware;

use App\User;
use Closure;

use Illuminate\Support\Facades\Auth;

class Role
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
        $role = User::find('role');

        if($role !== '1'){

        throw new \Exception('your are not authorized this page');
    }

        return $next($request);



    }
}
