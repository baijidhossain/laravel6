<?php

namespace App\model;

use Illuminate\Database\Eloquent\Model;

class productcolor extends Model
{
    public function color(){


    	return $this->belongsTo(color::class,'color_id','id');
    }
}
