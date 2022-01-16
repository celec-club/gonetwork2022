<?php

namespace App\Providers;

use App\Charts\UsersCelecChart;
use App\Charts\UsersUsthbChart;
use ConsoleTVs\Charts\Registrar as Charts;
use Illuminate\Support\ServiceProvider;

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
    public function boot(Charts $charts)
    {
        $charts->register([
            UsersUsthbChart::class,
            UsersCelecChart::class
        ]);
    }
}
