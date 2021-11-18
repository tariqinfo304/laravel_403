@extends("shop.layout.layout")

@section("title")
	Login 
@endsection

@section("body")

		<!-- End Breadcrumbs -->
				<!-- Product Style -->
		<section class="product-area shop-sidebar shop section">
			<div class="container">
				<div class="row">
					
					<form method="POST" action="{{ URL('login') }}">


						@csrf()
						 <div class="form-group">
						    <label for="exampleFormControlInput1">Username</label>
						    <input type="email" class="form-control"
						    value="{{ old('username') }}" placeholder="Enter Username" name="username"
						    />

						    @error("username")
						    	<p class="alert alert-danger">{{ $message}}</p>
						    @enderror
						  </div>
						  <div class="form-group">
						    <label for="exampleFormControlInput1">Password</label>
						    <input type="password" class="form-control" placeholder="Enter Password" name="password"
						    />

						    @error("password")
						    	<p class="alert alert-danger">{{ $message}}</p>
						    @enderror
						  </div>
						  

						   <div class="form-group">

						   			<input type="submit" class="form-control" value="Login"/>

						   </div>

					</form>			
				</div>
			</div>
		</section>
@endsection