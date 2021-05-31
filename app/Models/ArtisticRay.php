<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ArtisticRay extends Model
{
    use HasFactory;

    public function __toString()
    {
        return $this->name;
    }

    public function artisticAreas()
    {
        return $this->hasMany(ArtisticArea::class);
    }
}
