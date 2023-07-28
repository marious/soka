<?php

namespace Modules\Frontend\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use ProtoneMedia\Splade\Facades\Splade;


class FrontMiddleware
{
    public function handle(Request $request, Closure $next)
    {
        Splade::setRootView('frontend::root');

        return $next($request);
    }
}
