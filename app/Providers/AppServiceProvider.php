<?php

namespace App\Providers;

use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider // Class Name
{
    public function register()
    {
        //
    }

    public function boot(): void
    {
        // Get the locale from the session or fallback to the default locale
        // $locale = Session::get('locale', config('app.locale'));

        // Apply the locale globally
        // App::setLocale($locale);

        // Debug: Confirm locale in AppServiceProvider
        logger('AppServiceProvider Locale: '.App::getLocale());
    }
}
