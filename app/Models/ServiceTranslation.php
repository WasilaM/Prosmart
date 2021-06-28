<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;

class ServiceTranslation extends Model
{
  use Sluggable;

  public $timestamps = false;
  public $fillable = ['title', 'slug', 'description'];

  public function sluggable(): array
  {
    return [
      'slug' => [
        'source' => 'title'
      ]
    ];
  }
}
