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


    $credentials = $request->validate([
        'teacher_name' => 'required|string',
        'password' => 'required|string',
    ]);

    if (Auth::attempt($credentials)) {
        $user = Auth::user();
        // return response()->json([
        //     'message' => 'Login successful',
        //     'user' => $user,
        // ], 200);
  return  redirect('admin');
    }

    return response()->json([
        'message' => 'Invalid credentials',
    ], 401);


}


    // ฟังก์ชันออกจากระบบ
    public function logout(Request $request)
    {
        Auth::logout();

        return response()->json([
            'message' => 'Logged out successfully',
        ]);
    }


}

