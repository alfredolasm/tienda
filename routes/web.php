<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/



//Rutas del Front

Route::get('/',[
    'as'    => 'front.index',
    'uses'  => 'FrontController@index' 
]);

//Rutas para filtrar las categorias en la vista

Route::get('categories/{name}',[
    'uses' => 'FrontController@searchCategory',
    'as'   => 'front.search.category'


]);

Route::get('tags/{name}',[
    'uses' => 'FrontController@searchTag',
    'as'   => 'front.search.tag'


]);

Route::get('articles/{slug}',[
    'uses'  => 'FrontController@viewArticle',
    'as'    => 'front.view.article'
]);

Route::get('/admin',[ 
        'as' => 'index', 
        'uses'  => 'FrontController@blog'
    ]);
        /*function(){
        return view('admin.index'); 

    }]);*/

//Rutas del panel de administración

Route::group(['prefix' => 'admin', 'middleware'=>'auth'], function(){

    

	Route::resource('users', 'UsersController');
    Route::get('users/{id}/destroy', [
    	'uses' => 'UsersController@destroy', 
    	'as'   => 'users.destroy'
    ]);


    Route::resource('categories', 'CategoriesController');
    Route::get('categories/{id}/destroy', [
    	'uses' => 'CategoriesController@destroy', 
    	'as'   => 'categories.destroy'
    ]);

    Route::resource('tags', 'TagsController');
    Route::get('tags/{id}/destroy', [
        'uses' => 'TagsController@destroy', 
        'as'   => 'tags.destroy'
    ]);

    Route::resource('articles', 'ArticlesController');
    Route::get('articles/{id}/destroy', [
        'uses' => 'ArticlesController@destroy',
        'as'   => 'articles.destroy'
    ]);

    Route::get('images', [
        'uses'  => 'ImagesController@index',
        'as'    => 'images.index'
    ]);

});

Route::post('auth', 'Auth\LoginController@login')->name('login');
Route::post('logout', 'Auth\LoginController@logout')->name('logout');
Route::get('register', 'Auth\RegisterController@create')->name('register');



Route::get('auth',[ 
    'as' => 'login', function(){
        return view('auth.login');
       }]);      

Route::get('Auth',[ 
    'as' => 'register', function(){
        return view('admin.users.create');
       }]);      


   
Route::resource('file', 'ArticlesController');
