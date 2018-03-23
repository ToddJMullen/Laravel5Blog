@extends("layouts.master")

@section("title", "Bloggy Posts")

@section("content")

@foreach( $posts as $post )
<div class="row">
	<h4 class="postTitle col-sm-12">
		{{ $post->id }})
		<a href="{{ action( "PostsController@show", $post->id ) }}">{{ $post->title }}</a>
	</h4>
	<article class="border-right col-sm-11">
		{{ $post->body }}
	</article>
	<div class="col-sm-1 text-right">
		<form action="{{ action('PostsController@destroy', $post->id ) }}" method="POST">
			<input name="_method" value="DELETE" type="hidden">
			<button class="btn btn-danger pull-left">Delete</button>
			{{csrf_field()}}
		</form>
		<a href="{{ action( "PostsController@edit", $post->id ) }}"
		   class="btn btn-warning pullleft- mt-3">Edit</a>
	</div>
</div>
<hr />
@endforeach

{{ $posts->links() }}

@endsection