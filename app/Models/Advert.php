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
        'image_id',
        'video_id',
        'website',
    ];

    protected $casts = [
        'created' => 'datetime',
        'modified' => 'datetime',
    ];

    public function image()
    {
        return $this->belongsTo(Image::class);
    }

    public function video()
    {
        return $this->belongsTo(Video::class);
    }
}
