<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Session;

class SetLocale
{
    public function handle($request, Closure $next)
    {
        // Get locale from session or fallback to default
        $locale = Session::get('locale', config('app.locale'));

        // Set the application locale
        App::setLocale($locale);

        // Debug: Log the applied locale in the middleware
        Log::debug('Middleware Locale: '.App::getLocale());

        return $next($request);
    }
}
