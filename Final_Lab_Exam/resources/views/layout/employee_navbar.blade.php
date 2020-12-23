@extends('layout/main')



@section('navbar')

<a href="{{route('home.index')}}"> Home</a> | 
<a href="{{route('home.create')}}"> Create New Job</a> | 
<a href="{{route('home.stdlist')}}"> job List</a> | 
<a href="/logout"> logout</a> 


@endsection