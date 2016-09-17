<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SpecialEvent extends Model
{
    protected $fillable = ['date','time','location','coordinator','contact'];

}
