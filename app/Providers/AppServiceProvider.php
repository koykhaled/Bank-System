<?php

namespace App\Providers;

use App\Models\Customer;
use App\Observers\TransfareObserve;
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
        //

        Customer::observe(TransfareObserve::class);
    }
}