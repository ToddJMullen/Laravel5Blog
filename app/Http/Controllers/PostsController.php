<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Post;

class PostsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
//        $posts = Post::all();
        $posts = Post::paginate(10);
//		dd($posts);//"dump or die" debug method
		return view("posts.index", ['posts' => $posts, "title" => "A Title"] );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("posts.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $post = new Post();
//		$post->title	= $request->get("title");
//		$post->body		= $request->get("body");
		//my first "guess" ^^^^
		$post->title	= $request->input("title");
		$post->body		= $request->input("body");
		$post->save();
		return redirect("/posts");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $post = Post::find( $id );
		return view("posts.show", ["post" => $post] );
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $post = Post::find( $id );
		return view("posts.edit", ["post", $post] );
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $post = Post::find( $id );
		$post->title	= $request->input("title");
		$post->body		= $request->input("body");
		$post->save();
//		return view("posts.view", ["post", $post] );//he didn't do this, maybe this is terminal endpoint?
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post = Post::find($id);
		$post->delete();
		return redirect("/posts");
    }
}
