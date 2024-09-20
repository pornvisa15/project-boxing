<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
    @vite('resources/css/app.css')
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: "Poppins", sans-serif;
        }

        body {
            background: #f1f3f5;
            min-height: 100vh;
            display: flex;
            flex-direction: row;
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

        .main-content {
            margin-left: 200px;
            padding: 50px 20px;
            flex-grow: 1;
        }

        .admin-header {
            text-align: center;
            color: #4a658e;
            margin-bottom: 30px;
        }

        .admin-header h1 {
            font-size: 42px;
            font-weight: 700;
        }

        .wrapper {
            width: 100%;
            background: #fff;
            border-radius: 10px;
            padding: 30px;
            box-shadow: 0 8px 32px rgba(0, 0, 0, 0.1);
            margin-bottom: 50px;
        }

        .box-item {
            margin: 30px 0;
        }

        .box-item p {
            font-size: 18px;
        }

        .hero-btn {
            display: inline-block;
            padding: 0px 10px;
            font-size: 15px;
            color: #fff;
            background-color: #15d746;
            text-decoration: none;
            border-radius: 30px;
            transition: all 0.3s ease;
            margin: 5px;
            text-align: center;
            line-height: 30px;
        }

        .hero-btn i {
            font-size: 18px;
            /* Adjust size as needed */
        }

        .hero-btn:hover {
            background-color: #ffd700;
            color: #fff;
        }

        .table {
            width: 100%;
            border-collapse: collapse;
            margin: 30px 0;
        }

        .table th,
        .table td {
            padding: 12px 15px;
            border: 1px solid #ddd;
            text-align: left;
        }

        .table th {
            background-color: #7ba5e4;
            color: #fff;
            font-weight: bold;
        }

        .table tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        .action-icons i {
            margin-right: 10px;
            cursor: pointer;
            color: #4a658e;
        }

        .action-icons i:hover {
            color: #ffd700;
        }

        .footer {
            text-align: center;
            padding: 20px;
            background-color: #4a658e;
            color: white;
            position: fixed;
            bottom: 0;
            left: 200px;
            width: calc(100% - 200px);
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
    <div class="main-content">
        <div class="admin-header">
            <h1>Admin</h1>
        </div>

        <div class="wrapper">
            <h2>โปรแกรมการสอน</h2>
            <table class="table">
                <thead>
                    <tr>
                        <th>ชื่อโปรแกรมการสอน</th>
                        <th>ประเภทโปรแกรมการสอน</th>
                        <th>ชั่วโมงเรียน</th>
                        <th>รายละเอียดเพิ่มเติม</th>
                        <th>ราคา</th>
                        <th>ครูผู้สอน</th>
                        <th>วันที่เริ่ม</th>
                        <th>วันที่จบ</th>
                        <th>ไฟล์รูปภาพ</th>
                        <th>แก้ไข ลบ</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        @foreach ($courses as $course)
                    <tr>
                        <td></td>
                        <td>{{ $course->course_name }}</td>
                        <td>{{ $course->course_category }}</td>
                        <td>{{ $course->course_duration }}</td>
                        <td>{{ $course->course_other }}</td>
                        <td>{{ $course->course_price }}</td>
                        <td>{{ $course->course_teacher }}</td>
                        <td>{{ $course->course_begin }}</td>
                        <td>{{ $course->course_stop }}</td>
                        <td class="action-icons">
                            <i class="fas fa-edit"></i>
                            <i class="fas fa-trash"></i>
                        </td>

                    </tr>
                    @endforeach
                    </tr>

                </tbody>
            </table>
            <p><a href="add_course" class="hero-btn">เพิ่ม</a></p>
        </div>
    </div>
</body>

</html>
