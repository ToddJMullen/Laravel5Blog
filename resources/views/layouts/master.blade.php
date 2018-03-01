<?php

/***********************
 * Project	: bloggy.loc
 * File		: master.blade
 * Created	: Feb 27, 2018, 7:05:41 PM
 * @author	: Todd Mullen
 * Description : master.blade
 ***********************/

//session_start();
?>
<!DOCTYPE HTML>
<html lang="en-US">
    <head>
		<title>@yield("title")</title>
		<meta charset="UTF-8">
		<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" type="text/css">
		<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" rel="stylesheet" type="text/css">
		<link href="css/app.css" rel="stylesheet" type="text/css">

		<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.js" type="text/javascript"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" type="text/javascript"></script>
		<script src="js/app.js" type="text/javascript"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.js" type="text/javascript"></script>
	</head>
	<body>
		<h1>@yield("title")</h1>

		@section("sidebar")
			Sidebar
		@show

		<article>
			@yield("content")
		</article>

		@section("extensionbar")
		<div class="parent">

			<p>This is the parent extension bar content</p>
			@show
		</div>

	</body>
</html>