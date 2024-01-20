<?php

namespace App\Providers;

use App\Services\CustomerTransfareService;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
        $this->app->bind(CustomerTransfareService::class, function ($app) {
            return new CustomerTransfareService();
        });
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}