<?php

namespace App\Http\Controllers\student;

use App\Http\Controllers\Controller;
use App\Models\Attendance;
use App\Models\Student;
use Attribute;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index()
    {
        $data = Student::join('attendance', 'student.student_id', '=', 'attendance.sid')
            ->paginate(1);
        $status =   $this->checkAttendance();
        // echo $this->checkAttendance()   ;
        echo $status;
        // return view('dashboard/.index', compact('data'))->with('status',$status);
    }
    public function logout()
    {
        session()->flush();
        return to_route('user.LoginPage');
    }
    public function attendance(Request $request)
    {
        if ($this->checkAttendance() == 1) {
            echo "U have Submiitted your attendance";
        }
    }

    public function checkAttendance()
    {

        $status = null;
        $attendance = Attendance::where('sid', session('id'))
            ->orderBy('aid', 'DESC')
            ->first();
        $today_date = now()->format('y-m-d');

        if ($attendance['updated_at']->format('y-m-d') != $today_date || $today_date == null) {
            return 0;
        } else {
            return 1;
        }
    }
}
