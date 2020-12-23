<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\employee_request;
use Validator;
use App\User;
use App\employee;

class homeController extends Controller
{

    public function index(Request $req)
    {



        return view('home.index', ['username' => $req->session()->get('username'), 'type' => $req->session()->get('type')]);
    }

    public function employeelist()
    {
        //$students = $this->getStudentlist();

        $students = employee::all();
        return view('home.stdlist')->with('students', $students);
    }

    public function show($id)
    {

        $std = employee::find($id);
        return view('home.show', $std);
    }

    public function create()
    {

        return view('home.create');
    }

    public function store(employee_request $req)
    {

        $employee_create = array();
        $employee_create['employee_name'] = $req->employee_name;
        $employee_create['company_name'] = $req->company_name;
        $employee_create['contact'] = $req->contact;
        $employee_create['username'] = $req->username;
        //$employee_create['password'] = $req->password;

        $user_create = array();
        $user_create['username'] = $req->username;
        $user_create['password'] = $req->password;
        $user_create['type'] = 'Employee';
        $employee_store = DB::table('employee')->insert($employee_create);
        if ($employee_store) {
            $user_add = DB::table('user')->insert($user_create);
            if ($user_add) {

                return Redirect('/home');
            }
        }
    }

    public function edit($id)
    {

        $std = employee::find($id);
        return view('home.edit', $std);
    }

    public function update($id, Request $req)
    {

        $user = User::find($id);

        $user->username = $req->username;
        $user->password = $req->password;
        $user->type     = $req->type;
        $user->name     = $req->name;
        $user->cgpa     = $req->cgpa;
        $user->dept     = $req->dept;

        $user->save();

        return redirect()->route('home.stdlist');
    }

    public function delete()
    {

        //return view('home.stdlist');
    }

    public function destroy()
    {

        //return view('home.stdlist');
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
