<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    use HasFactory;

    const CREATED_AT = 'created';
    const UPDATED_AT = 'modified';

    protected $fillable = [
        'folder', 'url', 'link'
    ];

    protected $casts = [
        'created' => 'datetime',
        'modified' => 'datetime',
    ];
}
