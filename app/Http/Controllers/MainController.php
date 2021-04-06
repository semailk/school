<?php

namespace App\Http\Controllers;

use App\Models\Account;
use App\Models\Blog;
use App\Models\Contact;
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
        $accounts = Account::all();
        $lastNews = collect(Blog::query()->orderBy('id', 'desc')->take(3)->get()->reverse());
        return view('index', [
            'accounts' => $accounts,
            'lastNews' => $lastNews
        ]);
    }

    public function teacher()
    {
        return \view('teacher');
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

    public function contactUsSave(Request $request)
    {
        Contact::query()->create([
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'phone' => $request->phone,
            'message' => $request->message
        ]);

        return redirect()->back()->with(['success' => 'Mesajınız çatdırıldı']);
    }
}
