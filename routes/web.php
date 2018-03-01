<?php

use \Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get("posts", function(){

//	if( view()->exists("posts.index") ){
//		return "The named view exists";
//	}
//	else {
//		return "The named view does not exist.";
//	}

	$title	= "Another title";
	$other	= "Bob's Jumps";
	$var3	= "var3";
	return view("posts.index", compact("title","other","var3") );
});

//Route::get("testRoute", function(){
//	return "Test route worked";
//});
//
//Route::match(["get","post"], "doubleVerbs", function(){
//	return "Get or post works here";
//});
//
//Route::any("anyUrl", function(){
//	return "any verb works here";
//});
//
//Route::get("ageTest",
//	["middleware"=>"ageCheck", function(){
//	return "ageTest() passed";
//}]);
//
//Route::get("home", function(){
//	return "Welcome home!!!";
//});
//
//Route::get("request-test", function( Request $request ){
////	return $request->input("age");
//	return $request->all();//returns all request params
//});