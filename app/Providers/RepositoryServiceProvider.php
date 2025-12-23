<?php

namespace App\Providers;

use App\Contracts\Repositories\AboutMultiImagesRepositoryInterface;
use App\Contracts\Repositories\AboutRepositoryInterface;
use App\Contracts\Repositories\BlogRepositoryInterface;
use App\Contracts\Repositories\ServiceRepositoryInterface;
use App\Repositories\AboutMultiImagesRepository;
use App\Repositories\AboutRepository;
use App\Repositories\BlogRepository;
use App\Repositories\ServiceRepository;
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
        $this->app->bind(AboutMultiImagesRepositoryInterface::class, AboutMultiImagesRepository::class);
        $this->app->bind(ServiceRepositoryInterface::class, ServiceRepository::class);
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //
    }
}
