<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Settings extends Model
{
    protected $fillable=['phone','email','address','logo','facebook','youtube','twitter','linkedin'];
}
