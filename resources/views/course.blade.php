<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>โปรแกรมการสอน</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    @vite('resources/css/app.css')
    <style>
        /* CSS Styles */
        .hero {
            background-color: #7ba5e4;
            text-align: justify;
        }

        .white-box {
            background-color: #7ba5e4;
            padding: 20px;
            margin: 50px auto;
            width: 80%;
            /* Increased width for more space */
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            display: flex;
            justify-content: space-between;
            /* Space between items */
            align-items: center;
            /* Align items to center vertically */
            gap: 20px;
            /* Gap between flex items */
            font-size: 1.5rem;
        }

        .white-box .box-item {
            background-color: #ffffff;
            padding: 20px;
            flex: 1;
            /* Allow items to grow and shrink equally */
            text-align: center;
            border-radius: 5px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .header .navbar a:hover,
        .box-item .hero-btn:hover {
            color: #ffd700;
        }

        .box-item img {
            width: 100%;
            /* Set width to 100% of its container */
            max-width: 200px;
            /* Maximum width to control image size */
            margin-bottom: 20px;
            /* Margin below the image */
        }

        /* Button Styles */
        .hero-btn,
        .blog-btn,
        .blod-title {
            display: inline-block;
            padding: 10px 20px;
            margin: 10px 0;
            text-decoration: none;
            border-radius: 5px;
            color: white;
            /* Text color */
            background-color: #c49564;
            /* Button background color */
            transition: background-color 0.3s ease;
            /* Smooth transition for hover effect */
        }

        .hero-btn:hover,
        .blog-btn:hover,
        .blod-title:hover {
            background-color: #8f6d4a;
            /* Darker shade on hover */
        }

        .navbar a {
            text-decoration: none;
        }
    </style>
</head>

<body>
    <header class="header">
        <a href="#" class="logo">
            <img src="{{ 'assets/17.jpg' }}" alt="Logo">
        </a>

        <!-- First nav for "สถานที่" and "ท่ามวย" -->
        <nav class="navbar">
            <a href="welcome">หน้าแรก</a>

            <!-- Dropdown for "สถานที่" -->
            <div class="dropdown">
                <a href="#" class="dropbtn">สถานที่</a>
                <div class="dropdown-content">
                    <a href="place1">หน้าค่ายมวย</a>
                    <a href="place2">เวทีมวย</a>
                    <a href="place3">ยิม</a>
                </div>

            </div>

            <!-- Dropdown for "ท่ามวย" -->
            <div class="dropdown">
                <a href="#" class="dropbtn">ท่ามวย</a>
                <div class="dropdown-content">
                    <a href="boxing1">ท่าหมัดตรง</a>
                    <a href="boxing2">ท่าหมัดเสย</a>
                    <a href="boxing3">ท่าเข่าเฉียง</a>
                    <a href="boxing4">ท่าศอกงัด</a>
                    <a href="boxing5">ท่าแตะตัด</a>
                </div>
            </div>



            <a href="course">โปรแกรมการสอน</a>
            <a href="teacher">ทีมงาน</a>
            <a href="contact">ติดต่อเรา</a>
            <a href="loginpages">เข้าสู่ระบบ</a>
        </nav>

    </header>

    <section class="hero">
        <div class="img1">
            <img src="{{ 'assets/25.jpg' }}" alt="">
        </div>
        <div class="container">
            <div class="hero-con">
                <div class="hero-info">
                    <h3>โปรแกรมการสอน</h3>
                </div>
            </div>
        </div>
    </section>

    <!-- New White Box Section with three horizontal items -->
    <section class="white-box">


        <div class="box-item">
            @foreach ($courses as $course)
                @if ($course->course_image)
                    <img src="{{ asset('storage/' . $course->course_image) }}" alt="Image" width="50">
                @else
                    ไม่มีรูปภาพ
                @endif
                <h4>{{ $course->course_name }}</h4>
                <p>ราคา: {{ number_format($course->course_price, 2) }} บาท</p>
                <p>หมวดหมู่: {{ $course->course_category }}</p>
                <p>ระยะเวลา: {{ $course->course_duration }} วัน</p>
                <p><a href="{{ url('course1/' . $course->id) }}" class="hero-btn">รายละเอียดเพิ่มเติม</a></p>
            @endforeach
        </div>



        {{-- <div class="box-item">
            <img src="{{ 'assets/32.jpg' }}" alt="">
            <h4>คอร์สมวยไทยลดน้ำหนัก</h4>
            <p><a href="course2" class="hero-btn">รายละเอียดเพิ่มเติม</a></p>

        </div>

        <div class="box-item">
            <img src="{{ 'assets/33.jpg' }}" alt="">
            <h4>คอร์สมวยไทยป้องกันตัว</h4>
            <p><a href="course3" class="hero-btn">รายละเอียดเพิ่มเติม</a></p>

        </div> --}}
    </section>
    <section class="contact-info">
        <div class="container">
            <h2>ติดต่อเรา </h2>
            <p><strong>ที่อยู่:</strong> <a href="https://maps.app.goo.gl/nSyjQjgojQYG2BLo6">สนามมวยลานนา
                    โฮมสเตย์&เรสเตอร์รอง ตำบล ควนมะพร้าว เมือง พัทลุง 93000</a></p>
            <p><strong>โทรศัพท์:</strong> <a href="#">+684 247 9665</a></p>
            <p><strong>Facebook</strong> <a
                    href="https://www.facebook.com/profile.php?id=100063753060493">เพจ:ค่ายมวยลานนาวอเตอร์ไซด์</a></p>

        </div>
    </section>
</body>

</html>
