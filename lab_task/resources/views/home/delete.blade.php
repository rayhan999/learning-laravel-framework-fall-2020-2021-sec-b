<!DOCTYPE html>
<html>
<head>
	<title>Student List</title>
</head>
<body>
	<a href="/stdlist">Back</a> |
	<a href="/logout">logout</a>
	<br>
<form method="POST">
	<table border="1">
		<tr>
			<td>Id</td>
			<td>:</td>
			<td>{{$students[0]['id']}}</td>
			
		</tr>
		<tr>
			<td>Name</td>
			<td>:</td>
			<td>{{$students[0]['name']}}</td>
		</tr>
		<tr>
			<td>CGPA</td>
			<td>:</td>
			<td>{{$students[0]['cgpa']}}</td>
		</tr>
		<tr>
			<td>Email</td>
			<td>:</td>
			<td>{{$students[0]['email']}}</td>
		</tr>
		<tr>
            <td><input type="submit" name="delete" id="delete" value="Delete"></td>
        </tr>
    </table>
</form>
</body>
</html> 