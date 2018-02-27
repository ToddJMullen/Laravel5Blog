<?php

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


Route::get("testRoute", function(){
	return "Test route worked";
});

Route::match(["get","post"], "doubleVerbs", function(){
	return "Get or post works here";
});

Route::any("anyUrl", function(){
	return "any verb works here";
});

Route::get("ageTest",
	["middleware"=>"ageCheck", function(){
	return "ageTest() passed";
}]);

Route::get("home", function(){
	return "Welcome home!";
});