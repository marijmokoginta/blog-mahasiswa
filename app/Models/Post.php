<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Post extends Model
{
    protected $fillable = [
        'title',
        'category_id',
        'user_id',
        'slug',
        'excerp',
        'body',
        'views',
        'likes'
    ];

    protected $with = ['category', 'user', 'comments'];

    public function scopeFilters($query, array $filters) {
        $query->when($filters['search'] ?? false, function ($query, $search) {
            return $query->where('title', 'like', "%$search%")->orWhere('excerp', 'like', "%$search%")
                ->orWhere('body', 'like', "%$search%");
        });

        $query->when($filters['category'] ?? false, function ($query, $category) {
            return $query->whereHas('category', function ($query) use ($category) {
                $query->where('slug', $category);
            });
        });

        $query->when($filters['author'] ?? false, function ($query, $author) {
            return $query->whereHas('user', function ($query) use ($author) {
                $query->where('name', $author);
            });
        });
    }

    public function category(): BelongsTo {
        return $this->belongsTo(Category::class);
    }

    public function user(): BelongsTo {
        return $this->belongsTo(User::class);
    }

    public function comments(): HasMany {
        return $this->hasMany(Comment::class);
    }

}
