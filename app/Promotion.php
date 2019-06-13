<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Promotion extends Model
{
   protected $table="promotions";

   protected $fillable = ['name'];
    
   
   #estableciones relaciones
    
    public function articles(){
    	#Una Categoria puede tener muchos articulos
       	return $this->hasMany('App\Article');
    }

    public function scopeSearchPromotion($query, $name)
    {
        return $query->where('name', '=', $name);

    }

}
