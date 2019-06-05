<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Image;

class ImagesController extends Controller
{
    public function index(Request $request){

    	$images = Image::Search($request->name)->orderBy('id', 'DESC')->paginate(3);

     	$images->each(function($images) {
    		$images->article;

    	});
    	
    	return view('admin.images.index')
    	->with('images', $images);
    }
}
