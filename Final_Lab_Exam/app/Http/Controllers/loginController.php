<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\User;

class loginController extends Controller
{
    public function index()
    {
        return view('login.index');
    }

    public function verify(Request $req)
    {

        //$req->session()->put('username', 'alamin');
        //$req->session()->put('email', 'alamin@gmail.com');
        //$email = $req->session()->get('email');
        //$req->session()->forget('email');
        //$req->session()->flush();
        //$req->session()->has('email');
        //$req->session()->pull('email');

        /*$req->session()->flash('msg', 'invalid username/password');
        $req->session()->flash('error', 'invalid request');
        $msg = $req->session()->get('msg');
        $req->session()->keep('msg');
        $req->session()->reflash();
        $msg1 = $req->session()->get('msg');*/

        //$user = User::all();
        $user  = User::where('username', $req->username)
            ->where('password', $req->password)
            ->get();

        /* $user = DB::table('user_table')
                    ->where('username', $req->username)
                    ->where('password', $req->password)
                    ->get();*/

        // echo $user;
        // echo $user[0]['username'];
        // echo $user['password'];
        // echo $user['type'];



        if (count($user) > 0) {
            // echo $user['type'];
            $req->session()->put('username', $req->username);
            $req->session()->put('type', $user[0]['type']);
            if ($user[0]['type'] == 'Admin') {
                return redirect('/home');
            } else {
                return redirect('/employee_home');
            }
        } else {
            $req->session()->flash('msg', 'invalid username/password');
            return redirect('/login');
        }
    }
}
