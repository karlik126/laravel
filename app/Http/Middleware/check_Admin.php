<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 06.06.2018
 * Time: 13:53
 */

namespace App\Http\Middleware;
use Closure;
use Illuminate\Support\Facades\Auth;

class check_Admin
{
    public function handle($request, Closure $next)
    {
        if(Auth::id()==4){
            return $next($request);
        }
        return abort(404);

    }

}