<!DOCTYPE html>
<html>
<head>
	<title>{{$article->title}}</title>
	<link rel="stylesheet" type="text/css" href="{{ asset('css/general.css')}}">
</head>
<body>
	<h1> {{$article->title}}</h1>
	<hr>
	{{$article->content}}
	<hr>
	{{$article->category->name}} | {{$article->user->name}} |
	@foreach($article->tags as $tag)
		{{$tag->name}}
	@endforeach
</body>
</html>
