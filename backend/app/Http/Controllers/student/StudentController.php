<?php

namespace App\Http\Controllers\student;

use App\Http\Controllers\Controller;
use App\Models\Attendance;
use App\Models\Student;
use Attribute;
use Dflydev\DotAccessData\Data;
use Illuminate\Http\Request;

class StudentController extends Controller
{

    public function index()

    {
        session()->put('isSubmiited', 0);
        if (session()->has('isLoggedIn') == 1) {

            $data = Student::join('attendance', 'student.student_id', '=', 'attendance.sid')
                ->paginate(15);

            // fetching the attendance of a particular user using session id
            $attendance = Attendance::where('sid', session('id'))
                ->orderBy('aid', 'DESC')
                ->first();

            $today_date = now()->format('y-m-d');

            // checking the attendance is null or not 
            if ($attendance == null || $attendance['updated_at']->format('y-m-d') != $today_date) {
                session()->put('isSubmitted', 0);
            } else {
                session()->put('isSubmitted', 1);
            }
            // echo $status;
            return view('dashboard.index')->with(compact('data'));
            // return to_route('student.home');
        } else {
            return to_route('user.LoginPage');
        }
    }
    public function logout()
    {
        session()->flush();
        return to_route('user.LoginPage');
    }
    public function attendance(Request $request)
    {
        $attendance = Attendance::where('sid', session('id'))
            ->orderBy('aid', 'DESC')
            ->first();

        $today_date = now()->format('y-m-d');

        // checking the attendance is null or not 
        if ($attendance == null || $attendance['updated_at']->format('y-m-d') != $today_date) {

            $newad = new Attendance;
            $newad->sid = session('id');
            $newad->dob = $today_date;
            $newad->status = 1;
            $newad->save();
            return to_route('student.home')->with('status', 1);
        }
        // } else {
        //     return to_route('student.home')->with('msg', "Already Submiitted the Attendance");
        // }
    }
    public function addStudentView()
    {
        return view('dashboard.addStudent');
    }
    public function addstudent(Request $request)
    {
        echo "<pre>";
        print_r($request->all());
        $data = Student::where('stu_RegistrationNumber', $request['sid'])->first();
        if ($data == null) {
            $stu = new Student;
            $stu->user_type = "student";
            $stu->name = $request['name'];
            $stu->stu_phone = $request['phone'];
            $stu->stu_email = $request['email'];
            $stu->stu_RegistrationNumber = $request['sid'];
            $stu->branch = $request['branch'];
            $stu->section = $request['sec'];
            $stu->year_from = $request['cyear'];
            $stu->current_year = $request['cyear'];
            $stu->current_sem = 1;
            $stu->year_too = $request['lyear'];
            $stu->stu_dob = $request['dob'];
            $stu->stu_password = $request['pass'];
            $stu->save();
        } else {
            return to_route('add-student')->with('msg', 'Student is Already Registered');
        }
    }
}
