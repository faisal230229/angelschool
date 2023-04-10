<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserAcess
{

    public function handle(Request $request, Closure $next, $userType)
    {
        $type = Auth::user()->type;
        if ($type == $userType) {
            return $next($request);
        }

        if ($type == 'admin') {
            return redirect('admin/');
        } else if ($type == 'teacher') {
            return redirect('/');
        }
    }
}
