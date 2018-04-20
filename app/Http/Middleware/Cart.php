<?php

namespace App\Http\Middleware;

use Closure;

class Cart
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \Closure $next
     * @return mixed
     */
    protected function getTotalOrders()
    {

        if (auth()->user()) {
            $userId = auth()->user()->id;
            return \Cart::session($userId)->getTotal();
        }
        return \Cart::getTotal();
    }

    public function handle($request, Closure $next)
    {
        return $next($request);
    }
}

