<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Routing\Route;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Tag;
use Laracasts\Flash\Flash;
use App\Http\Requests\TagRequest;

class TagsController extends Controller
{

   	public function index(Request $request)
  	{

      $tags = Tag::Search($request->name)->orderBy('id','ASC')->paginate(5);
      return view('admin.tags.index')->with('tags',$tags);
   	}

  public function show($id)
  	{
    
  	}
  public function create()
    {
    	return view('admin.tags.create');

    }
 
  public function store(TagRequest $request)
    {
      $tag = new Tag($request->all());
      $tag->save();    
      
      flash::success('Se a registrado  '.$tag->name.' de forma satisfatoria');

      return redirect()->route('tags.index');
      
      }
 
  public function edit($id)
    {
      $tag= Tag::find($id);
      return view('admin.tags.edit')->with('tag',$tag);
    }

  public function update(Request $request, $id)    
  	{
      $tag = Tag::find($id);
      $tag->fill($request->all());
      $tag->save();

      Flash::warning('El Tag '.$tag->name. ' ha sido editada con exito');

      return redirect()->route('tags.index');


    }
 
    
  public function destroy($id)
    {

      $tag = Tag::find($id);
      $tag->delete();

      flash::error('El Tag '. $tag->name .' ha sido borrada con exito');

      return redirect()->route('tags.index');
    }
}
