<!DOCTYPE html>
<html>
<head>
	<title>delete Page</title>
</head>
<body>
	<a href="{{route('home.index')}}">Back</a> |
	<a href="/logout">logout</a>
	<br>


		<form method="post" >

			<input type="hidden" name="_token" value="{{csrf_token()}}">
			<fieldset>
				<legend>delete User</legend>
			<table border="1">
				<tr>
					<td>name</td>
					<td><input type="text" name="name" value="{{$name}}"></td>
				</tr>
				{{-- <tr>
					<td>Password</td>
					<td><input type="password" name="password" value="{{$password}}"></td>
				</tr> --}}
				<tr>
					<td>title</td>
					<td><input type="text" name="title" value="{{$title}}"></td>
				</tr>
				<tr>
					<td>location</td>
					<td><input type="text" name="location" value="{{$location}}"></td>
				</tr>
				<tr>
					<td>salary</td>
					<td><input type="text" name="salary" value="{{$salary}}"></td>
				</tr>
				
				<tr>
					<td></td>
					<td><input type="submit" name="submit" value="Delete"></td>
				</tr>
			</table>
			</fieldset>
		</form>
</body>
</html>