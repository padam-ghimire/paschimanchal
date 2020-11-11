<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Configurations\Designation;

class BoardMember extends Model
{
    

    protected $fillable=['name','designation_id','phone','facebook','image'];

    public function designation(){
        return $this->belongsTo(Designation::class);
    }
}
