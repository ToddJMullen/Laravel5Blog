@extends("layouts.master")

@section("title", "Blog Posts")

@section("content")

	<h4>{{ $post->title }} <a href="/posts" class="pull-right">All Posts</a></h4>

	<article class="border-left ">
		{{ $post->body }}
		<form action="{{ action('PostsController@destroy', $post->id) }}"
			  method="POST" class="text-right" >
			<button class="btn btn-danger pull-right">Delete</button>
		</form>
	</article>


@endsection