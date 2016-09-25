<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Accommodation extends Model
{
    protected $fillable =['gender','areaName','category','locationofAcc','coord','contact','isFull'];
}
