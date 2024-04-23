<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreFriendRequest;
use App\Mail\NotifBirthdayMail;
use App\Services\PatriaFriendService;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class PatriaFriendController extends Controller
{
    private PatriaFriendService $patriaFriendService;

    public function __construct(PatriaFriendService $patriaFriendService)
    {
        $this->patriaFriendService = $patriaFriendService;
    }

    public function index(Request $request): JsonResponse
    {
        $data = $this->patriaFriendService->getAllPatriaFriend();
        return response()->json(["status" => "ok", "message" => "ok", "data" => $data], 200);
    }

    public function showTodayBirthday(): JsonResponse
    {
        $data = $this->patriaFriendService->showTodayBirthday();
        if (count($data) == 0)
            $data = [];
        return response()->json(["status" => "ok", "message" => "ok", "data" => $data], 200);
    }

    public function sendEmailNotif(): JsonResponse
    {
        $data = $this->patriaFriendService->showTodayBirthday();
        if (count($data) > 0) {
            try {
                foreach (['febsupaldi@gmail.com', 'nopiahirawan26@gmail.com', 'firalstr30@gmail.com'] as $receipent) {
                    Mail::to($receipent)->send(new NotifBirthdayMail($data));
                }
                return response()->json(["status" => "ok", "message" => "ok", "data" => $data], 200);
            } catch (\Throwable $th) {
                return response()->json(["status" => "error", "message" => "error", "data" => $data], 500);
            }
        }

        return response()->json(["status" => "error", "message" => "error", "data" => "not found"], 200);
    }
    public function saveFriend(StoreFriendRequest $request): JsonResponse
    {
        $data = $this->patriaFriendService->storePatriaFriend($request);
        return response()->json(["status" => "ok", "message" => $data], 200);
    }
}
