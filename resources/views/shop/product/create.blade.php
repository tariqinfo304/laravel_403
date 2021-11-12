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
					

					<form method="POST" action="{{ URL('shop/product') }}" enctype="multipart/form-data">



						@csrf()
						 <div class="form-group">
						    <label for="exampleFormControlInput1">Name</label>
						    <input type="text" class="form-control"

						     value="{{ isset($data) ? $data->name : old('name') }}" placeholder="Enter Name" name="name"/>

						    @error("name")
						    	<p class="alert alert-danger">{{ $message}}</p>
						    @enderror
						  </div>
						  <div class="form-group">
						    <label for="exampleFormControlInput1">Description</label>
						     <textarea class="form-control" 
						     value="{{ isset($data) ? $data->description : old('description') }}" name="description" rows="3"></textarea>
						  </div>
						  <div class="form-group">
						    <label for="exampleFormControlInput1">Price</label>
						    <input type="number"  

						   value="{{ isset($data) ? $data->price : old('price') }}" class="form-control" placeholder="Enter Price" name="price"/>
						    @error("price")
						    	<p class="alert alert-danger">{{ $message}}</p>
						    @enderror
						  </div>
						  <div class="form-group">
						    <label for="exampleFormControlInput1">Label</label>
						    <input type="text" class="form-control" 
				 value="{{ isset($data) ? $data->label : old('label') }}" placeholder="Enter Label" name="label"/> 
						  </div>
						 <!--  <div class="form-group">
						    <label for="exampleFormControlInput1">Image</label>
						    <input type="file" class="form-control" name="image"/>
						  </div> -->

						   <div class="form-group">

						   		@if(!empty($data))
						   			<input type="submit" class="form-control" value="Update Product"/>
						   		@else
						   		<input type="submit" class="form-control" value="Save Product"/>
						   		@endif
						   		
						   </div>

					</form>			
				</div>
			</div>
		</section>
@endsection