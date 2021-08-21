<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    use HasFactory;

    const CREATED_AT = 'created';
    const UPDATED_AT = 'modified';

    public function __toString()
    {
        //'<i class="flag flag-' . mb_strtolower($this->iso) . '"></i> ' . 
        return $this->nicename . ' (+' . $this->phonecode . ')';
    }
}
