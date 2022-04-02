<?php

namespace App\Http\Controllers\student;

use App\Http\Controllers\Controller;
use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index()
    {
        $data = Student::join('attendance','student.student_id','=','attendance.sid')
        ->paginate(1);
        // echo "<pre>";
        // foreach ($data as $key => $value) {
        //     echo $value ;
        // }
        return view('dashboard/.index',compact('data'));
    }
    public function logout()
    {
        session()->flush();
        return to_route('user.LoginPage');
    }
}
