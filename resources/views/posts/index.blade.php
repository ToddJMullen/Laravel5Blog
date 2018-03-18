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
	<div class="text-right col-sm-12">
		<form action="{{ action('PostsController@destroy', $post->id ) }}" method="POST">
			<input name="_method" value="DELETE" type="hidden">
			<button class="btn btn-danger pull-right">Delete</button>
			{{csrf_field()}}
		</form>
	</div>
	<hr />
	@endforeach

	{{ $posts->links() }}

@endsection