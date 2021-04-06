<?php

namespace App\Http\Controllers;

use App\Models\Course;

class CourseController extends Controller
{
    public function getCoursesAll()
    {
        $courses = Course::query()->paginate(6);

        return view('courses', [
            'courses' => $courses
        ]);
    }

    public function getCourse()
    {
        $new = Course::find(preg_replace('/[^0-9]/', '', request()->getQueryString()));

        return \view('newShow', [
            'new' => $new
        ]);
    }
}
