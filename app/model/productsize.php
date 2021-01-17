<?php

namespace App\model;

use Illuminate\Database\Eloquent\Model;

class productsize extends Model
{
       public function size(){


    	return $this->belongsTo(size::class,'size_id','id');
    }
}
