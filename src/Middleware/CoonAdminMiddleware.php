<?php

namespace Atul4065\Coon\Middleware;

use Illuminate\Http\Request;
use Closure;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Routing\Controllers\Middleware;

class CoonAdminMiddleware extends Middleware
{

    public function handle(Request $request, Closure $next): Response
    {

        dd('failed');
        // if (Auth::check()) {
        //     return redirect()->route('coon-admin-dashboard');
        //     return $next($request);
        // }
        // return redirect('admin/authenticate');
    }

    // protected function redirectTo(Request $request): ?string
    // {
    //     return $request->expectsJson() ? null : route('coon-admin-login-view');
    // }
}
