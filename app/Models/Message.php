<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    use HasFactory;

    const CREATED_AT = 'created';
    const UPDATED_AT = 'modified';

    public function sender()
    {
        return $this->belongsTo(User::class);
    }

    public function receiver()
    {
        return $this->belongsTo(User::class);
    }

    public function scopeReaded($query, $user_id)
    {
        return $query->where([
            'receiver_id' => $user_id,
            'readed' => true,
        ]);
    }

    public function scopeUnReaded($query, $user_id)
    {
        return $query->where([
            'receiver_id' => $user_id,
            'readed' => false,
        ]);
    }
}
