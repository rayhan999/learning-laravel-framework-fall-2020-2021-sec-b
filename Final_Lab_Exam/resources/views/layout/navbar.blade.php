@extends('layout/main')



@section('navbar')

<a href="{{route('home.index')}}"> Home</a> | 
<a href="{{route('home.create')}}"> Create New Employee</a> | 
<a href="{{route('home.employeelist')}}"> Employee List</a> | 
<a href="/logout"> logout</a> 


@endsection