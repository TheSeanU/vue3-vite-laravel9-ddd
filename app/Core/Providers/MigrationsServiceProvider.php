<?php declare(strict_types = 1);

namespace App\Core\Providers;

use Illuminate\Support\ServiceProvider;

class MigrationsServiceProvider extends ServiceProvider
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
        $this->loadMigrationsFrom(glob('App/Domain/' . "*" . '/Database/Migrations/' . "*.php"));
        $this->loadMigrationsFrom(glob('App/Core/Database/Migrations/' . "*.php")); 
    }
}
