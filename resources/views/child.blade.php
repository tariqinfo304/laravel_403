@extends("layout")

@section("title")
	Child Page
@endsection



@section("header")
	
	<p>It's a child header</p>
	@parent

@endsection


@section("footer")
@endsection