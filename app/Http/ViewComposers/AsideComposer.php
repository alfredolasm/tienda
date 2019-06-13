<?php 

namespace App\Http\ViewComposers;

use Illuminate\Contracts\View\View;
use App\Category;
use App\Tag;
use App\Article;
use App\Promotion;

/**
 * 
 */
class AsideComposer 
{
	
	public function compose(View $view)
	{
		$categories = Category::orderBy('name', 'DESC')->get();
		$tags 		= Tag::orderBy('name', 'DESC')->get();
		$articles 	= Article::orderBy('title', 'DESC')->get();
		$promotions = Promotion::orderBy('name', 'DESC')->get();
			$view->with('categories',$categories)
				 ->with('tags', $tags)
				 ->with('articles_all', $articles)
				 ->with('promotions', $promotions);
	}
}