<?php

class HomeController extends BaseController {

	/*
	|--------------------------------------------------------------------------
	| Default Home Controller
	|--------------------------------------------------------------------------
	|
	| You may wish to use controllers instead of, or in addition to, Closure
	| based routes. That's great! Here is an example controller method to
	| get you started. To route to this controller, just add the route:
	|
	|	Route::get('/', 'HomeController@showWelcome');
	|
	*/

	
	// public function showWelcome()
	// {
	// 	return View::make('hello');
	// }

	public function showLayout()
	{
		return View::make('layout');
	}

	public function showHome()
	{
		return View::make('home');
	}

	public function showAbout()
	{
		return View::make('about');
	}

	public function showSingleAdvisor()
	{
		return View::make('singleadvisor');
	}

	public function showCareer()
	{
		return View::make('career');
	}

	public function showTestimonial()
	{
		return View::make('testimonial');
	}

	public function showPartners()
	{
		return View::make('partners');
	}

	public function showService()
	{
		return View::make('service');
	}

	public function showService2()
	{
		return View::make('service2');
	}

	public function showPricingpage()
	{
		return View::make('pricingpage');
	}

	public function show404Page()
	{
		return View::make('404page');
	}

	public function showNosearchresult()
	{
		return View::make('nosearchresult');
	}

	public function showSearchresult()
	{
		return View::make('searchresult');
	}

	public function showFaq()
	{
		return View::make('faq');
	}

	public function showProject()
	{
		return View::make('projects');
	}

	public function showPortfolio2()
	{
		return View::make('portfolio2');
	}

	public function showPortfolio3()
	{
		return View::make('portfolio3');
	}

	public function showPortfolio4()
	{
		return View::make('portfolio4');
	}

	public function showPortfolio5()
	{
		return View::make('portfolio5');
	}

	public function showBlog()
	{
		return View::make('blog');
	}

	public function showBlogrightbar()
	{
		return View::make('blogrightbar');
	}

	public function showBlogsinglecol()
	{
		return View::make('blogsinglecol');
	}

	public function showBlog2col()
	{
		return View::make('blog2col');
	}

	public function showBlogdetails()
	{
		return View::make('blogdetails');
	}

	public function showShop()
	{
		return View::make('shop');
	}

	public function showProductdetails()
	{
		return View::make('productdetails');
	}

	public function showCartpage()
	{
		return View::make('cartpage');
	}

	public function showCheckoutpage()
	{
		return View::make('checkoutpage');
	}

	public function showContacts()
	{
		return View::make('contactus');
	}

	public function showAdvisor()
	{
		return View::make('advisor');
	}
}

