<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use App\Models\Visitor;
class VisitorCounterMiddleware
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
       // return $next($request);
        $ipAddress = $request->ip();
        $userAgent = $request->userAgent();

        if (!Visitor::where('ip_address', $ipAddress)
            ->whereDate('visited_at', date('Y-m-d'))->exists()) {
            Visitor::create([
                'ip_address' => $ipAddress,
                'visited_at' => now(),
                'user_agent' => $userAgent,
            ]);
        }

        return $next($request);
    }
}
