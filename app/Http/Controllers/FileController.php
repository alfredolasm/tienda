<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FileController extends Controller
{

	public function index()
	{
	    return view('file/form');
	}

	public function store(Request $request)
	 {
	            $path = public_path().'/images/articles/';
	            $files = $request->file('file');
	            dd($files);
	            
	            foreach($files as $file){
	                $fileName = $file->getClientOriginalName();
	                $file->move($path, $fileName);
	            }
	 }
}
