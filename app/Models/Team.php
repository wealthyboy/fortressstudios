<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Spatie\MediaLibrary\HasMedia;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\InteractsWithMedia;
use Spatie\MediaLibrary\MediaCollections\Models\Media;

class Team extends Model implements HasMedia
{
    use InteractsWithMedia;
    use HasFactory;
    protected $guarded = ['id'];


    public function registerMediaConversions(?Media $media = null): void
    {
        $this->addMediaConversion('400')
              ->width(400)
              ->height(400)
              ->sharpen(10);
    }
}
