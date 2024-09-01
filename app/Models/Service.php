<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;
use Spatie\MediaLibrary\MediaCollections\Models\Media;
class Service extends Model implements HasMedia
{
    use HasFactory;
    use InteractsWithMedia;
    protected $guarded = ['id'];


    public function registerMediaConversions(?Media $media = null): void
    {
        $this->addMediaConversion('800')
              ->width(800)
              ->height(385)
              ->sharpen(10);
    }

    public function getRouteKeyName()
    {
        return 'slug';
    }
}
