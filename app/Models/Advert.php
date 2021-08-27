<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Advert extends Model
{
    use HasFactory;

    const CREATED_AT = 'created';
    const UPDATED_AT = 'modified';

    protected $fillable = [
        'library_id',
        'country_id',
        'published',
        'expire_date',
        'is_gold',
        'website',
    ];

    protected $casts = [
        'created' => 'datetime',
        'modified' => 'datetime',
    ];

    public function library()
    {
        return $this->belongsTo(Library::class);
    }

    public function country()
    {
        return $this->belongsTo(Country::class);
    }
}
