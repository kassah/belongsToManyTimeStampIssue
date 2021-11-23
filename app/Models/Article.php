<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use HasFactory;

    const CREATED_AT = 'created';
    const UPDATED_AT = 'updated';

    /**
     * Get all of the users that belong to the team.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function reviewers()
    {
        return $this->belongsToMany(User::class, Review::class)
            ->withTimestamps()
            ->as('reviewers');
    }
}
