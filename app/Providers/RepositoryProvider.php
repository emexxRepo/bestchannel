<?php

namespace App\Providers;

use App\Opportunity;
use App\Repositories\UserRepository;
use App\Repositories\UserRepositoryInterface;
use App\Repositories\ApplyRepository;
use App\Repositories\ApplyRepositoryInterface;
use App\Repositories\CompanyRepository;
use App\Repositories\CompanyRepositoryInterface;
use App\Repositories\OpportunityRepository;
use App\Repositories\OpportunityRepositoryInterface;
use App\Repositories\SectorRepository;
use App\Repositories\SectorRepositoryInterface;
use App\Repositories\SocialRepository;
use App\Repositories\SocialRepositoryInterface;
use Illuminate\Support\ServiceProvider;

class RepositoryProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(UserRepositoryInterface::class,UserRepository::class);
        $this->app->bind(ApplyRepositoryInterface::class,ApplyRepository::class);
        $this->app->bind(CompanyRepositoryInterface::class,CompanyRepository::class);
        $this->app->bind(OpportunityRepositoryInterface::class,OpportunityRepository::class);
        $this->app->bind(SectorRepositoryInterface::class,SectorRepository::class);
        $this->app->bind(SocialRepositoryInterface::class,SocialRepository::class);
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
