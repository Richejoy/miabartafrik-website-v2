<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Partner extends Model
{
    use HasFactory;

    const CREATED_AT = 'created';
    const UPDATED_AT = 'modified';

    protected $fillable = [
        'user_id',
        'individual_id',
        'society_id',
        'person_type_id',
        'area_max',
        'package_id',
        'paid',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
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

    public function partnerAreas()
    {
        return $this->hasMany(PartnerArea::class);
    }
}
