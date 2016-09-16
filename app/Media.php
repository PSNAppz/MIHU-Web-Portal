<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Media extends Model
{
  protected $fillable = ['mediaroom', 'mediaenc', 'name', 'phone'];
  public $timestamps = false;
}
