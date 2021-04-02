<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;

class MainController extends Controller
{
    /**
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|View
     */
    public function index()
    {
        return view('index');
    }

    public function about()
    {
        return view('about');
    }

    public function teacher()
    {
        return \view('teacher');
    }

    public function courses()
    {
        return \view('courses');
    }

    public function pricing()
    {
        return \view('pricing');
    }

    public function contactUs()
    {
        return \view('contact');
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->back();
    }
}
