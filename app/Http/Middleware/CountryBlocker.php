<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CountryBlocker
{
    public function handle(Request $request, Closure $next): Response
    {
        // تحديد IP اليوزر
        $ip = $request->ip();

        // جلب بيانات الدولة من API مجاني (ip-api.com)
        $geo = @json_decode(file_get_contents("http://ip-api.com/json/$ip"));

        // في حال فشل الجلب اسمح بالوصول
        if (!$geo || !isset($geo->countryCode)) {
            return $next($request);
        }

        // الحجب لجميع الدول إلا السعودية (SA)
        if ($geo->countryCode !== 'SA') {
            return response("Access denied", 403);
        }

        return $next($request);
    }
}
