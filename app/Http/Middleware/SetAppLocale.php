<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

/**
 * Class SetAppLocale
 *
 * @package App\Http\Middleware
 */
class SetAppLocale
{
    /**
     * Handle an incoming request.
     *
     * @param \Illuminate\Http\Request $request
     * @param \Closure $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        App::setLocale(rtrim($request->route('locale', config('app.locale')), '/'));

        return $next($request);
    }
}
