<?php

/***********************
 * Project	: bloggy.loc
 * File		: create.blade.php
 * Created	: Mar 15, 2018, 9:30:49 PM
 * @author	: Todd Mullen
 * Description : create.blade.php provides the form for creating a new Blog Post
 ***********************/
?>
@extends("layouts.master")

@section("content")
<form action="{{ action('PostsController@store') }}" method="POST">

	<div class="form-group">
		<label for="tiTitle">Title</label>
		<input name="title" class="form-control" type="text"
			   placeholder="Blog Title"/>
	</div>

	<div class="form-group">
		<label for="taBody">Blog Away...</label>
		<textarea name="body" class="form-control" cols="70" rows="10"
				  placeholder="Write whatever you want here..."></textarea>
	</div>


	<div class="col-sm-12 mt-5">
		<button type="submit" name="saveBlog" class="btn btn-primary pull-right"
				id="saveBlog" value="saveBlog">Save...</button>
	</div>


	{{ csrf_field() }}
</form>
@endsection




@section("extensionbar")
This is create page extension stuff!
@endsection

