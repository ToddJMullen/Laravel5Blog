@extends("layouts.master")

@section("title", "Blog Posts")

@section("content")

	<h4>{{ $post->title }} <a href="/posts" class="pull-right">All Posts</a></h4>

	<article class="border-left p-2">

		{{ $post->body }}

		<form action="{{ action('PostsController@destroy', $post->id) }}"
			  method="POST" class="text-right" >
			<input name="_method" value="DELETE" type="hidden">
			<button class="btn btn-danger pull-right">Delete</button>
			{{ csrf_field() }}
		</form>
	</article>


@endsection