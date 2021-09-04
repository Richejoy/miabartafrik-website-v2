<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Publication extends Model
{
    use HasFactory;

    const CREATED_AT = 'created';
    const UPDATED_AT = 'modified';

    protected $fillable = [
        'user_id',
        'publication_state_id',
        'content',
        'start_date',
        'end_date',
        'published',
    ];

    /**
     * Return a User model : this is the user who has posted the publication
    */
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    /**
     * Return a PublicationState model : this can be public, private or friend
    */
    public function publicationState()
    {
        return $this->belongsTo(PublicationState::class);
    }

    /**
     * Return a collection of User model
    */
    public function publicationUsers()
    {
        return $this->belongsToMany(User::class);
    }

    /**
     * Return a collection of Library model
    */
    public function publicationLibraries()
    {
        return $this->belongsToMany(Library::class);
    }

    /**
     * Return a query of public publications
    */
    public function scopePublicly($query)
    {
        return $query->where([
            'publication_state_id' => 1,
            'published' => true,
        ]);
    }

    /**
     * Return a query of private publications
    */
    public function scopePrivately($query)
    {
        return $query->where([
            'publication_state_id' => 2,
            'published' => true,
        ]);
    }

    /**
     * Return a query of friend publications
    */
    public function scopeFriendly($query)
    {
        return $query->where([
            'publication_state_id' => 3,
            'published' => true,
        ]);
    }
}
