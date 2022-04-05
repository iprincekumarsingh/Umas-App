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
   
    }
    public function stuAttendance($ra, $id, $name)
    {
        echo $ra;
    }
    public function studentData()
    {

        $studentPAttendance = Student::join('attendance', 'student.student_id', '=', 'attendance.sid')
            ->where('student_id', session('id'))
            ->get();
        return view('dashboard.student')->with(compact('studentPAttendance'));
    }
    public function profile()
    {
        if (session()->has('role') != "admin") {

            $data = Student::where('student_id', session('id'))
                ->get();
            return view('dashboard.profile')->with(compact('data'));
        } else {
        }
    }
    
}
