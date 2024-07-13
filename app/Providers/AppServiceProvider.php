<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Gate;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Gate::define('isAdmin', function($user) {
            return $user->level == 'Admin';
        });

        Gate::define('isGudang', function($user) {
            return $user->level == 'Gudang';
        });

        Gate::define('isSales', function($user) {
            return $user->level == 'Sales';
        });
    }
}
