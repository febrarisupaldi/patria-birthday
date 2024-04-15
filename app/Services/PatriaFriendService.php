<?php

namespace App\Services;

use App\Http\Requests\StoreFriendRequest;

interface PatriaFriendService
{
    public function getAllPatriaFriend():array;
    public function showTodayBirthday();
    public function storePatriaFriend(StoreFriendRequest $request);

}
