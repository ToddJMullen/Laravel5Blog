<?php

/***********************
 * Project	: bloggy.loc
 * File		: posts.php
 * Created	: Feb 27, 2018, 6:35:18 PM
 * @author	: Todd Mullen
 * Description : posts.index.php
 ***********************/
//session_start();
?>

@extends("layouts.master");

echo "This is " . __FILE__;

@section("title", "Title: $title" )

@section("content")
<h1>Simple Sidebar</h1>
<p>This template has a responsive menu toggling system. The menu will appear collapsed on smaller screens, and will appear non-collapsed on larger screens. When toggled using the button below, the menu will appear/disappear. On small screens, the page content will be pushed off canvas.</p>
<p>Make sure to keep all page content within the <code>#page-content-wrapper</code>.</p>
@endsection


@section("extensionbar")
	@parent
	<div class="child">This will be an extension of the master blade's extensionbar content</div>
	<p>While you don't *have* to get a job, it's a good idea because, as Malin suggested, it gives you the opportunity for wider exposure to parts of development that you are less likely to find in a short amount of time. Often those who are only self taught and start doing work end up very focused on solving the problem right now, rather than seeing the bigger picture(s) and learning about things that often help reduce future problems.
	</p>
	<p>
For instance learning about application architecture & design patterns isn't going to help you to throw together a blog with registration, login, ads, a map, a forum, etc, but it will help you to build them in a way that you can easily reuse, extend or change features in each of them without having to "fix" all the others as a side effect.
	</p>
	<p>
Also, you don't need an education/degree to build sites & application, or to get paid to do it, but you *do* need them for some jobs or companies to even consider / interview you (permanent or contract - it's up to each company/individual). My degrees are *not* CS or development related, I taught myself all the things Malin mentioned after I graduated. I just kept building applications that could do anything I thought would be fun and showing them to people, then people wanted to pay me to build what *they* thought would be fun/make money. I kept doing that more and more which is why I'm a developer now instead a chef.
	</p>
	<p>
Once you hit a certain level though, jobs & interviews require some technical degree. For me, my Mathematics, Physics covers. (Technically the Philosophy degree too covers, but that often requires explaining to most people.)
	</p>
	<p>
It's all up to your objective & the job market. Some companies / managers may only be interested in your resume / CV / portfolio & a interview test / challenge. I've had to work problems for managers, I had to build a checkers game, coding challenges, etc. If you don't have a Github account I strongly suggest you get one and make sure you learn how to work with Git (or other version control) and create lots of stuff and track the projects in Github. Asking for codes samples, to solve a specific problem, or just in general, are almost always expected. For designer, the same goes for screen comps and definitely the portfolio/design work.
	</p>
	<p>
It's the tech industry, so yes, in some sense you will be a student forever, because we all keep improving & adding to it, but don't focus on what you *don't* know or *can't* do, focus on what you have. Use the other two as hints on what you should be doing next.
	</p>
	<p>
"Whether you think you can, or you think you can't, you're right." -- Henry Ford</p>
@endsection

@section("examples")

@if( true )
something if true
@else
something if false
@endif

@while( false )
something
@endwhile

@endsection