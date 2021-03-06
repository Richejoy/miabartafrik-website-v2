<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    use HasFactory;

    const CREATED_AT = 'created';
    const UPDATED_AT = 'modified';

    public function image()
    {
        return $this->belongsTo(Library::class);
    }

    public function video()
    {
        return $this->belongsTo(Library::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function country()
    {
        return $this->belongsTo(Country::class);
    }

    public function movieArea()
    {
        return $this->belongsTo(MovieArea::class);
    }
}
