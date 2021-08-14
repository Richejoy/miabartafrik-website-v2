<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ArtistLanguage extends Model
{
    use HasFactory;

    const CREATED_AT = 'created';
    const UPDATED_AT = 'modified';

    public $table = 'artists_languages';

    protected $fillable = [
        'artist_id',
        'language_id',
        'language_level_id',
        'language_accent',
    ];

    public function artist()
    {
        return $this->belongsTo(Artist::class);
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
