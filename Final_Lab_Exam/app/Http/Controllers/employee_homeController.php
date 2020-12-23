<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\employee_request;
use Validator;
use App\User;
use App\job;

class employee_homeController extends Controller
{
    public function index(Request $req)
    {



        return view('employee_home.index', ['username' => $req->session()->get('username'), 'type' => $req->session()->get('type')]);
    }

    public function joblist()
    {
        //$students = $this->getStudentlist();

        $students = job::all();
        return view('employee_home.joblist')->with('students', $students);
    }

    public function show($id)
    {

        $std = job::find($id);
        return view('home.show', $std);
    }

    public function create()
    {

        return view('employee_home.create');
    }

    public function store(Request $req)
    {

        $job_create = array();
        $job_create['name'] = $req->name;
        $job_create['title'] = $req->title;
        $job_create['location'] = $req->location;
        $job_create['salary'] = $req->salary;
        //$employee_create['password'] = $req->password;

        $user_create = array();
        $user_create['username'] = $req->username;
        $user_create['password'] = $req->password;
        $user_create['type'] = 'Employee';
        $employee_store = DB::table('job')->insert($job_create);
        if ($employee_store) {
            // $user_add = DB::table('user')->insert($user_create);
            // if ($user_add) {

            //     return Redirect('/home');
            // }
            return Redirect('/employee_home');
        }
    }

    public function edit($id)
    {

        $std = job::find($id);
        return view('employee_home.edit', $std);
    }

    public function update($id, Request $req)
    {

        $user = job::find($id);

        $user->name = $req->name;
        //$user->password = $req->password;
        $user->title = $req->title;
        $user->location     = $req->location;
        $user->salary     = $req->salary;

        $user->save();

        return redirect()->route('employee_home.joblist');
    }

    public function delete($id)
    {
        $std = job::find($id);
        return view('employee_home.delete', $std);
        //return view('home.stdlist');
    }

    public function destroy($id)
    {
        $user = job::find($id);
        $user->delete();
        return redirect()->route('employee_home.joblist');

        //return view('home.stdlist');
    }
    //
}
