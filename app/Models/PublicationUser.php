<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PublicationUser extends Model
{
    use HasFactory;

    const CREATED_AT = 'created';
    const UPDATED_AT = 'modified';

    protected $table = 'publication_user';

    protected $fillable = [
        'user_id',
        'publication_id',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function publication()
    {
        return $this->belongsTo(Publication::class);
    }
}
