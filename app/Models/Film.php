<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Spatie\MediaLibrary\HasMedia;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\InteractsWithMedia;
use Spatie\MediaLibrary\MediaCollections\Models\Media;

class Film extends Model implements HasMedia
{
    use HasFactory;
    use InteractsWithMedia;
    protected $guarded = ['id'];
    protected $casts = [
        'release_date' => 'date'
    ];
    public function registerMediaConversions(?Media $media = null): void
    {
        $this->addMediaConversion('800')
            ->width(700)
            ->height(466)
            ->sharpen(10);
    }

    public function getRouteKeyName()
    {
        return 'slug';
    }
}
