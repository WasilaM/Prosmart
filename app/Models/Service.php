<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Astrotomic\Translatable\Translatable;
use Plank\Mediable\Mediable;

class Service extends Model
{
  use Mediable;
  use Translatable;

  protected $appends = ['image_url', 'banner_url'];

  public $translatedAttributes = ['title', 'slug', 'description', 'importance', 'metaData', 'metaDescription', 'keywords'];

  protected $fillable = ['status', 'banner', 'photo', 'video'];

  public function getImageUrlAttribute()
  {
    if($this->photo) {
      return 'images/service/photo/' .$this->photo;
    } else {
      return null;
    }
  }

  public function getBannerUrlAttribute()
  {
    if($this->banner) {
      return 'images/service/banner/' .$this->banner;
    } else {
      return null;
    }
  }
}
