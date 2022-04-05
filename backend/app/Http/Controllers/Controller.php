<?php

namespace App\Http\Controllers;

use App\Models\Notice;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function logout()
    {
        if (session('role') == "admin") {
            session()->flush();
            return to_route('admin.login');
        } else {
            session()->flush();
            return to_route('user.LoginPage');
        }
    }
    public function publicNotice()
    {
        $news = Notice::get();
        if ($news) {
            return view('displayNotice')->with(compact('news'));
        } else {
            return view('displayNotice');
        }
    }
    public function createNoticeView()
    {
        $news = Notice::get();
        if ($news) {
            return view('layout.CreateNotice')->with(compact('news'));
        } else {
            return view('layout.CreateNotice');
        }
    }
    public function deleteNotice(Request $request, $notice_id)
    {
        $checknews = Notice::where('notice_id', $notice_id)->get();
        if ($checknews) {
            $checknews = Notice::where('notice_id', $notice_id);
            $checknews->delete();
            return to_route('create.notice')->with('status', 'News Deleted Successfully');
        }
    }
    public function viewnotice($id)
    {

        if ($news = Notice::where('notice_id', $id)->exists()) {
            $newsm = Notice::where('notice_id', $id)->get();
            return view('viewn')->with(compact('newsm'));
        } else {
            return to_route('public.notice')->with('status', "News not found");
        }
    }
}
