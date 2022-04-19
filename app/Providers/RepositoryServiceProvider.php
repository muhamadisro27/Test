<?php

namespace App\Providers;

use App\Http\Interfaces\MatchInterface;
use Illuminate\Support\ServiceProvider;
use App\Http\Repositories\MatchRepository;

class RepositoryServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(MatchInterface::class, MatchRepository::class);
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
