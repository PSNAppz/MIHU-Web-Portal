<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Accommodation extends Model
{
    protected $fillable = array('gender', 'areaName','locationofAcc','nearby','isFull');
}
