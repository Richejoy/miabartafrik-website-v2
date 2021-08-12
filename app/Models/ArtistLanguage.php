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
