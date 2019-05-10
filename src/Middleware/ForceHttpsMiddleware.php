<?php

    namespace Blixx\ForceHttps\Middleware;

    use Closure;

    class ForceHttpsMiddleware
    {
        /**
         * Handle an incoming request.
         *
         * @param  \Illuminate\Http\Request  $request
         * @param  \Closure  $next
         * @param  string|null  $guard
         * @return mixed
         */
        public function handle($request, Closure $next, $guard = null)
        {

            if (env('APP_ENV') !== 'local'){
                if (!$request->secure() && $request->server('HTTP_X_FORWARDED_PROTO') !== 'https'){

                    return \Redirect::to(str_replace('http://', 'https://', $request->fullUrl()));

                }
            }

            return $next($request);
        }
    }
