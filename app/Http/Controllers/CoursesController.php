<?php

namespace App\Http\Controllers;

use App\Models\Courses;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log; // เพิ่มการนำเข้า Log

class CoursesController extends Controller
{
    /**
     * Show the login form.
     */
    public function index()
    {
        return view('loginpages');
    }

    public function index2()
    {
        return view('admin');
    }

    public function list()
    {
        $courses = Courses::all();



        return view('course', compact('courses'));

    }

    public function show( string  $id)
    {

       $datafind = Courses::findOrFail($id);

       return view('course1', compact('datafind'));
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
         $validatedData = $request->validate([
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
         $course = new Courses($validatedData);

         // ตรวจสอบและเก็บไฟล์รูปภาพ
         if ($request->hasFile('course_image')) {
             $imagePath = $request->file('course_image')->store('images', 'public');
             $course->course_image = $imagePath;
         }

         // ตรวจสอบข้อมูลก่อนบันทึก
        //  dd($course);

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
        $course = Courses::findOrFail($id); // ค้นหาคอร์สโดย ID
        return view('edit_course', compact('course'));
    }

    /**
     * Update the specified course in the database.
     */

    public function update(Request $request, $id)
    {
        // ตรวจสอบข้อมูลที่ถูกส่งมา
        Log::info('Course Update Request Data:', $request->all());



        $request->validate([
           'course_name' => 'string|max:255',
             'course_category' => 'string',
             'course_duration' => 'integer',
             'course_other' => 'string',
             'course_price' => 'numeric',
             'course_teacher' => 'string|max:255',
             'course_begin' => 'required|date',
             'course_stop' => 'required|date|after_or_equal:course_begin',
             'course_image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        // หา course ที่ต้องการแก้ไข
        $course = Courses::findOrFail($id);

        // อัปเดตข้อมูลในฐานข้อมูล
        $course->update($request->except(['courseimage'])); // ยกเว้นไฟล์รูป

        // ตรวจสอบและอัปโหลดไฟล์รูปภาพ
        if ($request->hasFile('courseimage')) {
            $imagePath = $request->file('courseimage')->store('images', 'public');
            $course->course_image = $imagePath;
        }

        // บันทึกข้อมูลที่อัปเดต
        $course->save();

        // เปลี่ยนเส้นทางกลับไปยังรายการคอร์สพร้อมข้อความสำเร็จ
        return redirect()->route('courses.list')->with('success', 'Course updated successfully.');
    }





    /**
     * Remove the specified course from the database.
     */
    public function destroy($id)
    {
        $course = Courses::find($id); // ใช้ Courses แทน Course
        if ($course) {
            $course->delete();
            return redirect()->route('courses.list')->with('success', 'Course deleted successfully.');
        } else {
            return redirect()->route('courses.list')->with('error', 'Course not found.');
        }
    }

}
