<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>เพิ่มครูผู้สอน</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    @vite('resources/css/app.css')
    <style>
        .navbar a {
            text-decoration: none;
            color: #007bff;
            margin-right: 15px;

        }

        .navbar a:hover {
            color: #ffd700;
        }

        .white-box {
            padding: 100px 0;
        }

        .container {
            margin-top: 200px;
        }

        .box-item {
            background-color: #fff;
            padding: 50px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            border: 1px solid #ddd;
            max-width: 600px;
            margin: 0 auto;

        }

        .box-item h1 {
            margin-bottom: 20px;
        }

        .box-item .form-label {
            font-weight: 600;
        }

        .btn-custom {
            background-color: #007bff;
            border: none;
            color: #fff;
            padding: 4px 4px;
            border-radius: 5px;
            font-size: 14px;
            margin-right: 10px;
            text-decoration: none;
        }

        .btn-custom:hover {
            background-color: #0056b3;
        }

        .btn-custom-danger {
            background-color: #e11111;
        }

        .btn-custom-danger:hover {
            background-color: #7b1e1e;
        }

        .box-item .mb-3 {
            font-size: 1.2rem;
        }

        .header .navbar a {
            margin: 0 2rem;
            font-size: 1.7rem;
            color: rgb(0, 0, 0);
        }

        a {
            text-align: center;
            font-size: 15px;
        }

        .sidebar {
            width: 200px;
            background: #4a658e;
            color: #fff;
            min-height: 100vh;
            position: fixed;
            left: 0;
            top: 0;
            padding-top: 20px;
        }

        a {
            text-align: center;
            font-size: 15px;
        }

        .sidebar .logo {
            text-align: center;
            margin-bottom: 30px;
        }

        .sidebar .logo img {
            width: 80px;
        }


        .sidebar .navbar {
            list-style: none;
            padding: 0;
        }

        .sidebar .navbar li {
            padding: 15px 20px;
        }

        .sidebar .navbar li a {
            color: #fff;
            text-decoration: none;

        }

        .sidebar .navbar li a:hover {
            background: #ffd700;
            color: #4a658e;
            border-radius: 5px;
        }
    </style>
</head>

<body>
    <div class="sidebar">
        <div class="logo">
            <a href="#">
                <img src="{{ 'assets/17.jpg' }}" alt="Logo">
            </a>
        </div>
        <ul class="navbar">
            <li><a href="admin">ข้อมูลโปรแกรมการสอน</a></li>
            <li><a href="admin_teacher">ข้อมูลผู้สอน</a></li>
            <li><a href="#">ออกจากระบบ</a></li>
        </ul>
    </div>

    <section class="white-box">
        <div class="container box-item">
            <h1 class="text-center">แก้ไขครูผู้สอน</h1>

            <!-- ฟอร์มการแก้ไขข้อมูลผู้สอน -->
            <!-- เปลี่ยน `action` ไปยังเส้นทางสำหรับการอัปเดต และเพิ่ม `PATCH` method -->
            <form action="{{ route('teachers.update', $teacher->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT') <!-- Ensure you're using PUT method -->

                <div class="mb-3">
                    <label for="teacher_name" class="form-label">ชื่อ</label>
                    <!-- เพิ่มค่าเริ่มต้นที่มาจากข้อมูลในฐานข้อมูล -->
                    <input type="text" class="form-control" id="teacher_name" name="teacher_name"
                        value="{{ old('teacher_name', $teacher->teacher_name) }}" required>
                </div>

                <div class="mb-3">
                    <label for="teacher_surname" class="form-label">นามสกุล</label>
                    <input type="text" class="form-control" id="teacher_surname" name="teacher_surname"
                        value="{{ old('teacher_surname', $teacher->teacher_surname) }}" required>
                </div>

                <div class="mb-3">
                    <label for="teacher_performance" class="form-label">ผลงาน</label>
                    <textarea class="form-control" id="teacher_performance" name="teacher_performance" rows="4" required>{{ old('teacher_performance', $teacher->teacher_performance) }}</textarea>
                </div>

                <div class="mb-3">
                    <label for="teacher_image" class="form-label">ไฟล์รูปภาพ</label>
                    <input type="file" class="form-control" id="teacher_image" name="teacher_image" accept="image/*">
                    <!-- แสดงภาพปัจจุบันหากมี -->
                    @if ($teacher->teacher_image)
                        <p>รูปภาพปัจจุบัน:</p>
                        <img src="{{ asset('storage/' . $teacher->teacher_image) }}" alt="Teacher Image" width="150">
                    @endif
                </div>

                <!-- ปุ่มบันทึกการเปลี่ยนแปลง -->
                <button type="submit" class="btn-custom">บันทึกการเปลี่ยนแปลง</button>
                <a href="{{ route('admin_teacher') }}" class="btn-custom btn-custom-danger">ยกเลิก</a>
            </form>
        </div>
    </section>
</body>

</html>
