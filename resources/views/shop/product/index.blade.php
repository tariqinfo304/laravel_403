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
					<a href="{{ URL('shop/product/create')}}"><button class="btn btn-primary">Add Product</button></a>
				</div>
				<br/>
				
						<div class="row">
							<table class="table table-bordered table-dark">
							  <thead>
							    <tr>
							      <th scope="col">#</th>
							      <th scope="col">Name</th>
							      <th scope="col">Description</th>
							      <th scope="col">Price</th>
							      <th scope="col">Label</th>
							      <th scope="col">Action</th>
							    </tr>
							  </thead>
							  <tbody>
								@foreach( $list as $row )
								      
								    
									    <tr>
									      <th scope="row">{{ $row->id_value }}</th>
									      <td>{{ $row->name }}</td>
									      <td>{{ $row->description}}</td>
									      <td>{{ $row->price}}</td>
									      <td>{{ $row->label}}</td>
									      <td>
									      	<a>
									      	<i style="cursor:pointer;" class="fa fa-remove" aria-hidden="true"></i>
									      </a>

									      	&nbsp;
									      	
									      	<a href="{{ URL('shop/product/'.$row->id_value.'/edit')}}">
									      		<i style="cursor:pointer;" class="fa fa-edit" aria-hidden="true"></i>
									      	</a>
									      </td>
									    </tr>

								@endforeach
							 </tbody>
							</table>
					</div>
			</div>
		</section>
@endsection