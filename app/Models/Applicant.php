<?php

namespace App\Models;

use App\Models\Career;
use Illuminate\Database\Eloquent\Model;

class Applicant extends Model
{
    

    protected $fillable=['name','email','phone','cv','job_id'];

    public function job(){
        return $this->belongsTo(Career::class);
    }
}
