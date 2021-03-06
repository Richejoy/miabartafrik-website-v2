<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Casting extends Model
{
    use HasFactory;

    const CREATED_AT = 'created';
    const UPDATED_AT = 'modified';

    public function library()
    {
        return $this->belongsTo(Library::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function country()
    {
        return $this->belongsTo(Country::class);
    }

    public function area()
    {
        return $this->belongsTo(Area::class);
    }

    public function getStartDate()
    {
        return Carbon::parse($this->start_date);
    }

    public function getEndDate()
    {
        return Carbon::parse($this->end_date);
    }

    public function getPeriod()
    {
        return $this->getStartDate()->format('d M Y') . ' au ' . $this->getEndDate()->format('d M Y');
    }

    public function diffDaysBetweenStartAndEndDate()
    {
        return $this->getStartDate()->diffInDays($this->getEndDate(), false);
    }
}
