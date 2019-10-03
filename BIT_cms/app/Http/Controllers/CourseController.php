<?php

namespace App\Http\Controllers;

use App\Course;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CourseController extends Controller
{
    public function index()
    {
        $this->authorize('viewAny', Course::class);
        $courses = Course::all();
        return view('admin.courses.index',
            [
                'courses' => $courses
            ]);
    }

    public function create(){
        $this->authorize('create', Course::class);
        return view('admin.courses.create');
    }

    public function store(Request $request){
        $this->authorize('create', Course::class);
        $course = new Course();
        $course->name = $request->name;
        $course->description = $request->description;
        $course->save();
        return redirect()->route('courses');

    }
}
