<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Security extends Model
{
    protected $fillable = ['name','iscord','location','nearby','from','to','batch','contact'];
}
