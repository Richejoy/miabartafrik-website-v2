<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserFriend extends Model
{
    use HasFactory;

    const CREATED_AT = 'created';
    const UPDATED_AT = 'modified';

    protected $table = 'users_friends';

    protected $fillable = [
        'sender_id',
        'receiver_id',
        'confirmed',
        'favorite',
    ];

    public function sender()
    {
        return $this->belongsTo(User::class);
    }

    public function receiver()
    {
        return $this->belongsTo(User::class);
    }

    /*Scope*/
    public function scopeAllFriends($query, int $user_id, bool $confirmed = true)
    {
        return $query->where([
                ['sender_id', '=', $user_id],
                ['confirmed', '=', $confirmed],
            ])->orWhere([
                ['receiver_id', '=', $user_id],
                ['confirmed', '=', $confirmed],
            ]);
    }

    public function scopeFavoriteFriends($query, int $user_id, bool $confirmed = true)
    {
        return $query->where([
                ['sender_id', '=', $user_id],
                ['confirmed', '=', $confirmed],
                ['favorite', '=', true],
            ])->orWhere([
                ['receiver_id', '=', $user_id],
                ['confirmed', '=', $confirmed],
                ['favorite', '=', true],
            ]);
    }
    /*End*/
}
