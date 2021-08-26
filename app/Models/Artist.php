<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Artist extends Model
{
    use HasFactory;

    const CREATED_AT = 'created';
    const UPDATED_AT = 'modified';

    protected $fillable = [
        'user_id',
        'library_id',
        'is_ambassador',
        'area_max',
        'package_id',
        'paid',
        'expire_date',
    ];

    protected $casts = [
        'created' => 'datetime',
        'modified' => 'datetime',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function library()
    {
        return $this->belongsTo(Library::class);
    }

    public function package()
    {
        return $this->belongsTo(Package::class);
    }

    public function artistAreas()
    {
        return $this->hasMany(ArtistArea::class);
    }

}
