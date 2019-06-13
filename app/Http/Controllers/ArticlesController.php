<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Routing\Route;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Article;
use App\Category;
use App\Tag;
use App\Image;
use App\Promotion;
use Laracasts\Flash\Flash;
use App\Http\Requests\ArticleRequest;

class ArticlesController extends Controller
{

   	public function index(Request $request)
  	{
      $articles = Article::Search($request->title)->orderBy('id','DESC')->paginate(4);
      $articles->each(function($articles)
      {
        $articles->Category;
        $articles->user;
        $articles->Promotion;
      
      });
      

      return view('admin.articles.index')->with('articles',$articles);
   	}

  public function show($id)
  	{
    
  	}

  public function create()
    {
    	$categories = Category::orderBy('name', 'ASC')->pluck('name', 'id');
      $promotions = Promotion::orderBy('name', 'ASC')->pluck('name', 'id');
      $tags	    = Tag::orderBy('name','ASC')->pluck('name', 'id');

    	return view('admin.articles.create')
    		->with('categories', $categories)
    		->with('tags', $tags)
        ->with('promotions',$promotions);

    }
 
  public function store(ArticleRequest $request)
   
    {
      
      if($request->file('image'))
      {
        $file    = $request->file('image');
        $path    =  public_path(). '/images/articles/';
        $name    = 'blog_' . time() .'.'.$file->getClientOriginalExtension();
        $file->move($path,$name);
       
      }

      $article = new Article($request->all());
      $article->user_id = \Auth::user()->id;
      $article->save();  

      $article->tags()->sync($request->tags);  

      $image = new Image();
      $image->name =$name;
      $image->Article()->associate($article);
      $image->save();
      
      flash::success('Se a registrado  '.$article->title.' de forma satisfatoria');
      
      return redirect()->route('articles.index');
        
            
      }
 
  public function edit($id)
    {

      $article    = Article::find($id);
      $article->category;
      $categories = Category::OrderBy('id', 'DESC')->pluck('name', 'id');
      $tags       = Tag::OrderBy('id', 'DESC')->pluck('name', 'id');

      $my_tags = $article->tags->pluck('id')->ToArray();
     

      return view('admin.articles.edit')
          ->with('categories', $categories)
          ->with('article', $article)
          ->with('tags', $tags)
          ->with('my_tags', $my_tags);
    }

  public function update(Request $request, $id)    
  	{
      $article = Article::find($id);
      $article->fill($request->all());
      $article->save();

      $article->tags()->sync($request->tags);

      Flash::warning('Se ha editado el articulo '.$article->title.' de forma exitosa!');

      return redirect()->route('articles.index');

    }
 
    
  public function destroy($id)
    {

    	$article = Article::find($id);
    	$article->delete();
   
    	Flash::error('El articulo '.$article->title.' ha sido eliminado con exito');
    	 return redirect()->route('articles.index');

    }
}
