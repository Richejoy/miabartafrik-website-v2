<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ArtisticArea extends Model
{
    use HasFactory;

    public function artisticRay()
    {
        return $this->belongsTo(ArtisticRay::class);
    }

    public function __toString()
    {
        return $this->name;
    }
}
