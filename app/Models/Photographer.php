<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Photographer extends Model
{
    use HasFactory;

    const CREATED_AT = 'created';
    const UPDATED_AT = 'modified';

    protected $fillable = [
        'slug',
        'area_max',
        'paid',
        'expire_date',
        'user_id',
        'library_id',
        'individual_id',
        'society_id',
        'person_type_id',
        'package_id',
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

    public function society()
    {
        return $this->belongsTo(Society::class);
    }

    public function individual()
    {
        return $this->belongsTo(Individual::class);
    }

    public function personType()
    {
        return $this->belongsTo(PersonType::class);
    }

    public function package()
    {
        return $this->belongsTo(Package::class);
    }

    public function photographerAreas()
    {
        return $this->hasMany(PhotographerArea::class);
    }
}
