@extends('layout')
@section('content')


<!-- ======= Banner ======= -->
		<section class="p0 container-fluid banner about_banner">
			<div class="about_banner_opacity">
				<div class="container">
					<div class="banner_info_about">
						<h1>Cart</h1>
						<ul>
							<li><a href="index.html">Home</a></li>
							<li><i class="fa fa-angle-right"></i></li>
							<li>Cart</li>
						</ul>
						
					</div> <!-- End Banner Info -->
				</div> <!-- End Container -->
			</div> <!-- End Banner_opacity -->
		</section> <!-- End Banner -->
<!-- ======= /Banner ======= -->

<!--======= cart-page ======-->
		<section class="cart-page">
			<div class="container">
				<div class="row">
					<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
						<table class="table cart-table">
							<thead>
								<tr>
									<th class="preview">Preview</th>
									<th class="product">Product</th>
									<th class="price">Price</th>
									<th class="quantity">Quantity</th>
									<th class="total">Total</th>
									<th class="del-item">&nbsp;</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td class="preview">
										<img src="assets/images/cart/1.jpg" alt="image">
									</td>
									<td class="product">
										Battery screwdriver
									</td>
									<td class="price">
										$25.00
									</td>
									<td class="quantity">
										<div class="select-box">
											<select>
												<option value="1">1</option>
												<option value="1">2</option>
												<option value="1">3</option>
											</select>
										</div>
									</td>
									<td class="total">
										$25.00
									</td>
									<td class="del-item">
										<i class="fa fa-close"></i>
									</td>
								</tr>
							</tbody>
						</table>
					</div>
				</div>
				<div class="row bottom-box">
					<div class="col-lg-6 col-md-6 col-sm-6 pull-left cupon-box">
						<input type="text" placeholder="Cupon Code">
						<button type="submit">Apply Cupon</button>
					</div>
					<div class="col-lg-3 col-md-6 col-sm-6 pull-right add-to-cart-wrap">
						<a href="#" class="hvr-bounce-to-right">Update Cart <i class="fa fa-shopping-cart"></i></a>
					</div>
				</div>
				<div class="cart-total-box row">
					<div class="col-lg-5 col-sm-6 col-xs-12 pull-right">
						<ul>
							<li class="cart-total">Cart Total</li>
							<li class="sub-total">Sub Total <span>$25.00</span></li>
							<li class="total">Total <span>$25.00</span></li>
							<li class="proceed-to-checkout"><a href="#">Proceed to checkout</a></li>
						</ul>
					</div>
				</div>
			</div>	
		</section>
<!--======= cart-page ======-->


<!-- ============ free consultation ================ -->
		<section class="container-fluid consultation">
			<div class="container">
				<p>If you have any querry for related investment  ... We are available</p>
				<a href="">Contact us <i class="fa fa-arrow-circle-right"></i></a>
			</div>
		</section> <!-- End consultation -->
<!-- ============ /free consultation ================ -->

@stop