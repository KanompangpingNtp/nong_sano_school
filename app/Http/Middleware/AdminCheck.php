<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Auth;

class AdminCheck
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        // ตรวจสอบว่าผู้ใช้ล็อกอินแล้วและมีระดับเป็น 'admin'
        if (Auth::check() && Auth::user()->level === 'admin') {
            return $next($request);
        }

        // หากไม่ผ่านการตรวจสอบ ให้ redirect หรือแสดงข้อความ
        return redirect()->route('showLoginForm')->with('error', 'ต้องเข้าสู่ระบบก่อน');
    }
}
