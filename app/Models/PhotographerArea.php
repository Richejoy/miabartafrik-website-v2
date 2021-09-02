<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PhotographerArea extends Model
{
    use HasFactory;

    const CREATED_AT = 'created';
    const UPDATED_AT = 'modified';

    protected $table = 'photographer_area';

    protected $fillable = [
        'photographer_id',
        'area_id',
    ];

    public function photographer()
    {
        return $this->belongsTo(Partner::class);
    }

    public function area()
    {
        return $this->belongsTo(Area::class);
    }
}
