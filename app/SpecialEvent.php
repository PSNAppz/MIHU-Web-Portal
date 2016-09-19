<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SpecialEvent extends Model
{
    protected $fillable = ['category','date','time','location','coordinator','contact'];

}
