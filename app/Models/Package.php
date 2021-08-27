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

    public function country()
    {
        return $this->belongsTo(Country::class);
    }

    public function getPrice()
    {
        return number_format($this->price, 0, '.', ' ') . ' ' . $this->country->currency;
    }

    public function getPercentage()
    {
        $percentage = 100;
        $sign = ' %';

        if ($this->price != 0) {
            $percentage = (($percentage * ($this->price - $this->discount)) / $this->price) - $percentage;
        }

        return $percentage . $sign;
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
