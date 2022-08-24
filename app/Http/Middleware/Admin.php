<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class Admin
{
    public function handle(Request $request, Closure $next)
    {
        if(Auth::check() && in_array(4,get_user_roles()))
        {
            return $next($request);
        }
        else
        {
            return redirect()->route('buyer.dashboard');
        }
    }
}
