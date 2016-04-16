<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    // Relationships
    // =============
    /**
     * One-to-Many.
     *
     * @link https://laravel.com/docs/5.2/eloquent-relationships#one-to-many
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function posts()
    {
        // Post::class -> Geeft je de namespace al mee
        return $this->hasMany(Product::class);
    }
}
