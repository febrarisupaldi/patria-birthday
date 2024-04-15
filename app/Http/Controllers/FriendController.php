<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreFriendRequest;
use App\Mail\NotifBirthdayMail;
use App\Services\FriendService;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class FriendController extends Controller
{
    private FriendService $friendService;

    public function __construct(FriendService $friendService){
        $this->friendService = $friendService;
    }

    public function index(Request $request):JsonResponse{
        $data = $this->friendService->getAllFriend();
        return response()->json(["status"=>"ok","message"=>"ok","data"=>$data],200);
    }

    public function showTodayBirthday():JsonResponse{
        $data = $this->friendService->showTodayBirthday();
        if(count($data) == 0)
            $data = [];
        return response()->json(["status"=>"ok","message"=>"ok","data"=>$data],200);
    }

    public function sendEmailNotif():JsonResponse{
        $data = $this->friendService->showTodayBirthday();
        if(count($data) > 0){
            try {
                Mail::to("febsupaldi@gmail.com")->send(new NotifBirthdayMail($data));
                return response()->json(["status"=>"ok","message"=>"ok","data"=>$data],200);
            } catch (\Throwable $th) {
                return response()->json(["status"=>"error","message"=>"error","data"=>$data], 500);
            }
        }

        return response()->json(["status"=>"error","message"=>"error","data"=>"not found"], 200);
    }
    public function saveFriend(StoreFriendRequest $request):JsonResponse{
        $data = $this->friendService->storeFriend($request);
        return response()->json(["status"=>"ok","message"=>$data],200);
    }
}
