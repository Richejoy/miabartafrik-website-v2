<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ArtisticArea extends Model
{
    use HasFactory;

    const CREATED_AT = 'created';
    const UPDATED_AT = 'modified';

    public function artisticRay()
    {
        return $this->belongsTo(ArtisticRay::class);
    }

    public function __toString()
    {
        return $this->name;
    }
}
