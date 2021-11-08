@extends("shop.layout.layout")

@section("title")
	Product
@endsection

@section("body")

			<!-- Breadcrumbs -->
		<div class="breadcrumbs">
			<div class="container">
				<div class="row">
					<div class="col-12">
						<div class="bread-inner">
							<ul class="bread-list">
								<li><a href="{{ URL('shop') }}">Home<i class="ti-arrow-right"></i></a></li>
								<li class="active"><a href="{{ URL('shop/product') }}">Product</a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- End Breadcrumbs -->
				<!-- Product Style -->
		<section class="product-area shop-sidebar shop section">
			<div class="container">
						<div class="row">

							@foreach( $list as $row )
								      
								      <div class="col-lg-4 col-md-6 col-12">
								<div class="single-product">
									<div class="product-img">
										<a href="product-details.html">
							<img class="default-img" src="https://via.placeholder.com/550x750" alt="#">
							<img class="hover-img" src="https://via.placeholder.com/550x750" alt="#">
										</a>
										<div class="button-head">
											<div class="product-action">
												<a data-toggle="modal" data-target="#exampleModal" title="Quick View" href="#"><i class=" ti-eye"></i><span>Quick Shop</span></a>
												<a title="Wishlist" href="#"><i class=" ti-heart "></i><span>Add to Wishlist</span></a>
												<a title="Compare" href="#"><i class="ti-bar-chart-alt"></i><span>Add to Compare</span></a>
											</div>
											<div class="product-action-2">
												<a title="Add to cart" href="#">Add to cart</a>
											</div>
										</div>
									</div>
									<div class="product-content">
										<h3><a href="product-details.html">{{ $row->name }}</a></h3>
										<div class="product-price">
											<span>${{ $row->price }}</span>
										</div>
									</div>
								</div>
							</div>

							@endforeach
					</div>
			</div>
		</section>
		<!--/ End Product Style 1  -->	
@endsection