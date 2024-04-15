<?php

namespace App\Services\Impl;

use App\Http\Requests\StoreFriendRequest;
use App\Models\PatriaFriend;
use App\Services\PatriaFriendService;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Request;

class PatriaFriendServiceImpl implements PatriaFriendService{
    public function getAllPatriaFriend(): array{
        $friend = PatriaFriend::all();
        return $friend->all();
    }

    public function showTodayBirthday(){
        $data = PatriaFriend::whereRaw("DAY(friend_birthday_date) = DAY(CURDATE())
                AND MONTH(friend_birthday_date) = MONTH(CURDATE())")->get();
        if(count($data) == 0)
            $data = [];
        return $data;
    }

    public function storePatriaFriend(StoreFriendRequest $request){
        $check = PatriaFriend::create([
            'friend_name'           => $request->friend_name,
            'friend_birthday_date'  => $request->friend_birthday_date,
            'friend_email'          => $request->friend_email,
            'friend_whatsapp'       => $request->friend_whatsapp,
            'friend_instagram'      => $request->friend_instagram,
            'friend_facebook'       => $request->friend_facebook
        ]);

        return $check;
    }
}
