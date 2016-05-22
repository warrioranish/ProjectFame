<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

// Route::get('/', function()
// {
// 	return View::make('hello');
// });


Route::get("/home", "HomeController@showLayout");

Route::get("/home", "HomeController@showHome");

	Route::get("/about", "HomeController@showAbout");

	Route::get("/chairman", "HomeController@showChairman");

	Route::get("/career", "HomeController@showCareer");

	Route::get("/testimonial", "HomeController@showTestimonial");

	Route::get("/partners", "HomeController@showPartners");

Route::get("/service", "HomeController@showService");

	Route::get("/service2", "HomeController@showService2");

	Route::get("/pricingpage", "HomeController@showPricingpage");

Route::get("/404page", "HomeController@show404Page");

	Route::get("/nosearchresult", "HomeController@showNosearchresult");

	Route::get("/searchresult", "HomeController@showSearchresult");

	Route::get("/faq", "HomeController@showFaq");

Route::get("/blog", "HomeController@showBlog");
	
	Route::get("/blogrightbar", "HomeController@showBlogrightbar");

	Route::get("/blogsinglecol", "HomeController@showBlogsinglecol");

	Route::get("/blog2col", "HomeController@showBlog2col");

	Route::get("/blogdetails", "HomeController@showBlogdetails");

Route::get("/gallery", "HomeController@showGallery");
	
	Route::get("/portfolio2", "HomeController@showPortfolio2");

	Route::get("/portfolio3", "HomeController@showPortfolio3");

	Route::get("/portfolio4", "HomeController@showPortfolio4");

	Route::get("/portfolio5", "HomeController@showPortfolio5");

Route::get("/contactus", "HomeController@showContacts");

Route::get("/introduction", "HomeController@showIntroduction");













/*=================admin routes======================*/

Route::get("/admin", "HomeController@showAdminhome");

Route::get("/adminaboutus", "HomeController@showAdminaboutus");

Route::get("/adminservices", "HomeController@showAdminservices");

Route::get("/adminstudyabroad", "HomeController@showAdminstudyabroad");

Route::get("/adminblogs", "HomeController@showAdminblogs");

Route::get("/admingallery", "HomeController@showAdmingallery");


?>




