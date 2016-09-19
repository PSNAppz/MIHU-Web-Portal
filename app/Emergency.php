<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Emergency extends Model
{
  protected $fillable = ['service', 'name', 'contact'];
  public $timestamps = false;
}
