<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Astrotomic\Translatable\Translatable;
use Plank\Mediable\Mediable;

class Project extends Model
{
  use Mediable;
  use Translatable;

  protected $appends = ['image_url', 'banner_url'];

  public $translatedAttributes = ['title', 'slug', 'description', 'metaData', 'metaDescription', 'keywords'];

  protected $fillable = ['status', 'banner', 'photo'];

  public function getImageUrlAttribute()
  {
    if($this->photo) {
      return 'images/project/photo/' .$this->photo;
    } else {
      return null;
    }
  }

  public function getBannerUrlAttribute()
  {
    if($this->banner) {
      return 'images/project/banner/' .$this->banner;
    } else {
      return null;
    }
  }
}