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
								<li class="active"><a href="{{ URL('shop/add_book') }}">Book</a></li>
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
					
						<form id="form_submit">

						@csrf()
						 <div class="form-group">
						    <label for="exampleFormControlInput1">Name</label>
						    <input type="text" class="form-control"placeholder="Enter Name" name="name" id="name"



						    />
						    <p id="error_name"></p>
						  </div>
						  <div class="form-group">
						    <label for="exampleFormControlInput1">Price</label>
						    <input type="number" class="form-control"placeholder="Enter Price" name="price" id="price"
						    />
						  </div>

						  <input type="file" name="image" id="image"/>

						   <div class="form-group">

						   		<input type="submit" class="form-control" value="Save Book"/>
						   		
						   </div>
					</form>			
				</div>
			</div>
		</section>

		<script type="text/javascript">
			
			$("#form_submit").submit(function(e){

				e.preventDefault();
				/*
				let name = $("#name").val();
				let price = $("#price").val();

				alert(name);
				*/
				//let data = $(this).serialize();
				//let data = $("#form_submit").serialize();

				//console.log(data);

				let data = new FormData(this);

				$.ajax({

					 method: "POST",
					  url: "{{ URL('add_book') }}",
					  data: data,
					  contentType:false,
					  processData:false
				}).done( function(data){

					alert(data);

				}).error(err => {

					//err = JSON.parse(err);
					if(err.responseJSON)
					{
						let error = err.responseJSON.errors;
						if(error.name)
						{
							$("#error_name").text(error.name);
						}

					}
					

				});
			});

		</script>
@endsection