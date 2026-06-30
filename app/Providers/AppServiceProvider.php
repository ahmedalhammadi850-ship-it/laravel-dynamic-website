<?php

namespace App\Providers;

use App\Models\Setting;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        // Share $settings with ALL front views (including footer partial)
        View::composer('front.*', function ($view) {
            $settings = Setting::first();
            $view->with('settings', $settings);
        });

        // Also share with the partials directly
        View::composer('front.partials.*', function ($view) {
            $settings = Setting::first();
            $view->with('settings', $settings);
        });
    }
}
