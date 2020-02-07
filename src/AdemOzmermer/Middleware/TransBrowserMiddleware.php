<?php


namespace AdemOzmermer\TransBrowser\Middleware;

use AdemOzmermer\TransBrowser\TransBrowser;
use Closure;
use Illuminate\Support\Facades\App;

class TransBrowserMiddleware extends TransBrowser
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        App::setLocale($this->detectLang($request));

        return $next($request);
    }
}
