<?php

namespace App\Http\Middleware;

use App\User;
use Closure;

class CheckUserAuthOnTask
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
        if(!\Auth::check()){
            abort(403);
        }
        
        $val = User::find(\Auth::user()->id)->tasks()->where('id', $request->route('task'))->get()->all();
        if(!count($val)){
            abort(403);
        }
        
        return $next($request);
    }
}
