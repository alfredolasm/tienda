<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Routing\Route;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Category;
use Laracasts\Flash\Flash;
use App\Http\Requests\CategoryRequest;

class CategoriesController extends Controller
{

   	public function index()
  	{
      $categories = Category::orderBy('id','ASC')->paginate(5);
      return view('admin.categories.index')->with('categories',$categories);
   	}

  public function show($id)
  	{
    
  	}
  public function create()
    {
    	return view('admin.categories.create');

    }
 
  public function store(CategoryRequest $request)
    {
      $category = new Category($request->all());
      $category->save();    
      
      flash::success('Se a registrado  '.$category->name.' de forma satisfatoria');

      return redirect()->route('categories.index');
      
      }
 
  public function edit($id)
    {
      $category= Category::find($id);
      return view('admin.categories.edit')->with('category',$category);
    }

  public function update(Request $request, $id)    
  	{
      $category = Category::find($id);
      $category->fill($request->all());
      $category->save();

      Flash::warning('La Categoria '.$category->name. ' ha sido editada con exito');

      return redirect()->route('categories.index');


    }
 
    
  public function destroy($id)
    {

      $category = Category::find($id);
      $category->delete();

      flash::error('La categoria '. $category->name .' ha sido borrada con exito');

      return redirect()->route('categories.index');
    }
}
