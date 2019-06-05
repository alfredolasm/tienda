<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Route;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\User;
use Laracasts\Flash\Flash;
use App\Http\Requests\UserRequest;

class UsersController extends Controller
{

  public function index()
  	{
      $users = User::orderBy('id','ASC')->paginate(5);
      return view('admin.users.index')->with('users',$users);

   	}

  public function show($id)
  	{
    
  	}
  public function create()
    {
        return view('admin.users.create');
    }
 
  public function store(UserRequest $request)
    {
     
      $user = new User($request->all());
      $user->password = bcrypt($request->password);
      $user->save();    
      
      flash('Se a registrado  '.$user->name.' de forma satisfatoria')->success();

      return redirect()->route('users.index');
    }
 
  public function edit($id)
    {

      $user = User::find($id);
      return view('admin.users.edit')->with('user',$user);

    }

  public function update(Request $request, $id)    
  	{
      $user = User::find($id);
      $user->fill($request->all());
      $user->save();
      
      flash::warning('Se a modificado  '.$user->name.' de forma satisfatoria');

      return redirect()->route('users.index');
    }
 
    
  public function destroy($id)
    {

      $user = User::find($id);
      $user->delete();

      Flash::error('El usuario '.$user->name.' ha sido borrado de la base de datos')->success();

      return redirect()->route('users.index');


    }
} 

