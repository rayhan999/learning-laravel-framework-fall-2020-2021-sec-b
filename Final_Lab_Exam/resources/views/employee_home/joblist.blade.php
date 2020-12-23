<!DOCTYPE html>
<html>
<head>
	<title>Student List</title>
</head>
<body>
	<a href="/home">Back</a> |
	<a href="/logout">logout</a>
	<br>

	<table border="1">
		<tr>
			<td>Id</td>
			<td>Name</td>
			<td>title Name</td>
			<td>Location Name</td>
			<td>Salary</td>
			<td>Action</td>
		</tr>

		@for($i=0; $i < count($students); $i++)

			<tr>
				<td>{{$students[$i]['id']}}</td>
				<td>{{$students[$i]['name']}}</td>
				<td>{{$students[$i]['title']}}</td>
				<td>{{$students[$i]['location']}}</td>
				<td>{{$students[$i]['salary']}}</td>
				<td>
					<a href="{{route('employee_home.edit', $students[$i]['id'])}}">Edit </a> |
					<a href="{{route('employee_home.show', $students[$i]['id'])}}">Details </a> |
					<a href="/delete/{{$students[$i]['id']}}">Delete </a> 
				</td>
			</tr>

		@endfor


	</table>
</body>
</html>