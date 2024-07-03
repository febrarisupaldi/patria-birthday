<?php

use App\Http\Controllers\FriendController;
use App\Http\Controllers\PatriaFriendController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::get("/friend", [FriendController::class, 'index']);
Route::get("/today", [FriendController::class, 'showTodayBirthday']);
Route::get("/send-notif", [FriendController::class, 'sendEmailNotif']);
Route::post("/friend", [FriendController::class, 'saveFriend']);

Route::get("/patria/friend", [PatriaFriendController::class, 'index']);
Route::get("/patria/today", [PatriaFriendController::class, 'showTodayBirthday']);
Route::get("/patria/send-notif", [PatriaFriendController::class, 'sendEmailNotif']);
Route::post("/patria/friend", [PatriaFriendController::class, 'saveFriend']);

Route::get("/email", function () {
    return view('email');
});

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
