<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    protected $table="images";

    protected $fillable=['name', 'article_id'];

    public function article(){
    	#Las imagenes solo puede tener un Articulo

    	return $this->belongsTo('App\Article'); 

    }
     public function scopeSearch($query, $name)
    {
        return $query->where('name', 'LIKE',"%$name%");

    }

}
