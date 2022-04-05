<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Attendance;
use App\Models\Notice;
use App\Models\Student;

use function GuzzleHttp\Promise\all;

class adminController extends Controller
{
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


    // search function  

    public function search(Request $request)
    {
        $searchKey = $request['name'];
        $data = Student::where('name', 'LIKE', "%{$request['name']}%")
            ->orWhere('branch', 'LIKE', "%{$request['name']}%")
            ->get();
        try {

            if ($data) {
                return view('dashboard.search')->with(compact('data'));
            }
        } catch (\Throwable $th) {

            echo "Some issue error";
        }
    }
    public function createNotice(Request $request)
    {
        echo "<pre>";
        print_r($request->all());
        $news = new Notice;

        $news->notice = $request['notice'];
        $news->save();
        return to_route('create.notice')->with('status', 'Notice uploaded successfully');
    }
}
