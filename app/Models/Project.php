<?php

namespace App\Models;

use App\Models\Client;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    
    protected $fillable=['name','client_id','area','year','contract_name','quantity','description'];


    public function client(){
        return $this->belongsTo(Client::class);
    }


}
