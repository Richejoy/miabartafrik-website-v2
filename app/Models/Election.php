<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Election extends Model
{
    use HasFactory;

    const CREATED_AT = 'created';
    const UPDATED_AT = 'modified';

    protected $fillable = [
        'user_id',
        'area_id',
        'library_id',
        'country_id',
        'published',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function area()
    {
        return $this->belongsTo(Area::class);
    }

    public function library()
    {
        return $this->belongsTo(Library::class);
    }

    public function country()
    {
        return $this->belongsTo(Country::class);
    }

    public function userElection()
    {
        return $this->hasMany(UserElection::class)->with(['user', 'election', 'library']);
    }
}
