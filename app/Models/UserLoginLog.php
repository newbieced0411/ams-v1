<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserLoginLog extends Model
{
    use HasFactory;

    protected $guarded = [];

    public static function successLog($user)
    {
        UserLoginLog::create([
            'user_id' => $user->id,
            'description' => 'User #' . $user->id . ' ' . $user->firstName  . ' ' . $user->lastName . ' successfully logged in.'
        ]);
    }
}
