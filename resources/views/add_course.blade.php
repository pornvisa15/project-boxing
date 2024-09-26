<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>เพิ่มโปรแกรมการสอน</title>
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
            <li><a href="admin">จัดการโปรแกรมการสอน</a></li>
            <li><a href="admin_teacher">จัดการผู้สอน</a></li>
            <li><a href="#">ออกจากระบบ</a></li>
        </ul>
    </div>

    <section class="white-box">
        <div class="container box-item">
            <h1 class="text-center">เพิ่มโปรแกรมการสอน</h1>
            <form action="{{ route('courses.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                    <label for="course_name" class="form-label">ชื่อโปรแกรมการสอน</label>
                    <input type="text" class="form-control" id="course_name" name="course_name">
                </div>
                <div class="mb-3">
                    <label for="course_category" class="form-label">ประเภทโปรแกรมการสอน</label>
                    <select class="form-select" id="course_category" name="course_category">
                        <option value="" disabled selected>กรุณาเลือกประเภท</option>
                        <option value="คอร์สมวยไทยสากล">ศิลปะการป้องกันตัวแบบไทย</option>ฮ
                        <option value="คอร์สมวยไทยลดน้ำหนัก">โปรแกรมมวยไทยเอ็กซ์ตรีม</option>
                        <option value="คอร์สมวยไทยป้องกันตัว">โปรแกรมสร้างสมรรถภาพและพละกำลัง</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="course_duration" class="form-label">ชั่วโมงเรียน</label>
                    <select class="form-select" id="course_duration" name="course_duration">
                        <option value="" disabled selected>กรุณาเลือกชั่วโมงเรียน</option>
                        <option value="1">1 ชั่วโมง</option>
                        <option value="2">2 ชั่วโมง</option>
                        <option value="3">3 ชั่วโมง</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="course_details" class="form-label">รายละเอียดเพิ่มเติม</label>
                    <textarea class="form-control" id="course_details" name="course_details" rows="4"></textarea>
                </div>
                <div class="mb-3">
                    <label for="course_price" class="form-label">ราคา</label>
                    <input type="number" class="form-control" id="course_price" name="course_price">
                </div>
                <div class="mb-3">
                    <label for="course_teacher" class="form-label">ครูผู้สอน</label>
                    <input type="text" class="form-control" id="course_teacher" name="course_teacher">
                </div>
                <div class="mb-3">
                    <label for="course_begin" class="form-label">วันที่เริ่ม</label>
                    <input type="date" class="form-control" id="course_begin" name="course_begin">
                </div>
                <div class="mb-3">
                    <label for="course_stop" class="form-label">วันที่จบ</label>
                    <input type="date" class="form-control" id="course_stop" name="course_stop">
                </div>
                <div class="mb-3">
                    <label for="course_image" class="form-label">ไฟล์รูปภาพ</label>
                    <input type="file" class="form-control" id="course_image" name="course_image" accept="image/*">
                    @error('course_image')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>

                <button type="submit" class="btn-custom">บันทึก</button>
                <a href="admin" class="btn-custom btn-custom-danger">ยกเลิก</a>
            </form>
        </div>
    </section>
</body>

</html>
