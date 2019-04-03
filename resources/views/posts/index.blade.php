@extends('layouts.app')

@section('content')
		<h1>POSTS</h1>
		@if(count($posts) > 0)
				@foreach($posts as $post)
					<div class = "well">
						<h3><a href="/posts/{{$post->id}}">{{$post->title}}</h3>
						<small>Written on {{$post->created_at}}</small>
					</div>
				@endforeach
				{{$posts->links()}}
		@else
				<p> NO POST FOUND </p>
		@endif
@endsection