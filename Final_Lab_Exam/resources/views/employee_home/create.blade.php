@extends('layout/navbar')


@section('title')
Create Employee
@endsection

@section('head')
Create New Employee
@endsection


@section('content')
		<form method="post" enctype="multipart/form-data">

			<input type="hidden" name="_token" value="{{csrf_token()}}">
			<fieldset>
				<legend>Create User</legend>
			<table>
				<tr>
					<td>Name</td>
					<td><input type="text" name="name" value="{{old('name')}}"></td>
				</tr>
				<tr>
					<td>Title</td>
					<td><input type="password" name="title" value="{{old('title')}}"></td>
				</tr>
				<tr>
					<td>Location Name</td>
					<td><input type="text" name="location" value="{{old('location')}}"></td>
				</tr>
				<tr>
					<td>Salary</td>
					<td><input type="text" name="salary" value="{{old('salary')}}"></td>
				</tr>
				
				
				<tr>
					<td></td>
					<td><input type="submit" name="submit" value="Submit"></td>
				</tr>
			</table>
			</fieldset>
		</form>

		@foreach($errors->all() as $err)
			{{$err}} <br>
		@endforeach

@endsection