@extends('layout')
@section('content')
<!-- ======= Banner ======= -->
		<section class="p0 container-fluid banner about_banner">
			<div class="about_banner_opacity">
				<div class="container">
					<div class="banner_info_about">
						<h1>Search</h1>
						<ul>
							<li><a href="index.html">Home</a></li>
							<li><i class="fa fa-angle-right"></i></li>
							<li>Search</li>
						</ul>
					</div> <!-- End Banner Info -->
				</div> <!-- End Container -->
			</div> <!-- End Banner_opacity -->
		</section> <!-- End Banner -->
<!-- ================= /Banner ================ -->

<!-- ================ No Seach Results Showing ========== -->
		<section class="no_result_show faqs_sec"> <!-- faqs_sec use for style right side content -->
			<div class="container">
				<div class="row">
					<div class="col-lg-8 col-md-8 col-sm-12 col-xs-12 no_result_holder">
						<h2>No Seach Results Showing</h2>
						<p>Suggestions:</p>
						<ul>
							<li><i class="fa fa-angle-right"></i>Make sure all words are spelled correctly</li>
							<li><i class="fa fa-angle-right"></i>Wildcard searches (using the asterisk *) are not supported</li>
							<li><i class="fa fa-angle-right"></i>Try more general keywords, especially if you are attempting a name</li>
						</ul>
						<form action="" method="get">
							<input class="form-control" type="text">
							<button type="submit">search now <i class="fa fa-arrow-circle-right"></i></button>
						</form>
					</div>
					<div class="col-lg-4 col-md-4 col-sm-12 pull-left left_side pdr5"> <!--for this page-(Right Side) -->
						<h4>Search</h4>
						<form action="#">
							<input type="text" placeholder="Enter Search Keywords">
							<button type="submit"><span class="icon icon-Search"></span></button>
						</form>
						<h4>About Us</h4>
						<p>Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipis civelit sed quia non qui dolorem ipsum quia dolor sit amet, consectetur, adipis civelit sed quia numquam eius modi.</p>
						<h4>Categories</h4>
						<ul class="p0 category_item">
							<li><a href=""><i class="fa fa-angle-right"></i>&nbsp;&nbsp;&nbsp;&nbsp;Financial Investment</a></li>
							<li><a href=""><i class="fa fa-angle-right"></i>&nbsp;&nbsp;&nbsp;&nbsp;Company Growth</a></li>
							<li><a href=""><i class="fa fa-angle-right"></i>&nbsp;&nbsp;&nbsp;&nbsp;Taxes and Accounting</a></li>
							<li><a href=""><i class="fa fa-angle-right"></i>&nbsp;&nbsp;&nbsp;&nbsp;Financial modeling and planning</a></li>
							<li><a href=""><i class="fa fa-angle-right"></i>&nbsp;&nbsp;&nbsp;&nbsp;Profits & Wealth</a></li>
							<li><a href="" class="bottom_item"><i class="fa fa-angle-right"></i>&nbsp;&nbsp;&nbsp;&nbsp;Investments in Bonds</a></li>
						</ul>
						<h4>Popular Posts</h4>
						<ul class="p0 post_item">
							<li>AUG 12,2015<a href="">Making Cents Investments in Start-ups become profitable for Companies ...</a></li>
							<li>AUG 12,2015<a href="">Making Cents Investments in Start-ups become profitable for Companies ...</a></li>
							<li>AUG 12,2015<a href="" class="bottom_item">Making Cents Investments in Start-ups become profitable for Companies ...</a></li>
						</ul>
						<h4>Meet Our Advisior</h4>
						<a class="img_holder" href=""><img src="assets/images/service/11.jpg" alt="image"></a>
						<h5><a href="">Merry Michale</a></h5>
						<p>Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipis civelit sed quia non qui dolorem</p>
						<h4>Tags Clouds</h4>
						<ul class="p0 clouds">
							<li><a href="">financial investiment</a></li>
							<li><a href="">Taxes</a></li>
							<li><a href="">Account & Profit</a></li>
							<li><a href="">Insurances</a></li>
							<li><a href="">Real news</a></li>
							<li><a href="">OUr advisors</a></li>
						</ul>
					</div> <!-- End left side -->
				</div> <!-- End row -->
			</div> <!-- End container -->
		</section> <!-- End no_result_show -->

<!-- ================ No Seach Results Showing ============ -->

<!-- ============ free consultation ================ -->
		<section class="container-fluid consultation">
			<div class="container">
				<p>If you have any querry for related investment  ... We are available</p>
				<a href="">Contact us <i class="fa fa-arrow-circle-right"></i></a>
			</div>
		</section> <!-- End consultation -->
<!-- ============ /free consultation ================ -->
@stop