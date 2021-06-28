<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class HomeBanner extends Model
{
    protected $appends = ['banner_url'];

    protected $fillable = ['status', 'banner', 'title'];

    public function getBannerUrlAttribute()
    {
      if($this->banner) {
        return 'images/homeBanner/' .$this->banner;
      } else {
        return null;
      }
    }
  
}
