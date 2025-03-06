<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Gallery extends Model
{
    protected $table = 'galleries';
    
    protected $fillable = [
        'title',
        'image',
        'description',
        'type',
        'youtube_url',
        'thumbnail'
    ];

    protected $attributes = [
        'type' => 'image'
    ];

    public function getYoutubeIdAttribute()
    {
        if (!$this->youtube_url) return null;
        
        preg_match("/^(?:http(?:s)?:\/\/)?(?:www\.)?(?:m\.)?(?:youtu\.be\/|youtube\.com\/(?:(?:watch)?\?(?:.*&)?v(?:i)?=|(?:embed|v|vi|user|shorts)\/))([^\?&\"'>]+)/", $this->youtube_url, $matches);
        return $matches[1] ?? null;
    }

    public function scopeVideos($query)
    {
        return $query->where('type', 'video');
    }

    public function scopeImages($query)
    {
        return $query->where('type', 'image');
    }
} 