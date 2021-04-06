<?php

namespace App\Http\Controllers;

use App\Models\Gallery;
use Illuminate\Http\Request;

class GalleryController extends Controller
{
    public function gallery()
    {
        $galleries = Gallery::query()->paginate(4);

        return view('gallery', [
            'galleries' => $galleries
        ]);
    }
}
