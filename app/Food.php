<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Food extends Model
{
    protected $fillable = ['meal', 'time', 'nearby', 'counter'];
    public $timestamps = false;
}
