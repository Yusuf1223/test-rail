<?php

namespace App\Providers;

use App\Repositories\Eloquent\BaseRepository;
use App\Repositories\Eloquent\NewsRepository;
use App\Repositories\Eloquent\ServiceRepository;
use App\Repositories\EloquentRepositoryInterface;
use App\Repositories\NewsRepositoryInterface;
use App\Repositories\ServiceRepositoryInterface;
use Illuminate\Support\ServiceProvider;

class RepositoryServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(EloquentRepositoryInterface::class, BaseRepository::class);
        $this->app->bind(ServiceRepositoryInterface::class, ServiceRepository::class);
        $this->app->bind(NewsRepositoryInterface::class,NewsRepository::class);
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
