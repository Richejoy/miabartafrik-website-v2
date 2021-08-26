<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sponsor extends Model
{
    use HasFactory;

    const CREATED_AT = 'created';
    const UPDATED_AT = 'modified';

    public function library()
    {
        return $this->belongsTo(Library::class);
    }

    public function country()
    {
        return $this->belongsTo(Country::class);
    }
}
