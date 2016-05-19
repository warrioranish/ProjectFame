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

	public function showHome()
	{
		return View::make('frontend.home');
	}

	public function showAbout()
	{
		return View::make('frontend.about');
	}

		public function showSingleAdvisor()
		{
			return View::make('frontend.singleadvisor');
		}

		public function showCareer()
		{
			return View::make('frontend.career');
		}

		public function showTestimonial()
		{
			return View::make('frontend.testimonial');
		}

		public function showPartners()
		{
			return View::make('frontend.partners');
		}

	public function showService()
	{
		return View::make('frontend.service');
	}

		public function showService2()
		{
			return View::make('frontend.service2');
		}

		public function showPricingpage()
		{
			return View::make('frontend.pricingpage');
		}

	public function showBlog()
	{
		return View::make('frontend.blog');
	}

		public function showBlogrightbar()
		{
			return View::make('frontend.blogrightbar');
		}

		public function showBlogsinglecol()
		{
			return View::make('frontend.blogsinglecol');
		}

		public function showBlog2col()
		{
			return View::make('frontend.blog2col');
		}

		public function showBlogdetails()
		{
			return View::make('frontend.blogdetails');
		}

	public function showGallery()
	{
		return View::make('frontend.gallery');
	}

		public function showPortfolio2()
		{
			return View::make('frontend.portfolio2');
		}

		public function showPortfolio3()
		{
			return View::make('frontend.portfolio3');
		}

		public function showPortfolio4()
		{
			return View::make('frontend.portfolio4');
		}

		public function showPortfolio5()
		{
			return View::make('frontend.portfolio5');
		}
		
	public function showContacts()
	{
		return View::make('frontend.contactus');
	}

	public function showAdvisor()
	{
		return View::make('frontend.advisor');
	}






	/*===================admin controllers==================*/
	public function showAdminLogin(){
		return View::make('adminlogin');
	}

	public function showAdminhome()
	{
		return View::make('backend.adminhome');
	}

	public function showAdminaboutus()
	{
		return View::make('backend.adminaboutus');
	}

	public function showAdminservices()
	{
		return View::make('backend.adminservices');
	}

	public function showAdminstudyabroad()
	{
		return View::make('backend.adminstudyabroad');
	}

	public function showAdminblogs()
	{
		return View::make('backend.adminblogs');
	}

	public function showAdmingallery()
	{
		return View::make('backend.admingallery');
	}




}




