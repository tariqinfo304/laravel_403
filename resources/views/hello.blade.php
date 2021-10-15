<h1>First Lectrue on View</h1>



@isset($name)
	<p>{{ $name }}</p>
@endisset



@empty($name)
	<p>{{ $type }}</p>
@endempty


<!--  IF condition -->


@if ( $type == "1")
	<p>Type one</p>
@else
	<p>Type Not one</p>
@endif


@if( $name == "ali")
	<p>Ali</p>
@elseif($name == "abc")
	<p>ABC</p>
@else
	<p>Not</p>
@endif



<!-- Loops -->

@php($i=0)
<ul>
@while( $i < 10 )
	
	<li>{{ $i }}</li>

	@php($i++)

@endwhile
</ul>


<ul>
@foreach($list as $row)
	
	
	<li>{{ $row }}</li>

@endforeach
</ul>

{{-- 
<ul>
@foreach($list as $row)
	
	@foreach($list as $row1)
		
		<pre>
		@php(print_r($loop))
		@php(die())
		
		<li>{{ $loop->index . " " .  $row1 }}</li>
	@endforeach

@endforeach
</ul>
--}}

<!--  Sub view -->

@include("table",["name" => "Student Data"])

<!--  IT will cehck if table1 exist then show else nothing-->

@includeIf('table1')

<!--  Conditinal rendering of view -->

@includeWhen($status,"table")









