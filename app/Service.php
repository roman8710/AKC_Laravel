<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
  /**
   * The attributes that are mass assignable.
   *
   * @var array
   */   
  protected $fillable = [
      'title', 'description', 'address', 'city', 'state', 'zipCode', 'geoLocLatitude', 'geoLocLongitude'
  ];
}