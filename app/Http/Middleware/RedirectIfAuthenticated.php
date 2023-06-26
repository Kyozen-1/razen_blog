<?php

namespace App\Http\Middleware;

use App\Providers\RouteServiceProvider;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RedirectIfAuthenticated
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @param  string|null  ...$guards
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle($request, Closure $next, $guard = null)
    {
        switch($guard)
        {
            case 'razen_blog':
                if(Auth::guard($guard)->check())
                {
                    return redirect()->route('razen-blog.admin.dashboard.index');
                }
            case 'penulis':
                if(Auth::guard($guard)->check())
                {
                    return redirect()->route('razen-blog.penulis.dashboard.index');
                }
        }

        return $next($request);
    }
}
