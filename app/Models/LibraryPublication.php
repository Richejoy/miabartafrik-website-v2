<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LibraryPublication extends Model
{
    use HasFactory;

    const CREATED_AT = 'created';
    const UPDATED_AT = 'modified';

    protected $table = 'library_publication';

    protected $fillable = [
        'library_id',
        'publication_id',
    ];

    public function library()
    {
        return $this->belongsTo(Library::class);
    }

    public function publication()
    {
        return $this->belongsTo(Publication::class);
    }
}
