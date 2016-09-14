<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Darshan extends Model
{
  public $timestamps = false;
  protected $fillable = array('time_from', 'time_till', 'date');
}
