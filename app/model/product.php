<?php

namespace App\model;

use Illuminate\Database\Eloquent\Model;

class product extends Model
{
   public function category(){
    return $this->belongsTo(category::class,'category_id','id');
   }


      public function brand(){
    return $this->belongsTo(brand::class,'brand_id','id');
   }

}
