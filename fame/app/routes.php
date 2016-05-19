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

/*named routing used*/
Route::get('/home', 'HomeController@showHome');

Route::get('/about', 'HomeController@showAbout');

	Route::get('about/singleadvisor', array(
		'as' => 'singleadvisor',
		 'uses' => 'HomeController@showSingleAdvisor'
		 ));

	Route::get('about/career', array(
		'as' => 'career',
		 'uses' => 'HomeController@showCareer'
		 ));

	Route::get('about/testimonial', array(
		'as' => 'testimonial',
		'uses' => 'HomeController@showTestimonial'
		));

	Route::get('about/partners', array(
		'as' => 'partners',
		'uses' => 'HomeController@showPartners'
		));

Route::get('/service', 'HomeController@showService');

	Route::get('service/service2', array(
		'as' => 'service2',
		'uses' => 'HomeController@showService2'
		));

	Route::get('service/pricingpage', array(
		'as' => 'pricingpage',
		'uses' => 'HomeController@showPricingpage'
		));

Route::get('/blog', 'HomeController@showBlog');
	
	Route::get('blog/blogsinglecol', array(
		'as' => 'blogsinglecol',
		'uses' => 'HomeController@showBlogsinglecol'
		));

	Route::get('/blog/blogrightbar', array(
		'as' => 'blogrightbar',
		'uses' => 'HomeController@showBlogrightbar'
		));

	Route::get('blog/blog2col', array(
		'as' => 'blog2col',
		'uses' => 'HomeController@showBlog2col'
		));

	Route::get('blog/blogdetails', array(
		'as' => 'blogdetails',
		'uses' => 'HomeController@showBlogdetails'
		));

Route::get('/gallery', 'HomeController@showGallery');
	
	Route::get('gallery/portfolio2', array(
		'as' => 'portfolio2',
		'uses' => 'HomeController@showPortfolio2'
		));

	Route::get('gallery/portfolio3', array(
		'as' => 'portfolio3',
		'uses' => 'HomeController@showPortfolio3'
		));

	Route::get('gallery/portfolio4', array(
		'as' => 'portfolio4',
		'uses' => 'HomeController@showPortfolio4'
		));

	Route::get('gallery/portfolio5', array(
		'as' => 'portfolio5',
		'uses' => 'HomeController@showPortfolio5'
		));

Route::get('/contactus', 'HomeController@showContacts');

Route::get('/advisor', 'HomeController@showAdvisor');













/*=================admin routes======================*/

Route::get("/admin", "HomeController@showAdminhome");

Route::get("/adminaboutus", "HomeController@showAdminaboutus");

Route::get("/adminservices", "HomeController@showAdminservices");

Route::get("/adminstudyabroad", "HomeController@showAdminstudyabroad");

Route::get("/adminblogs", "HomeController@showAdminblogs");

Route::get("/admingallery", "HomeController@showAdmingallery");


?>




