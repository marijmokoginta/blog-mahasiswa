<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Post extends Model
{
    protected $fillable = [
        'title',
        'category_id',
        'slug',
        'excerp',
        'author',
        'body'
    ];

    public function category(): BelongsTo {
        return $this->belongsTo(Category::class);
    }


}
