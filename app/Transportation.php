<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Transportation extends Model
{
    protected $fillable = array('busno', 'contact','from','dest','deptime','parking','status');

}
