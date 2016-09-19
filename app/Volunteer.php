<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Volunteer extends Model
{
    protected $fillable = array('name','batch','campus','contact','seva','cordname','cordcontact');
}
