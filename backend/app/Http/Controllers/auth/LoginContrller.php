<?php

namespace App\Http\Controllers\auth;

use App\Http\Controllers\Controller;
use App\Models\mod;
use App\Models\Student;
use Illuminate\Http\Request;

class LoginContrller extends Controller
{
    public function login(Request $request)
    {
        if(session()->has('id')){
            return to_route('student.home');

        }
        else{
            $validated = $request->validate([
                'id_student' => 'required',
                'password' => 'required ',
            ]);
            $user = Student::select('student_id','user_type')->
            where('stu_registrationNumber', $request['id_student'])
            ->where('stu_password', $request['password'])->first();
            if ($user) {
                session()->put('id',$user['student_id']);
                session()->put('isLoggedIn',1);
                session('role',$user['user_type']);
                return to_route('student.home');
            }
            else {
            }
        }
        
    }
    public function alogin()
    {
        return view('auth.admin');
    }
    public function mod(Request $request) //admin Login function
    {
        $validated = $request->validate([
            'username' => 'required',
            'password' => 'required ',
        ]);
       $user= mod::select('role')
       ->where('username',$request['username'])
       ->where('password',$request['password'])->first();
        if($user)
        {
            if($user['role']=="admin")
            {
                if ($user) {
                    // session()->put('id',$user['mod_id']);
                    // session()->put('isLoggedIn',1);
                    // session('role',$user['role']);
                    // echo $user['role'];
                    // return to_route('student.home');
                    echo $user['role'];
                }
            }
            else{
                return to_route('admin.login')->with('msg','You don`t have access to this page');
                // echo "";
            }
        }
        else {
            return to_route('admin.login')->with('msg','Username & Password is incorrect');

        }
    }
}
