<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    use HasFactory;

    const CREATED_AT = 'created';
    const UPDATED_AT = 'modified';

    protected $fillable = [
        'slug',
        'paid',
        'expire_date',
        'user_id',
        'library_id',
        'package_id',
        'work_id',
    ];

    protected $casts = [
        'created' => 'datetime',
        'modified' => 'datetime',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function library()
    {
        return $this->belongsTo(Library::class);
    }

    public function package()
    {
        return $this->belongsTo(Package::class);
    }

    public function work()
    {
        return $this->belongsTo(Work::class);
    }

    /**/
    public function isOwner()
    {
        return (bool) ($this->user_id == auth()->id());
    }
    /**/
}
