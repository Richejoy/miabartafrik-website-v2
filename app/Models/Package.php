<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Package extends Model
{
    use HasFactory;

    const CREATED_AT = 'created';
    const UPDATED_AT = 'modified';

    public function userType()
    {
        return $this->belongsTo(UserType::class);
    }

    public function currency()
    {
        return $this->belongsTo(Currency::class);
    }

    public function getPrice()
    {
        return number_format($this->price, 0, '.', ' ') . ' ' . $this->currency->name;
    }

    public function getPercentage()
    {
        return ((100 * ($this->price - $this->discount)) / $this->price) - 100 . ' %';
    }

    public function getExpire()
    {
        return ' / AN';
    }

    public function __toString()
    {
        return $this->name;
    }
}
