<?php

namespace App\Http\Middleware;

use Illuminate\Foundation\Http\Middleware\VerifyCsrfToken as Middleware;

class VerifyCsrfToken extends Middleware
{
    /**
     * The URIs that should be excluded from CSRF verification.
     *
     * @var array<int, string>
     */
    protected $except = [
        //不需要csrf表单验证的请求
        'http://localhost:8000/api/getform'
        // 'api/getform'  两种写法，效果相同
    ];
}
