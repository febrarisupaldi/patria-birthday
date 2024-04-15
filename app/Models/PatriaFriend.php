<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PatriaFriend extends Model
{
    protected $table= 'patria_friends';

    use HasFactory;

    protected $fillable = ['friend_name','friend_email','friend_birthday_date', 'friend_whatsapp', 'friend_instagram', 'friend_facebook'];
}
