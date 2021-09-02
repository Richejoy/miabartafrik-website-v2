<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PartnerArea extends Model
{
    use HasFactory;

    const CREATED_AT = 'created';
    const UPDATED_AT = 'modified';

    protected $table = 'partner_area';

    protected $fillable = [
        'partner_id',
        'area_id',
    ];

    public function partner()
    {
        return $this->belongsTo(Partner::class);
    }

    public function area()
    {
        return $this->belongsTo(Area::class);
    }
}
