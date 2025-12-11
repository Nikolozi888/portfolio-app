<?php

namespace App\Providers;

use App\Contracts\Repositories\AboutRepositoryInterface;
use App\Repositories\AboutRepository;
use Illuminate\Support\ServiceProvider;

class RepositoryServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        $this->app->bind(AboutRepositoryInterface::class, AboutRepository::class);
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //
    }
}
