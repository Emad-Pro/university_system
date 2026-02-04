<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use GeoIP;

class CountryBlock
{
    public function handle(Request $request, Closure $next)
    {
        $country = GeoIP::getLocation($request->ip())->iso_code;

        // السماح فقط للسعودية
        if ($country !== 'SA') {
            abort(403, 'Access denied.');
        }

        return $next($request);
    }
}
