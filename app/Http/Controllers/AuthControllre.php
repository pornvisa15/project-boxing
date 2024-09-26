<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Teachers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB; // เพิ่มบรรทัดนี้

class AuthControllre extends Controller
{

    public function index()
    {
        // $datauser = DB::table('teachers')->get();
        // foreach ($datauser as $user) {
        //     // แฮชรหัสผ่าน (แน่ใจว่ามีค่า $user->password)
        //     $hashedPassword = Hash::make($user->password);

        //     // อัพเดตรหัสผ่านที่แฮชแล้วกลับไปยังฐานข้อมูล
        //     DB::table('teachers')
        //         ->where('id', $user->id) // ใช้ ID หรือคอลัมน์ที่เป็นเอกลักษณ์ในการอัพเดต
        //         ->update(['password' => $hashedPassword]);
        // }


      return view('login'  );
    }


    public function login(Request $request)
    {
        // ขั้นตอนแรก: ตรวจสอบข้อมูลที่ผู้ใช้กรอก
        $credentials = $request->validate([
            'teacher_name' => 'required|string',
            'password' => 'required|string',
        ]);

        // ขั้นตอนที่สอง: พยายามล็อกอินด้วยข้อมูลที่ตรวจสอบแล้ว
        if (Auth::attempt($credentials)) {
            // ตรวจสอบบทบาทของผู้ใช้
            $user = Auth::user();

            // สมมติว่าคุณมีคอลัมน์ 'role' ในฐานข้อมูลเพื่อกำหนดบทบาทผู้ใช้
            if ($user->teacher_name === 'suwichai') {
                return redirect('admin'); // เส้นทางสำหรับ admin
            } else {
                return redirect('admin_teacher'); // เส้นทางสำหรับผู้สอน
            }
        }

        // หากล็อกอินไม่สำเร็จ
        return redirect()->route('loginpages')->withErrors([
            'login_error' => 'ข้อมูลผิดพลาด',
        ]);
    }




    // ฟังก์ชันออกจากระบบ
    public function logout(Request $request)
    {
        Auth::logout();

        return redirect()->route('loginpages')->withErrors([
            'message' => 'ออกจากระบบสำเร็จ',
        ]);


    }


}

