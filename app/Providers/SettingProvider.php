<?php

namespace App\Providers;

use App\Models\Setting;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\ServiceProvider;

class SettingProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap services.
     */
    // public function boot(): void
    // {
    //     $settings = Setting::findOrFail(1);
    //     View::share('settings', $settings);
    // }

    public function boot(): void
{
    if (Schema::hasTable('settings') && Setting::find(1)) {
        $settings = Setting::find(1);
        View::share('settings', $settings);
    }
}
}
