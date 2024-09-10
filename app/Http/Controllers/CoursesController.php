<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;

class CoursesController extends Controller
{
    /**
     * Show the login form.
     */
    public function index()
    {
        return view('login');
    }

    /**
     * Display a listing of the courses.
     */
    public function listCourses()
    {
        $courses = Course::all();
        return view('admin', compact('courses' ->$contents));
    }

    /**
     * Show the form for creating a new course.
     */
    public function create()
    {
        return view('courses.create');
    }

    /**
     * Store a newly created course in the database.
     */
    public function store(Request $request)
    {
        $request->validate([
            'course_name' => 'required',
            'course_category' => 'required',
            'course_duration' => 'required|integer',
            'course_details' => 'required',
            'course_price' => 'required|numeric',
            'course_teacher' => 'required',
            'course_begin' => 'required|date',
            'course_stop' => 'required|date',
            'course_image' => 'image|nullable',
        ]);

        $course = new Course($request->all());

        if ($request->hasFile('course_image')) {
            $imagePath = $request->file('course_image')->store('images', 'public');
            $course->course_image = $imagePath;
        }

        $course->save();

        return redirect()->route('courses.list')->with('success', 'Course added successfully.');
    }

    /**
     * Show the form for editing the specified course.
     */
    public function edit($id)
    {
        $course = Course::find($id);
        return view('courses.edit', compact('course'));
    }

    /**
     * Update the specified course in the database.
     */
    public function update(Request $request, $id)
    {
        $course = Course::find($id);
        $course->update($request->all());

        if ($request->hasFile('course_image')) {
            $imagePath = $request->file('course_image')->store('images', 'public');
            $course->course_image = $imagePath;
        }

        return redirect()->route('courses.list')->with('success', 'Course updated successfully.');
    }

    /**
     * Remove the specified course from the database.
     */
    public function destroy($id)
    {
        $course = Course::find($id);
        $course->delete();

        return redirect()->route('courses.list')->with('success', 'Course deleted successfully.');
    }
}
