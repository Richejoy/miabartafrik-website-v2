<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ArtistArtisticArea extends Model
{
    use HasFactory;

    const CREATED_AT = 'created';
    const UPDATED_AT = 'modified';

    public $table = 'artists_artistic_areas';

    protected $fillable = [
        'artist_id',
        'artistic_area_id',
    ];

    public function artist()
    {
        return $this->belongsTo(Artist::class);
    }

    public function artisticArea()
    {
        return $this->belongsTo(ArtisticArea::class);
    }
}
