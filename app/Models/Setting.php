<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
  // protected $appends = ['image_url'];

  protected $fillable = ['name', 'data'];

  public function setDataAttribute($data)
  {
    return $this->attributes['data'] = serialize($data);
  }

  public function getDataAttribute($data)
  {
    return $this->data = unserialize($data);
  }

  public function getPhotoAttribute($data)
  {
    if($data) {
      return 'images/settings/' .$data;
    } else {
      return null;
    }
  }
}
