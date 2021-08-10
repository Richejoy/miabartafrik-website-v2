<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Package extends Model
{
    use HasFactory;

    public function userType()
    {
        return $this->belongsTo(UserType::class);
    }

    public function currency()
    {
        return $this->belongsTo(Currency::class);
    }

    public function __toString()
    {
        return $this->name;
    }
}
