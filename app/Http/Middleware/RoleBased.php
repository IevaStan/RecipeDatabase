<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class RoleBased
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        if (!$this->isAdmin($request)) {
            abort(403);
        }
        return $next($request);
    }
    private function isAdmin(Request $request): bool
    {
        return $request->user() && $request->user()->role === 'admin';
    }
}
