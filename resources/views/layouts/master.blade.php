<?php
/* * *********************
 * Project	: bloggy.loc
 * File		: master.blade
 * Created	: Feb 27, 2018, 7:05:41 PM
 * @author	: Todd Mullen
 * Description : master.blade
 * ********************* */

//session_start();

?>
<!DOCTYPE HTML>
<html lang="en-US">
    <head>
		<title>@yield("title")</title>
		<meta charset="UTF-8">
		<!--		<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" type="text/css">
				<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" rel="stylesheet" type="text/css">-->
		<link href="/css/simple-sidebar.css" rel="stylesheet">

		<link href="/css/app.css" rel="stylesheet" type="text/css">

<!--		<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.js" type="text/javascript"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" type="text/javascript"></script>-->
		<!--<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.js" type="text/javascript"></script>-->
	</head>
	<body>

		<div id="wrapper">

			<!-- Sidebar -->
			<div id="sidebar-wrapper">
				<ul class="sidebar-nav">
					<li class="sidebar-brand">
						<a href="#">
							Start Bootstrap
						</a>
					</li>
					<li>
						<a href="#">Dashboard</a>
					</li>
					<li>
						<a href="login">Login</a>
					</li>
					<li>
						<a href="users">Users</a>
					</li>
					<li>
						<a href="inventory">Inventory</a>
					</li>
					<li>
						<a href="#">Events</a>
					</li>
					<li>
						<a href="#">About</a>
					</li>
					<li>
						<a href="{{ action("PostsController@create") }}">Write Post</a>
					</li>
					<li>
						<a href="{{ action("PostsController@index") }}">All Posts</a>
					</li>
					<li>
						<a class="menu-toggle btn btn-secondary text-left" >Close Menu</a>
					</li>
				</ul>
			</div>
			<!-- /#sidebar-wrapper -->

			<!-- Page Content -->
			<div id="page-content-wrapper">
				<div class="container-fluid">
					<div class="text-right">
						<a href="#menu-toggle" class="menu-toggle btn btn-secondary">Toggle Menu</a>
					</div>
					@yield("content")



					<div class="col-sm-12 mt-5 mb-5 b-0">
						<button data-target="#extensionContent" data-toggle="collapse" aria-expanded="false"
								aria-controls="extensionContent" class="btn btn-sm btn-primary" type="button">
							Extension Content
						</button>
							<div id="extensionContent" class="parent collapse">

							<p>This is the master/parent extension bar content</p>

							@section("extensionbar")
							@show
							<p>This is after the injected stuff</p>
						</div>
					</div>
				</div>
			</div>
			<!-- /#page-content-wrapper -->



		</div>
		<!-- /#wrapper -->

		<!-- Bootstrap core JavaScript -->
		<script src="/vendor/jquery/jquery.min.js"></script>
		<script src="/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
		<script src="/js/app.js" type="text/javascript"></script>

		<!-- Menu Toggle Script -->
		<script>
			$( ".menu-toggle" ).click( function(e){
				e.preventDefault();
				$( "#wrapper" ).toggleClass( "toggled" );
			} );
		</script>

	</body>

</html>