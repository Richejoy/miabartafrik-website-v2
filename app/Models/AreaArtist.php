<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AreaArtist extends Model
{
    use HasFactory;

    const CREATED_AT = 'created';
    const UPDATED_AT = 'modified';

    protected $table = 'area_artist';

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
