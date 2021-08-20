<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AreaRay extends Model
{
    use HasFactory;

    const CREATED_AT = 'created';
    const UPDATED_AT = 'modified';

    public function __toString()
    {
        return $this->name;
    }

    public function areas()
    {
        return $this->hasMany(Area::class);
    }
}
