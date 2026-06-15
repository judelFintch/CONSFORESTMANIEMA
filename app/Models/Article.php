<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $fillable = [
        'title', 'slug', 'category',
        'cover_image', 'cover_image_alt', 'gallery',
        'excerpt', 'content',
        'author', 'tags',
        'status', 'published_at', 'scheduled_at',
        'featured', 'reading_time', 'views_count',
        'meta_title', 'meta_description',
    ];

    protected $casts = [
        'published_at' => 'datetime',
        'scheduled_at' => 'datetime',
        'featured'     => 'boolean',
        'tags'         => 'array',
        'gallery'      => 'array',
    ];

    protected static function booted(): void
    {
        static::saving(function (Article $article) {
            if ($article->content) {
                $words = str_word_count(strip_tags($article->content));
                $article->reading_time = max(1, (int) ceil($words / 200));
            }
        });
    }

    // ── Scopes ────────────────────────────────────────────────

    public function scopePublished($query)
    {
        return $query->where('status', 'published')->orderByDesc('published_at');
    }

    public function scopeFeatured($query)
    {
        return $query->where('featured', true);
    }

    // ── Accessors ─────────────────────────────────────────────

    public function getStatusLabelAttribute(): string
    {
        return match ($this->status) {
            'published' => 'Publié',
            'scheduled' => 'Programmé',
            'archived'  => 'Archivé',
            default     => 'Brouillon',
        };
    }

    public function getStatusBadgeAttribute(): string
    {
        return match ($this->status) {
            'published' => 'bg-green-100 text-green-800 ring-green-600/20',
            'scheduled' => 'bg-blue-100 text-blue-800 ring-blue-600/20',
            'archived'  => 'bg-gray-100 text-gray-600 ring-gray-500/20',
            default     => 'bg-yellow-100 text-yellow-800 ring-yellow-600/20',
        };
    }

    public function getCategoryLabelAttribute(): string
    {
        return match ($this->category) {
            'conservation' => 'Conservation',
            'carbone'      => 'Crédit Carbone',
            'communaute'   => 'Communautés',
            'partenariat'  => 'Partenariat',
            'evenement'    => 'Événement',
            default        => 'Actualité',
        };
    }

    public function getFormattedDateAttribute(): string
    {
        $date = $this->published_at ?? $this->created_at;
        return $date ? $date->translatedFormat('d F Y') : '';
    }

    public function getReadingTimeTextAttribute(): string
    {
        $min = $this->reading_time ?? 1;
        return $min <= 1 ? '1 min' : "{$min} min";
    }
}
