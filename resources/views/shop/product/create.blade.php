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
					
					@if(!empty($data) && empty($is_delete))
						<form method="POST" action="{{ URL('shop/product',$data->id_value) }}" enctype="multipart/form-data">
							@method("put")
					@elseif(!empty($is_delete))
						<form method="POST" action="{{ URL('shop/product',$data->id_value) }}" enctype="multipart/form-data"
						>
							@method("delete")
					@else
						<form method="POST" action="{{ URL('shop/product') }}" enctype="multipart/form-data">
					@endif
					




						@csrf()
						 <div class="form-group">
						    <label for="exampleFormControlInput1">Name</label>
						    <input type="text" class="form-control"value="{{ isset($data) ? $data->name : old('name') }}" placeholder="Enter Name" name="name"
{{ !empty($is_delete) ? "disabled" : "" }}

						    />

						    @error("name")
						    	<p class="alert alert-danger">{{ $message}}</p>
						    @enderror
						  </div>
						  <div class="form-group">
						    <label for="exampleFormControlInput1">Description</label>
						     <textarea class="form-control" name="description" rows="3">
						     	{{ isset($data) ? $data->description : old('description') }}
						     </textarea>
						  </div>
						  <div class="form-group">
						    <label for="exampleFormControlInput1">Price</label>
						    <input type="number"  
{{ !empty($is_delete) ? "disabled" : "" }}
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
						  
						  <div class="form-group">
						    <label for="exampleFormControlInput1">Image</label>
						    <input type="file"  class="form-control" name="image"/>
						  </div>

						   <div class="form-group">

						   		@if(!empty($data) && empty($is_delete))
						   			<input type="submit" class="form-control" value="Update Product"/>
						   		@elseif(!empty($is_delete))
						   			<input type="submit" class="form-control" value="Delete Product"/>
						   		@else
						   			<input type="submit" class="form-control" value="Save Product"/>
						   		@endif
						   		
						   </div>
					</form>			
				</div>
			</div>
		</section>
@endsection