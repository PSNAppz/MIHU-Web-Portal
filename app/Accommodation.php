<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Accomodation extends Model
{
    protected $fillable = array('gender', 'areaName','locationofAcc','nearby','isFull');
}
