<?php

namespace App\Providers;

use App\Repositories\TaskRepositoryInterface; 
use App\Repositories\Eloquent\TaskRepository;
use App\Repositories\ProjectRepositoryInterface; 
use App\Repositories\Eloquent\ProjectRepository;
use Illuminate\Support\ServiceProvider;

/** 
* Class RepositoryServiceProvider 
* @package App\Providers 
*/
class RepositoryServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(TaskRepositoryInterface::class, TaskRepository::class);
        $this->app->bind(ProjectRepositoryInterface::class, ProjectRepository::class);
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
