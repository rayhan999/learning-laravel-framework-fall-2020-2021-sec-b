@extends('layout/main')



@section('navbar')

<a href="{{route('employee_home.index')}}"> Home</a> | 
<a href="{{route('employee_home.create')}}"> Create New Job</a> | 
<a href="{{route('employee_home.joblist')}}"> job List</a> | 
<a href="/logout"> logout</a> 


@endsection