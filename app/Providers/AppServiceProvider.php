<?php

namespace App\Providers;

use App\Repositories\Contracts\MoviesRepositoriesInterface;
use App\Repositories\movieRepository;
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
        $this->app->bind(
            MoviesRepositoriesInterface::class,
            movieRepository::class,        
        );

    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
