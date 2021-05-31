<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subscriber extends Model
{
    use HasFactory;

    const CREATED_AT = 'created';
    const UPDATED_AT = 'modified';

    protected $fillable = ['full_name',
    'country_id',
    'civility_id',
    'artistic_area_id',
    'email',
    'phone',
    'token'];

    protected $casts = [
        'created' => 'datetime',
        'modified' => 'datetime',
    ];

    public function country()
    {
        return $this->belongsTo(Country::class);
    }

    public function civility()
    {
        return $this->belongsTo(Civility::class);
    }

    public function artisticArea()
    {
        return $this->belongsTo(ArtisticArea::class);
    }
}
