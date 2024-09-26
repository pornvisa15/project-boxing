<?php

namespace App\Http\Controllers;

use App\Models\Teachers; //
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class TeachersController extends Controller
{
    // แสดงรายการครู
    public function list()
    {
        $teachers = Teachers::all();
        return view('admin_teacher', compact('teachers'));
    }

    public function detaillist()
    {
        $teachers = Teachers::all();
        return view('teacher', compact('teachers'));
    }

    // แสดงฟอร์มสร้างครูใหม่
    public function create()
    {
        return view('teachers.create');
    }


    public function store(Request $request) {
        // Log ข้อมูลที่ได้รับ
        Log::info('Course Update Request Data:', $request->all());

        // Validate ข้อมูลที่ส่งมา
        $validatedData = $request->validate([
            'teacher_name' => 'required|string|max:255',
            'teacher_surname' => 'required|string|max:255',
            'teacher_performance' => 'required|string|max:255',
            'teacher_image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'password' => 'nullable|string|min:8|confirmed', // แก้ไขเป็น required
        ]);

        // แฮชพาสเวิร์ดก่อนบันทึก

        // สร้างวัตถุใหม่ของ Teachers
        $teacher = new Teachers($validatedData);

        // อัปโหลดไฟล์ภาพ
        if ($request->hasFile('teacher_image')) {
            $teacher->teacher_image = $request->file('teacher_image')->store('images', 'public');
        }
        $validatedData['password'] = bcrypt($request->password);

        try {
            // บันทึกข้อมูลลงฐานข้อมูล
            $teacher->save();
        } catch (\Exception $e) {
            // Log ข้อผิดพลาดหากมี
            Log::error('Error saving teacher: ' . $e->getMessage());
            return back()->withErrors(['error' => 'ไม่สามารถบันทึกข้อมูลได้']);
        }

        // เปลี่ยนเส้นทางกลับไปยังหน้าที่ต้องการพร้อมกับข้อความสำเร็จ
        return redirect()->route('teachers.list')->with('success', 'Teacher created successfully.');
    }



    // แสดงข้อมูลครูที่เลือก
    public function show($id)
    {
        $teacher = Teachers::findOrFail($id);
        return view('teachers.show', compact('teacher'));
    }

    // แสดงฟอร์มแก้ไขข้อมูลครู
    public function edit($id)
    {
        $teacher = Teachers::findOrFail($id);
        return view('edit_teacher', compact('teacher'));
    }

// อัปเดตข้อมูลครู
public function update(Request $request, $id)
{
    // บันทึกข้อมูลที่ถูกส่งมา
    Log::info('Teacher Update Request Data:', $request->all());

    // ตรวจสอบข้อมูลที่ส่งมา
    $request->validate([
        'teacher_name' => 'required|string|max:255',
        'teacher_surname' => 'required|string|max:255',
        'teacher_performance' => 'required|string|max:255',
        'teacher_image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        'password' => 'nullable|string|min:8|confirmed',
    ]);

    // หา teacher ที่ต้องการแก้ไข
    $teacher = Teachers::findOrFail($id);

    // อัปเดตข้อมูลในฐานข้อมูล ยกเว้น teacher_image
    $teacher->update($request->except(['teacher_image', 'password']));

    // ตรวจสอบและอัปโหลดไฟล์รูปภาพใหม่
    if ($request->hasFile('teacher_image')) {
        $imagePath = $request->file('teacher_image')->store('images', 'public');
        $teacher->teacher_image = $imagePath;
    }



    // บันทึกข้อมูลที่อัปเดต
    $teacher->save();

    // เปลี่ยนเส้นทางกลับไปยังรายการครูพร้อมข้อความสำเร็จ
    return redirect()->route('teachers.list')->with('success', 'Teacher updated successfully.');
}


    // ลบข้อมูลครู
    public function destroy($id)
    {
        $teacher = Teachers::findOrFail($id);
        $teacher->delete();

        return redirect()->route('teachers.list')->with('success', 'Teacher deleted successfully.');
    }
}
