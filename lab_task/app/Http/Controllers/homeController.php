<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class homeController extends Controller
{
	public function index()
	{

		/*	$user = ['name'=> 'alamin', 'id'=>12];
    	return view('home.index', $user);*/

		/*
    	$name = 'alamin';
    	$id = 33;
    	$cgpa = 4;
    	return view('home.index', compact('name', 'id', 'cgpa'));*/

		/*	return view('home.index')
    			->with('name', 'alamin')
    			->with('id', '66');*/

		/*return view('home.index')
    			->withName('alamin')
    			->withId('66');*/

		/*$v = view('home.index');
    	$v->withName('alamin');
    	$v->withId('12');
    	return $v;*/

		return view('home.index');
	}

	public function stdlist()
	{
		$students = $this->getStudentlist();
		return view('home.stdlist')->with('students', $students);
	}

	public function details($id)
	{
		$students = $this->getStudentlist();
		for ($i = 0; $i < count($students); $i++) {
			if ($students[$i]['id'] == $id) {
				$info = [];
				array_push($info, $students[$i]);
			}
		}
		return view('home.details')->with('students', $info);
		//return view('home.details');
	}

	public function create($request)
	{

		//return view('home.create');
	}

	public function insert()
	{

		//return view('home.create');
	}

	public function edit($id)
	{
		$students = $this->getStudentlist();
		for ($i = 0; $i < count($students); $i++) {
			if ($students[$i]['id'] == $id) {
				$info = [];
				array_push($info, $students[$i]);
			}
		}
		return view('home.edit')->with('students', $info);
	}

	public function update(Request $req, $id)
	{
		$students = $this->getStudentlist();
		for ($i = 0; $i < count($students); $i++) {
			if ($students[$i]['id'] == $id) {
				$students[$i]['id'] = $req->id;
				$students[$i]['name'] = $req->name;
				$students[$i]['cgpa'] = $req->cgpa;
				$students[$i]['email'] = $req->email;
			}
		}
		return view('home.stdlist')->with('students', $students);
		//return redirect()->route('stdlist')->with('students', $students);
	}

	public function delete($id)
	{
		$students = $this->getStudentlist();
		for ($i = 0; $i < count($students); $i++) {
			if ($students[$i]['id'] == $id) {
				$info = [];
				array_push($info, $students[$i]);
			}
		}
		return view('home.delete')->with('students', $info);
	}
	public function destroy($id)
	{
	}

	private function getStudentlist()
	{

		return [
			['id' => 1, 'name' => 'alamin', 'cgpa' => 1.2, 'email' => 'alamin@aiub.edu'],
			['id' => 2, 'name' => 'CYZ', 'cgpa' => 2.2, 'email' => 'CYZ@aiub.edu'],
			['id' => 3, 'name' => 'XYZ', 'cgpa' => 3.2, 'email' => 'XYZ@aiub.edu'],
			['id' => 4, 'name' => 'ABC', 'cgpa' => 3.4, 'email' => 'ABC@aiub.edu'],
			['id' => 5, 'name' => 'PQE', 'cgpa' => 3.6, 'email' => 'PQE@aiub.edu'],
			['id' => 6, 'name' => 'PQR', 'cgpa' => 4, 'email' => 'PQR@aiub.edu'],
			['id' => 7, 'name' => 'asd', 'cgpa' => 2.5, 'email' => 'asd@aiub.edu']
		];
	}
}
