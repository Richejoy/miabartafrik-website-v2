<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Carbon\Carbon;

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
        'slug',
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
        'date_of_birth',
        'place_of_birth',
        'token',
        'api_token',
        'remember_token',
        'tfa_enabled',
        'tfa_code',
        'removed',
        'biography',
        'verified',
        'blocked',
        'completed',
        'library_id',
        'country_id',
        'civility_id',
        'user_type_id',
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
        'api_token',
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
        'verified' => 'boolean',
        'blocked' => 'boolean',
        'completed' => 'int',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $attributes = [
        'last_login' => null,
        'nb_login' => 0,
        'completed' => 0,
        'activated' => false,
        'can_login' => false,
        'user_type_id' => 2,
        'role_id' => 4,
        'tfa_enabled' => false,
        'tfa_code' => null,
        'removed' => false,
        'verified' => false,
        'blocked' => false,
        'biography' => null,
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

    public function setUsernameAttribute($value)
    {
        $this->attributes['username'] = str_replace(' ', '', $value);
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
    /*End*/

    /*Mutators : gets*/
    public function getFullNameAttribute()
    {
        return $this->last_name . ' ' . $this->first_name;
    }
    /*End*/

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

    public function library()
    {
        return $this->belongsTo(Library::class);
    }

    public function userType()
    {
        return $this->belongsTo(UserType::class);
    }
    /*End*/

    /*Pivots : Many to Many*/
    public function publicationLikes()
    {
        return $this->belongsToMany(Publication::class);
    }

    public function languages()
    {
        return $this->belongsToMany(Language::class)
        ->withPivot('id', 'user_id', 'language_id', 'language_level_id', 'language_accent')
        ->withTimestamps();
    }

    public function skills()
    {
        return $this->belongsToMany(Skill::class);
    }
    /*End*/

    /*Has Many*/
    public function transactions()
    {
        return $this->hasMany(Transaction::class);
    }
    /*End*/

    /**/
    public function friends()
    {
        return $this->hasMany(UserFriend::class, 'users_friends', 'sender_id', 'receiver_id')->where(['confirmed' => true]);
    }
    
    public function senderViews()
    {
        return $this->hasMany(UserView::class, 'users_views', 'sender_id', 'receiver_id');
    }

    public function receiverViews()
    {
        return $this->hasMany(UserView::class, 'users_views', 'sender_id', 'receiver_id');
    }

    public function senderLikes()
    {
        return $this->hasMany(UserLike::class, 'users_likes', 'sender_id', 'receiver_id');
    }

    public function receiverLikes()
    {
        return $this->hasMany(UserLike::class, 'users_likes', 'sender_id', 'receiver_id');
    }
    /**/

    public function longPhone()
    {
        return $this->country->phonecode . $this->phone;
    }

    /**/
    public function call()
    {
        return 'tel:+' . $this->longPhone();
    }

    public function message()
    {
        return 'mailto:' . $this->email;
    }

    public function getAge()
    {
        return Carbon::parse($this->date_of_birth)->age . ' ans';
    }

    public function leftDaysBeforeBirthday()
    {
        return now()->diffInDays($this->date_of_birth, false);
    }

    public function isBirthday()
    {
        return Carbon::parse($this->date_of_birth)->isBirthday() ? ' Joyeux anniv' : '';
    }
    /**/
}
