@extends('layout')
@section('content')
<!-- ======= Banner ======= -->
		<section class="p0 container-fluid banner about_banner">
			<div class="about_banner_opacity">
				<div class="container">
					<div class="banner_info_about">
						<h1>404 Page</h1>
						<ul>
							<li><a href="http://ow.ly/XqzNo">Home</a></li>
							<li><i class="fa fa-angle-right"></i></li>
							<li>404 Page</li>
						</ul>
					</div> <!-- End Banner Info -->
				</div> <!-- End Container -->
			</div> <!-- End Banner_opacity -->
		</section> <!-- End Banner -->
<!-- ================= /Banner ================ -->

<!-- =================== 404 container========== -->
		<section class="error_page_container">
			<div class="container">
				<div class="row">
					<div class="col-lg-7 pull-right title_holder">
						<h2><span>404:</span> Page not found</h2><img src="http://www.wplocker.com/e3dd.jpg">
						<p>We’re sorry but we can’t seem to find the page you requested. <br>
						This might be because you have typed the web address incorrectly.</p>
						<a href="index.html">Go Home Page <i class="fa fa-arrow-circle-right"></i></a>
					</div>
				</div>
			</div>
		</section>
<!-- =================== /404 container========== -->
@stop