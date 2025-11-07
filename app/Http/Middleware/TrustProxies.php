<?php

namespace App\Http\Middleware;

use Illuminate\Http\Request;
use Illuminate\Http\Middleware\TrustProxies as Middleware;

class TrustProxies extends Middleware
{
    /**
     * Trust all proxies (Render Load Balancer)
     */
    protected $proxies = '*';

    /**
     * Use forwarded headers to detect HTTPS
     */
    protected $headers = Request::HEADER_X_FORWARDED_PROTO
                        | Request::HEADER_X_FORWARDED_HOST
                        | Request::HEADER_X_FORWARDED_PORT
                        | Request::HEADER_X_FORWARDED_FOR;
}
