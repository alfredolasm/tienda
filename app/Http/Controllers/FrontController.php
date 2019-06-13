<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;
use App\Category;
use App\Tag;
use App\Image;
use App\Promotion;
use Laracasts\Flash\Flash;
use App\Http\Requests\ArticleRequest;
use Carbon\Carbon;

class FrontController extends Controller
{
    public function index()
    {
    	$articles = Article::orderBy('id', 'DESC')->paginate(4);
    	$articles->each(function($articles){
    		$articles->category;
    		$articles->images;
    	});


    	return view('front.index')
    		->with('articles', $articles);

    }

    public function blog()
    {
    	$articles = Article::orderBy('id', 'DESC')->paginate(4);
    	$articles->each(function($articles){
    		$articles->category;
    		$articles->images;
    	});


    	return view('front.index')
    		->with('articles', $articles);

    }

    public function searchCategory($name)
    {
        $category   = Category::SearchCategory($name)->first();
        $articles   = $category->articles()->paginate(4);
        $articles->each(function($articles){
            $articles->category;
            $articles->images;
        });

        return view('front.index')
            ->with('articles', $articles);


    }
    public function searchTag($name)
    {
        $tag        = Tag::SearchTag($name)->first();
        $articles   = $tag->articles()->paginate(4);
        $articles->each(function($articles){
            $articles->tag;
            $articles->images;

        });

        return view('front.index')
            ->with('articles', $articles);


    }
    public function searchPromotion($name)
    {
        $promotion  =Promotion::SearchPromotion($name)->first();
        $articles   = $promotion->articles()->paginate(4);
        $articles->each(function($articles){
            $articles->tag;
            $articles->images;

        });

        return view('front.index')
            ->with('articles', $articles);

    }

    public function viewArticle($slug)
    {
        $article   =Article::findBySlugOrFail($slug);
        $article->category;
        $article->tag;
        $article->images;
        $article->user;

        return view('front.article')->with('article', $article);


    }
}
