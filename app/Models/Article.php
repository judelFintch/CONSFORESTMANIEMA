<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $fillable = [
        'title', 'slug', 'category', 'cover_image',
        'excerpt', 'content', 'author', 'published', 'published_at',
    ];

    protected $casts = [
        'published' => 'boolean',
        'published_at' => 'datetime',
    ];

    public function scopePublished($query)
    {
        return $query->where('published', true)->orderByDesc('published_at');
    }

    public function getFormattedDateAttribute()
    {
        return $this->published_at
            ? $this->published_at->translatedFormat('d F Y')
            : $this->created_at->translatedFormat('d F Y');
    }

    public function getCategoryLabelAttribute(): string
    {
        return match($this->category) {
            'conservation' => 'Conservation',
            'carbone'      => 'Crédit Carbone',
            'communaute'   => 'Communautés',
            'partenariat'  => 'Partenariat',
            'evenement'    => 'Événement',
            default        => 'Actualité',
        };
    }
}
