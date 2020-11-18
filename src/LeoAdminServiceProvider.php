<?php

namespace Alqudiry\LeoAdmin;

use Illuminate\Support\ServiceProvider;

class LeoAdminServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $this->publishes([
            __DIR__.'/app/Controllers' => app_path('Http/Controllers/Dashboard'),
            __DIR__.'/app/Forms' => app_path('Forms/Dashboard'),
            __DIR__.'/app/Models' => app_path('Models'),
            __DIR__.'/database' => database_path('migrations'),
            __DIR__.'/config/leoadmin.php' => config_path('leoadmin.php'),
            __DIR__.'/resources/views' => resource_path('views'),
            __DIR__.'/public' => public_path('leoadmin'),
        ]);
    }
}
