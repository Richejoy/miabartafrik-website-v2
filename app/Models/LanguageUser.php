<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LanguageUser extends Model
{
    use HasFactory;

    const CREATED_AT = 'created';
    const UPDATED_AT = 'modified';

    protected $table = 'language_user';

    protected $fillable = [
        'language_id',
        'user_id',
        'language_level_id',
        'language_accent',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function language()
    {
        return $this->belongsTo(Language::class);
    }

    public function languageLevel()
    {
        return $this->belongsTo(LanguageLevel::class);
    }
}
