<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    public $timestamps = false;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'first_name',
        'last_name',
        'email',
        'phone',
        'username',
        'password',
        'activated',
        'can_login',
        'last_login',
        'nb_login',
        'city',
        'address',
        'token',
        'tfa_enabled',
        'tfa_code',
        'removed',
        'image_id',
        'user_type_id',
        'country_id',
        'civility_id',
        'role_id',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'token',
        'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'last_login' => 'datetime',
        'activated' => 'boolean',
        'can_login' => 'boolean',
        'tfa_enabled' => 'boolean',
        'removed' => 'boolean',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $attributes = [
        'last_login' => null,
        'nb_login' => 0,
        'activated' => false,
        'can_login' => false,
        'user_type_id' => 2,
        'role_id' => 4,
        'tfa_enabled' => false,
        'tfa_code' => null,
        'removed' => false,
    ];

    public function civility()
    {
        return $this->belongsTo(Civility::class);
    }

    public function role()
    {
        return $this->belongsTo(Role::class);
    }

    public function country()
    {
        return $this->belongsTo(Country::class);
    }

    public function image()
    {
        return $this->belongsTo(Image::class);
    }

    public function userType()
    {
        return $this->belongsTo(UserType::class);
    }

    public function longPhone()
    {
        return $this->country->phonecode . $this->phone;
    }

    public function transactions()
    {
        return $this->hasMany(Transaction::class);
    }

    public function fullName()
    {
        return $this->last_name . ' ' . $this->first_name;
    }

    public function __toString()
    {
        return $this->fullName();
    }
}
