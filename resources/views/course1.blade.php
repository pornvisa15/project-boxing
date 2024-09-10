<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>คอร์สมวยไทยสากล</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    @vite('resources/css/app.css')
    <style>
        /* CSS Styles */
        .hero {
            background-color: #7ba5e4;
            text-align: justify;
        }

        .white-box {
            background-color: #7ba5e4;
            padding: 30px;
            margin: 50px auto;
            width: 80%; /* Increased width for more space */
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            font-size: 1.5rem;
        }

        .white-box .box-item {
            background-color: #ffffff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            display: flex; /* Flex container for horizontal layout */
            align-items: center; /* Center items vertically */
            gap: 20px; /* Space between image and text */
        }
        .header .navbar a:hover,
        .box-item .hero-btn:hover {
            color: #ffd700;
        }
        .box-item img {
            width: 100%; /* Set width to control image size */
            max-width: 300px; /* Maximum width for the image */
            border-radius: 5px; /* Rounded corners */
        }

        .box-item .content {
            flex: 1; /* Allow the content area to grow */
            text-align: left;
        }

        /* Button Styles */
        .hero-btn, .blog-btn, .blod-title {
            display: inline-block;
            padding: 10px 20px;
            margin: 10px 0;
            text-decoration: none;
            border-radius: 5px;
            color: white; /* Text color */
            background-color: #c49564; /* Button background color */
            transition: background-color 0.3s ease; /* Smooth transition for hover effect */
        }

        .hero-btn:hover, .blog-btn:hover, .blod-title:hover {
            background-color: #8f6d4a; /* Darker shade on hover */
        }
.box {
    text-align: center;
}


        .navbar a {
            text-decoration: none;
        }
    </style>
</head>
<body>
<header class="header">
    <a href="#" class="logo">
        <img src="{{('assets/17.jpg')}}" alt="">
    </a>
    <nav class="navbar">
        <a href="welcome">หน้าแรก</a>
        <a href="place">สถานที่</a>
        <a href="boxing">ท่ามวย</a>
        <a href="course">โปรแกรมการสอน</a>
        <a href="teacher">ทีมงาน</a>
        <a href="contact">ติดต่อเรา</a>
        <a href="loginpages">เข้าสู่ระบบ</a>
    </nav>
</header>

<section class="hero">
    <div class="img1">
        <img src="{{('assets/25.jpg')}}" alt="">
    </div>
    <div class="container">
        <div class="hero-con">
            <div class="hero-info">
                <h3>คอร์สมวยไทยสากล</h3>
            </div>
        </div>
    </div>
</section>

<!-- New White Box Section with horizontal image and content -->
<section class="white-box">
    <div class="box-item">
       <div class=" box">
        <img src="{{('assets/31.jpg')}}" alt="">
        <h4>คอร์สมวยไทยสากล</h4>
    </div>
        <div class="content">

            <h4>ระยะเวลาเรียน</h4>
            <p> 1 ชั่วโมง 30 นาที</p>
            <h4>รายละเอียด</h4>
            <p>- เริ่มต้นสอนจากพื้นฐาน ตั้งแต่การยืน การเคลื่อนไหว</p>
            <p>- สอนแบบตัวต่อตัว กับ ครูมวยสากล</p>
            <p>- ผู้ที่ต้องการฝึกชกมวยสากลแบบจริงจัง</p>
            <p>- ผู้ที่การเทคนิคการป้องกันตัวแบบ ใช้ได้จริงในสถานการณ์คับขัน</p>
            <p>- ผู้ที่ต้องการลดน้ำหนัก หรือ เพิ่มกล้ามเนื้อ เนื่องจากในคอร์สนี้ ทางครูมวยจะเน้นสอนเทคนิคการชกเป็นหลัก</p>
            <h4>ราคา</h4>
            <p> 15,000 บาท </p>
            <h4>ผู้สอน</h4>
            <p>ครูแรมโบ้</p>
            <h4>วันที่เริ่ม</h4>
            <p>1 เมษายน 2567</p>
            <h4>วันที่จบ</h4>
            <p>30 เมษายน 2567</p>


            <a href="course" class="hero-btn">กลับ</a>
        </div>
    </div>
</section>
<section class="contact-info">
    <div class="container">
        <h2>ติดต่อเรา  </h2>
        <p><strong>ที่อยู่:</strong> <a href="https://maps.app.goo.gl/nSyjQjgojQYG2BLo6">สนามมวยลานนา โฮมสเตย์&เรสเตอร์รอง ตำบล ควนมะพร้าว เมือง พัทลุง 93000</a></p>
        <p><strong>โทรศัพท์:</strong> <a href="#">+684 247 9665</a></p>
        <p><strong>Facebook</strong> <a href="https://www.facebook.com/profile.php?id=100063753060493">เพจ:ค่ายมวยลานนาวอเตอร์ไซด์</a></p>

    </div>
</section>
</body>
</html>
