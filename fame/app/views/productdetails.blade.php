@extends('layout')
@section('content')

<!-- ======= Banner ======= -->
		<section class="p0 container-fluid banner about_banner">
			<div class="about_banner_opacity">
				<div class="container">
					<div class="banner_info_about">
						<h1>Product</h1>
						<ul>
							<li><a href="index.html">Home</a></li>
							<li><i class="fa fa-angle-right"></i></li>
							<li>Product</li>
						</ul>
					</div> <!-- End Banner Info -->
				</div> <!-- End Container -->
			</div> <!-- End Banner_opacity -->
		</section> <!-- End Banner -->
<!-- ================= /Banner ================ -->

<!-- =================== Product Details============ -->
		<section class="shop_container product_details_container faqs_sec"> <!-- faqs_sec use for style left side content -->
			<div class="container">
				<div class="row">
					<!-- .product-details-page-content -->
					<div class="col-lg-8 col-md-8 col-sm-12 col-xs-12 pull-right shop-page-content product-details-page-content">
						<div class="row product-details-box">
							<div class="col-lg-6 img-holder">
								<img src="assets/images/shop/product-details.png" alt="">
							</div>
							<div class="col-lg-6" style="padding-left:23px;">
								<h3>Battery screwdriver</h3>
								<p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequ untur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, </p>
								<span>Price : <b>$24.5</b></span>
								<span>Quantity : <input type="text" value="1"> </span>
								<a href="#" class="add-to-cart">Add to Cart<i class="fa fa-arrow-circle-right"></i></a>
							</div>
						</div>
							<!-- product-details-tab -->
						<div class="bottom_tab col-xs-12">
							<ul class="nav nav-tabs">
							  <li class="active"><a data-toggle="tab" href="#tab_1">Descripton</a></li>
							  <li><a data-toggle="tab" href="#tab_2">Specification</a></li>
							  <li><a data-toggle="tab" href="#tab_3">Review (0)</a></li>
							</ul>
							<div class="tab-content bottom_tab_info">
							  <div id="tab_1" class="tab-pane fade in active">
							    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. <br> <br>
								xcepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum </p>
							  </div>
							  <div id="tab_2" class="tab-pane fade">
							    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. <br> <br>
								xcepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum </p>
							  </div>
							  <div id="tab_3" class="tab-pane fade">
							    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. <br> <br>
								xcepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum </p>
							  </div>
							</div>
						</div>
							<!-- /product-details-tab -->
						<div class="row best-seller">
							<div class="section-title-style-2">
								<h2>Best Seller</h2>
							</div>
						</div>
						<div class="row">
							<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 single-shop-item">
								<img class="img-responsive" src="assets/images/shop/7.jpg" alt="">
								<div class="meta">
									<h4>Invest Bonds</h4>
									<p>Lorem ipsum dolor sit amet, con sectetur adipiscing elit,</p>
									<span>Price: <b>$24.5</b></span>
									<a href="cart-page.html">Add to Cart <i class="fa fa-shopping-cart"></i></a>
								</div>
							</div>
							<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 single-shop-item">
								<img class="img-responsive" src="assets/images/shop/8.jpg" alt="">
								<div class="meta">
									<h4>Invest Bonds</h4>
									<p>Lorem ipsum dolor sit amet, con sectetur adipiscing elit,</p>
									<span>Price: <b>$24.5</b></span>
									<a href="cart-page.html">Add to Cart <i class="fa fa-shopping-cart"></i></a>
								</div>
							</div>
							<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 single-shop-item">
								<img class="img-responsive" src="assets/images/shop/9.jpg" alt="">
								<div class="meta">
									<h4>Invest Bonds</h4>
									<p>Lorem ipsum dolor sit amet, con sectetur adipiscing elit,</p>
									<span>Price: <b>$24.5</b></span>
									<a href="cart-page.html">Add to Cart <i class="fa fa-shopping-cart"></i></a>
								</div>
							</div>
						</div>
					</div> <!-- /.product-details-page-content -->
					<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 pull-left left_side pdr5"> 
						<h4>Search</h4>
						<form action="#">
							<input type="text" placeholder="Enter Search Keywords">
							<button type="submit"><span class="icon icon-Search"></span></button>
						</form>
						<h4>Categories</h4>
						<ul class="p0 category_item">
							<li><a href=""><i class="fa fa-angle-right"></i>&nbsp;&nbsp;&nbsp;&nbsp;Financial Investment</a></li>
							<li><a href=""><i class="fa fa-angle-right"></i>&nbsp;&nbsp;&nbsp;&nbsp;Company Growth</a></li>
							<li><a href=""><i class="fa fa-angle-right"></i>&nbsp;&nbsp;&nbsp;&nbsp;Taxes and Accounting</a></li>
							<li><a href=""><i class="fa fa-angle-right"></i>&nbsp;&nbsp;&nbsp;&nbsp;Financial modeling and planning</a></li>
							<li><a href=""><i class="fa fa-angle-right"></i>&nbsp;&nbsp;&nbsp;&nbsp;Profits & Wealth</a></li>
							<li><a href="" class="bottom_item"><i class="fa fa-angle-right"></i>&nbsp;&nbsp;&nbsp;&nbsp;Investments in Bonds</a></li>
						</ul>
						<h4>New Products</h4>
						<div class="row single_product_item">
							<div class="col-lg-5">
								<img src="assets/images/product/1.jpg" alt="images">
							</div>
							<div class="col-lg-7">
								<p>Neque porro quisqua mest qui dolorem.</p>
								<a href="">more info</a>
							</div>
						</div>
						<div class="row single_product_item">
							<div class="col-lg-5">
								<img src="assets/images/product/1.jpg" alt="images">
							</div>
							<div class="col-lg-7">
								<p>Neque porro quisqua mest qui dolorem.</p>
								<a href="">more info</a>
							</div>
						</div>
						<div class="row single_product_item">
							<div class="col-lg-5">
								<img src="assets/images/product/1.jpg" alt="images">
							</div>
							<div class="col-lg-7">
								<p>Neque porro quisqua mest qui dolorem.</p>
								<a href="">more info</a>
							</div>
						</div>
						<a href="" class="brochure"><img class="img-responsive" src="assets/images/product/2.jpg" alt="image"></a>
						<a href="" class="free_shipping"><img class="img-responsive" src="assets/images/product/3.jpg" alt="image"></a>
					</div> <!-- End left side -->
				</div>
			</div>
		</section>

<!-- =================== Product Details============ -->

<!-- ============ free consultation ================ -->
		<section class="container-fluid consultation">
			<div class="container">
				<p>If you have any querry for related investment  ... We are available</p>
				<a href="">Contact us <i class="fa fa-arrow-circle-right"></i></a>
			</div>
		</section> <!-- End consultation -->
<!-- ============ /free consultation ================ -->

@stop