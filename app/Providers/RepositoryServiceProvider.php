<?php

namespace App\Providers;

use App\Contracts\Repositories\AboutRepositoryInterface;
use App\Contracts\Repositories\BlogRepositoryInterface;
use App\Repositories\AboutRepository;
use App\Repositories\BlogRepository;
use Illuminate\Support\ServiceProvider;

class RepositoryServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        $this->app->bind(AboutRepositoryInterface::class, AboutRepository::class);
        $this->app->bind(BlogRepositoryInterface::class, BlogRepository::class);
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //
    }
}
