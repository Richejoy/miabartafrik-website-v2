<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Individual extends Model
{
    use HasFactory;

    const CREATED_AT = 'created';
    const UPDATED_AT = 'modified';

    protected $fillable = [
        'name',
        'work_id',
    ];

    public function work()
    {
        return $this->belongsTo(Work::class);
    }

    public function __toString()
    {
    	return $this->name;
    }
}
