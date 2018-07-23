<?php

namespace App\Http\Middleware;

use App\User;
use Auth;
use Closure;

class TeamLeader
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
        $teamLeader = User::find($id);

        if($teamLeader->role !=2){
            //throw new \Exception('You are not Team Leader');
            redirect('home');

        }
        return $next($request);
    }
}
