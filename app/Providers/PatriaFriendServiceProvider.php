<?php

namespace App\Providers;

use App\Services\Impl\PatriaFriendServiceImpl;
use App\Services\PatriaFriendService;
use Illuminate\Contracts\Support\DeferrableProvider;
use Illuminate\Support\ServiceProvider;

class PatriaFriendServiceProvider extends ServiceProvider implements DeferrableProvider
{
    public array $singletons = [
        PatriaFriendService::class => PatriaFriendServiceImpl::class
    ];

    public function provides():array{
        return [PatriaFriendService::class];
    }

    /**
     * Register services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //
    }
}
