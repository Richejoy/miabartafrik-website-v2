<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserType extends Model
{
    use HasFactory;

    const CREATED_AT = 'created';
    const UPDATED_AT = 'modified';

    public function subscribers()
    {
        return $this->hasMany(Subscriber::class);
    }

    public function users()
    {
        return $this->hasMany(User::class);
    }

    public function areas()
    {
        return $this->hasMany(Area::class);
    }

    public function packages()
    {
        return $this->hasMany(Package::class);
    }

    public function __toString()
    {
        return $this->name;
    }
}
