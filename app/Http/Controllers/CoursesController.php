<?php

namespace App\Http\Controllers;

use App\Models\Courses;
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

    public function index2()
    {
        return view('admin');
    }


    /**
     * Display a listing of the courses.
     */
    public function listCourses()
    {
        $courses = Courses::all();


        return view('admin', compact('courses'));
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
         // ตรวจสอบข้อมูลที่ส่งมา

         dd( $request);
         $request->validate([
             'course_name' => 'required|string|max:255',
             'course_category' => 'required|string',
             'course_duration' => 'required|integer',
             'course_details' => 'required|string',
             'course_price' => 'required|numeric',
             'course_teacher' => 'required|string|max:255',
             'course_begin' => 'required|date',
             'course_stop' => 'required|date|after_or_equal:course_begin',
             'course_image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
         ]);

         // สร้างวัตถุใหม่ของ Course
         $course = new Courses($request->all());
dd( $course);
         // ตรวจสอบและเก็บไฟล์รูปภาพ
         if ($request->hasFile('course_image')) {
             $imagePath = $request->file('course_image')->store('images', 'public');
             $course->course_image = $imagePath;
         }

         // บันทึกข้อมูลลงฐานข้อมูล
         $course->save();

         // เปลี่ยนเส้นทางกลับไปยังหน้าที่ต้องการพร้อมกับข้อความสำเร็จ
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
