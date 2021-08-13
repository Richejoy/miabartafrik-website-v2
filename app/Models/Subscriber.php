<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subscriber extends Model
{
    use HasFactory;

    const CREATED_AT = 'created';
    const UPDATED_AT = 'modified';

    protected $fillable = [
        'email',
        'token',
        'user_type_id',
    ];

    protected $casts = [
        'created' => 'datetime',
        'modified' => 'datetime',
    ];

    public function userType()
    {
        return $this->belongsTo(UserType::class);
    }
}
