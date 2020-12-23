<!DOCTYPE html>
<html>
<head>
	<title>Edit Page</title>
</head>
<body>
	<a href="{{route('home.index')}}">Back</a> |
	<a href="/logout">logout</a>
	<br>


		<form method="post" >

			<input type="hidden" name="_token" value="{{csrf_token()}}">
			<fieldset>
				<legend>Edit User</legend>
			<table border="1">
				<tr>
					<td>Username</td>
					<td><input type="text" name="username" value="{{$username}}"></td>
				</tr>
				{{-- <tr>
					<td>Password</td>
					<td><input type="password" name="password" value="{{$password}}"></td>
				</tr> --}}
				<tr>
					<td>Name</td>
					<td><input type="text" name="employee_name" value="{{$employee_name}}"></td>
				</tr>
				<tr>
					<td>Cgpa</td>
					<td><input type="text" name="company_name" value="{{$company_name}}"></td>
				</tr>
				<tr>
					<td>dept</td>
					<td><input type="text" name="contact" value="{{$contact}}"></td>
				</tr>
				
				<tr>
					<td></td>
					<td><input type="submit" name="submit" value="Update"></td>
				</tr>
			</table>
			</fieldset>
		</form>
</body>
</html>