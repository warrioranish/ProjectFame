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

<!-- =================== Search container ============= -->
		<section class="search_container faqs_sec"> <!-- faqs_sec use for style right side content -->
			<div class="container">
				<div class="row">
					<div class="col-lg-8 search_result">
						<h2>Seach Results</h2>
						<div class="single_search_result search_result_with_img row">
							<div class="col-lg-3 img_holder">
								<img src="assets/images/search/1.jpg" alt="image">
							</div>
							<div class="col-lg-9 text_holder">
								<span>Dec 11, 2015,</span>
								<h3>Investment Planning</h3>
								<p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesci unt eque porro quisquam est, qui dolorem ipsum quia dolor sit amet.</p>
								<a href="">http://mefinance.com/services/investment planning</a>
							</div>
						</div>
						<div class="single_search_result search_result_with_img row">
							<div class="col-lg-3 img_holder">
								<img src="assets/images/search/2.jpg" alt="image">
							</div>
							<div class="col-lg-9 text_holder">
								<span>Dec 11, 2015,</span>
								<h3>Investment Planning</h3>
								<p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesci unt eque porro quisquam est, qui dolorem ipsum quia dolor sit amet.</p>
								<a href="">http://mefinance.com/services/investment planning</a>
							</div>
						</div>
						<div class="single_search_result search_result_with_img row">
							<div class="col-lg-3 img_holder">
								<img src="assets/images/search/3.jpg" alt="image">
							</div>
							<div class="col-lg-9 text_holder">
								<span>Dec 11, 2015,</span>
								<h3>Investment Planning</h3>
								<p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesci unt eque porro quisquam est, qui dolorem ipsum quia dolor sit amet.</p>
								<a href="">http://mefinance.com/services/investment planning</a>
							</div>
						</div>
						<div class="single_search_result search_result_with_img row">
							<div class="col-lg-3 img_holder">
								<img src="assets/images/search/4.jpg" alt="image">
							</div>
							<div class="col-lg-9 text_holder">
								<span>Dec 11, 2015,</span>
								<h3>Investment Planning</h3>
								<p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesci unt eque porro quisquam est, qui dolorem ipsum quia dolor sit amet.</p>
								<a href="">http://mefinance.com/services/investment planning</a>
							</div>
						</div>
						<div class="single_search_result search_result_with_img row">
							<div class="col-lg-3 img_holder">
								<img src="assets/images/search/5.jpg" alt="image">
							</div>
							<div class="col-lg-9 text_holder">
								<span>Dec 11, 2015,</span>
								<h3>Investment Planning</h3>
								<p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesci unt eque porro quisquam est, qui dolorem ipsum quia dolor sit amet.</p>
								<a href="">http://mefinance.com/services/investment planning</a>
							</div>
						</div>
						<div class="single_search_result search_result_without_img row">
							<span>Dec 11, 2015,</span>
							<h3>Investment Planning</h3>
							<p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt eque porro quisquam.</p>
							<a href="">http://mefinance.com/services/investment planning</a>
						</div>
						<div class="single_search_result search_result_without_img row">
							<span>Dec 11, 2015,</span>
							<h3>Investment Planning</h3>
							<p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt eque porro quisquam.</p>
							<a href="">http://mefinance.com/services/investment planning</a>
						</div>
						<div class="single_search_result search_result_without_img row">
							<span>Dec 11, 2015,</span>
							<h3>Investment Planning</h3>
							<p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt eque porro quisquam.</p>
							<a href="">http://mefinance.com/services/investment planning</a>
						</div>
					</div> <!-- End right side -->
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
						<h5><a href="http://tinyurl.com/jdymnat">Merry Michale</a></h5>
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
		</section> <!-- End search_container -->
<!-- ============= /Search container ============== -->

<!-- ============ free consultation ================ -->
		<section class="container-fluid consultation">
			<div class="container">
				<p>If you have any querry for related investment  ... We are available</p>
				<a href="">Contact us <i class="fa fa-arrow-circle-right"></i></a>
			</div>
		</section> <!-- End consultation -->
<!-- ============ /free consultation ================ -->
@stop