
@if($type == 'Admin')
@extends('layout/navbar')
@elseif($type == 'Employee')
@extends('layout/employee_navbar')
@endif


@section('title')
Home Page
@endsection


@section('head')
Welcome home! {{$username}}{{$type}}
@endsection