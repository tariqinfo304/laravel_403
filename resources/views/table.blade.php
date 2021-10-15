<hr/>
<h2>{{ $name }}</h2>
<hr/>
<table border="2">
	<thead>
		<tr>
			<th>#</th>
			<th>Name</th>
		</tr>
	</thead>
	<tbody>
		@each("tr",$list,"row","empty")
	</tbody>
</table>