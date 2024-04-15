<?php

namespace App\Providers;

use App\Services\Impl\PatriaFriendServiceImpl;
use App\Services\PatriaFriendService;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->app->bind(PatriaFriendService::class, PatriaFriendServiceImpl::class);
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
