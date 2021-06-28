<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class WorkDone extends Model
{
  protected $appends = ['image_url'];

  protected $fillable = ['status', 'banner', 'title'];

  public function getImageUrlAttribute()
  {
    if($this->photo) {
      return 'images/work/' .$this->photo;
    } else {
      return null;
    }
  }
}
