<?php

namespace App\Http\Middleware;

use App\User;
use Closure;

class CheckExistProfile
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \Closure $next
     *
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $user = User::find($request->id);

        if (!$user) {
            abort(404);
        }

        return $next($request);
    }
}
