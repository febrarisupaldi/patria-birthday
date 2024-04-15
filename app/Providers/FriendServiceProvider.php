<?php

namespace App\Providers;

use App\Services\FriendService;
use App\Services\Impl\FriendServiceImpl;
use Illuminate\Contracts\Support\DeferrableProvider;
use Illuminate\Support\ServiceProvider;

class FriendServiceProvider extends ServiceProvider implements DeferrableProvider
{
    public array $singletons = [
        FriendService::class => FriendServiceImpl::class
    ];

    public function provides():array{
        return [FriendService::class];
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
