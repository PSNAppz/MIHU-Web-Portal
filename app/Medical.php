<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Medical extends Model
{
  protected $fillable = ['loc', 'doc', 'contact', 'dis', 'side'];
  public $timestamps = false;
}
