<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;
use Cviebrock\EloquentSluggable\SluggableScopeHelpers;


class Article extends Model 
{
    use Sluggable;
    use SluggableScopeHelpers;

    public function sluggable()
    {
        return[
            'slug'=>[
                'source' => 'title'

            ]

        ];
    }

 
    protected $table="articles";

    protected $fillable=['title', 'content', 'category_id', 'user_id'];

    
    #estableciones relaciones
   
    public function category(){
    	#Los Articulo solo puede tenert una Categoria 
    	return $this->belongsTo('App\Category');

    }
    public function promotion(){
        #Los Articulo solo puede tenert una Categoria 
        return $this->belongsTo('App\Promotion');

    }
    public function user(){
    	#Los Articulos solo puede tener un Usuario 
    	return $this->belongsTo('App\User');

    }

    public function images(){
    	#Los Articulos pueden tener muchas imagenes
    	return $this->hasMany('App\Image');

    }

    public function tags(){
    	#Los Articulos pueden tener muchos Tags
    	return $this->belongsToMany('App\Tag');
    }

      public function scopeSearch($query, $title)
    {
        return $query->where('title', 'LIKE',"%$title%");

    }
}
