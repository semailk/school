<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\View\View;

class BlogController extends Controller
{
    public function blog(): View
    {
        $news = Blog::query()->paginate(6);
        return view('blog', [
            'news' => $news
        ]);
    }

    public function getNew(){
        $new = Blog::find(preg_replace('/[^0-9]/', '', request()->getQueryString()));

        return \view('newShow', [
            'new' => $new
        ]);
    }
}
