<?php

namespace App\Http\Middleware;

use App\User;
Use Auth;

use Closure;

class Admin
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
        $id = Auth::id();
        $admin = User::find($id);

        if($admin['role'] >= 9){
            //throw new \Exception('Your are not admin');

            return $next($request);
        }
        else{
            redirect('home');
        }

    }
}
