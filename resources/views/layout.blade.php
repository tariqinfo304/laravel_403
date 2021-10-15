<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>@yield("title","Home Page")</title>
</head>
<body>

	@section("header")
		<p>Parent View Header</p>
	@show

	@section("body")
		<p>Parent View Body</p>
	@show


	@section("footer")
		<p>Parent View Footer</p>
	@show
</body>
</html>