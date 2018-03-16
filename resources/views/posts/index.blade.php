@extends("layouts.master")

@section("title", "Bloggy Posts")

@section("content")

	@foreach( $posts as $post )
	<h4 class="postTitle">
		{{ $post->id }})
		<a href="{{ action( "PostsController@show", $post->id ) }}">{{ $post->title }}</a>
	</h4>
	<article class="border-left ">
		{{ $post->body }}
	</article>
	<hr />
	@endforeach

	{{ $posts->links() }}

@endsection