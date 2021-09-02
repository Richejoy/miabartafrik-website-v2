<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ArtistArea extends Model
{
    use HasFactory;

    const CREATED_AT = 'created';
    const UPDATED_AT = 'modified';

    protected $table = 'artist_area';

    protected $fillable = [
        'artist_id',
        'area_id',
    ];

    public function artist()
    {
        return $this->belongsTo(Artist::class);
    }

    public function area()
    {
        return $this->belongsTo(Area::class);
    }
}
