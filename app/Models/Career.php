<?php

namespace App\Models;

use App\Models\Applicant;
use Illuminate\Database\Eloquent\Model;

class Career extends Model
{
    protected $fillable=['title','salary','short_description','description','working_hours'];

    public function applicants(){
        return $this->hasMany(Applicant::class);
    }
}
