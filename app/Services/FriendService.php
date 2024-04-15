<?php

namespace App\Services;

use App\Http\Requests\StoreFriendRequest;

interface FriendService
{
    public function getAllFriend():array;
    public function showTodayBirthday();
    public function storeFriend(StoreFriendRequest $request);

}
