<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Area extends Model
{
    use HasFactory;

    const CREATED_AT = 'created';
    const UPDATED_AT = 'modified';

    public function areaRay()
    {
        return $this->belongsTo(AreaRay::class);
    }

    public function userType()
    {
        return $this->belongsTo(UserType::class);
    }

    public function __toString()
    {
        return $this->name;
    }
}
