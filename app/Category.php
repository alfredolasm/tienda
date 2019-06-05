<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{

    protected $table = "categories";


    protected $fillable = ['name'];
    


    #estableciones relaciones
    
    public function articles(){
    	#Una Categoria puede tener muchos articulos
       	return $this->hasMany('App\Article');
    }

    public function user(){
    	#Una Categoria puede tener muchos Usuarios
    	return $this->hasMany('App\User');
    }

    public function scopeSearchCategory($query, $name)
    {
        return $query->where('name', '=', $name);

    }
}
 