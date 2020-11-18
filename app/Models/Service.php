<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    
    protected $fillable=['title','description','image','testing','design','deployment','support'];

}
