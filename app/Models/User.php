<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    const CREATED_AT = 'created';
    const UPDATED_AT = 'modified';

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
        'remember_token',
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

    /*Mutators : sets*/
    public function setFirstNameAttribute($value)
    {
        $this->attributes['first_name'] = ucwords($value);
    }

    public function setLastNameAttribute($value)
    {
        $this->attributes['last_name'] = mb_strtoupper($value);
    }

    public function setEmailAttribute($value)
    {
        $this->attributes['email'] = strtolower($value);
    }

    public function setPhoneAttribute($value)
    {
        $this->attributes['phone'] = str_replace(' ', '', $value);
    }

    public function setCityAttribute($value)
    {
        $this->attributes['city'] = ucwords($value);
    }

    public function setAddressAttribute($value)
    {
        $this->attributes['address'] = ucfirst($value);
    }
    /**/

    /*Mutators : gets*/
    public function getFullNameAttribute()
    {
        return $this->last_name . ' ' . $this->first_name;
    }
    /**/

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

    public function getFlag()
    {
        return 'flag flag-' . mb_strtolower($this->country->iso);
    }

    public function userViews()
    {
        return $this->hasMany(UserView::class, 'sender_id');
    }

    public function userLikes()
    {
        return $this->hasMany(UserLike::class, 'sender_id');
    }

    public function userFriends()
    {
        return $this->hasMany(UserFriend::class, 'sender_id');
    }

    public function call()
    {
        return 'tel:+' . $this->longPhone();
    }

    public function __toString()
    {
        return $this->full_name;
    }
}
