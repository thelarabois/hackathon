<?php

namespace App\Providers;

use Illuminate\Support\Facades\Blade;
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
        Blade::component('components.header', 'header');
        Blade::component('components.sidebar', 'sidebar');
        Blade::component('components.footer', 'footer');
        Blade::component('components.search-bar', 'search-bar');
        Blade::component('components.notifications', 'notifications');
        Blade::component('components.messages', 'messages');
        Blade::component('components.profile', 'profile');
        // Table
        Blade::component('components.tables.user', 'tables-user');
    }
}
