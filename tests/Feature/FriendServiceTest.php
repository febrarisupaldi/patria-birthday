<?php

namespace Tests\Feature;

use App\Services\FriendService;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class FriendServiceTest extends TestCase
{
    private FriendService $friendService;

    protected function setUp():void{
        parent::setUp();
        $this->friendService = $this->app->make(FriendService::class);
    }

    public function testFriendNotNull(){
        $this->assertNotNull($this->friendService);
    }
}
