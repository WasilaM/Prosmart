<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Plank\Mediable\Mediable;

class Client extends Model
{
  use Mediable;

  protected $appends = ['image_url', 'banner_url'];

  protected $fillable = ['status', 'photo', 'film','title'];

  public function getImageUrlAttribute()
  {
    if($this->photo) {
      return 'images/client/photo/' .$this->photo;
    } else {
      return null;
    }
  }

  public function getBannerUrlAttribute()
  {
    if($this->banner) {
      return 'images/client/banner/' .$this->banner;
    } else {
      return null;
    }
  }
}
