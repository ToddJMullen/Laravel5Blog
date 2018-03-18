<?php

/***********************
 * Project	: bloggy.loc
 * File		: edit.blade.php
 * Created	: Mar 18, 2018, 2:44:12 PM
 * @author	: Todd Mullen
 * Description : update.blade.php
 ***********************/

?>
@extends("layouts.master")

@section("content")
<form action="{{ action('PostsController@update', $post->id ) }}" method="POST">

	<div class="form-group">
		<label for="tiTitle">Title</label>
		<input name="title" class="form-control" type="text"
			   value="{{ $post->title }}"
			   placeholder="Blog Title"/>
	</div>

	<div class="form-group">
		<label for="taBody">Blog Away...</label>
		<textarea name="body" class="form-control" cols="70" rows="10"
				  placeholder="Write whatever you want here..."
				  >{{ $post->body }}</textarea>
	</div>


	<div class="col-sm-12 mt-5">
		<button type="submit" name="saveBlog" class="btn btn-primary pull-right"
				id="saveBlog" value="saveBlog">Update...</button>
	</div>

	<input name="_method" value="PUT" type="hidden">
	{{ csrf_field() }}
</form>
@endsection




@section("extensionbar")
This is Update page extension stuff!
@endsection

