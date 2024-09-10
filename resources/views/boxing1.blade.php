<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>หน้าค่ายมวย</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    @vite('resources/css/app.css')
    <style>

        .hero {
            text-align: justify;
        }
        .white-box p {
            text-align: center;
        }
        .header .navbar a:hover,
        .box-item .hero-btn:hover {
            color: #ffd700;
        }
        .white-box {
        background-color: #7ba5e4;
        padding: 20px;
        margin: 50px auto;
        width: 50%;
        border-radius: 10px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        display: flex;
        flex-direction: column; /* Stack text and images vertically */
        font-size: 1.5rem;
        }
        .text-center p {
            margin: 3rem 0;
            align-items: center;
            text-indent: 50px;
            font-size: 1rem;
        }
        .box-item {
        display: flex;
        flex-direction: column; /* Stack items vertically */
        align-items: center;
        justify-content: center;
        width: 100%;
}

.center {
    align-items: center;

}
.text-center {
    flex: 1;
    text-align: center;
    margin-bottom: 20px; /* Space between text and images */
}

.white-space {
    text-align: center;
    margin-bottom: 30px; /* Space between text and buttons */
}
        .white-space h5 {
            white-space: pre;
            text-align: center;
        }
        .white-space :left {
            text-align: left;
        }
        .box-item {
            display: flex;
            align-items: center;
            justify-content: space-between;
            width: 100%;
        }
        .box-item img {
            padding: 20px;
            width: 30%;
        }
        .text-center {
            flex: 1;
            text-align: center;
            padding: 0 20px;
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
        /* Remove underline from navbar links */
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
                <h3>ท่าหมัดตรง</h3>
            </div>
        </div>
    </div>
</section>

<!-- New White Box Section -->
<section class="white-box">
    <div class="white-space">
        <div class="box-item">
            <div class="white-space">
            <img src="{{('assets/11.jpg')}}" alt="">
            <img src="{{('assets/12.jpg')}}" alt="">

            </div>
            <!-- Center Text -->
            <div class="white-space">

                <h3>ลักษณะ</h3>
                <p>ป็นการใช้หมัดที่ถนัดมุ่งไปยังเป้าหมาย โดยอาศัยแรงจากหัวไหล่ ลำตัว และเท้ายันพื้น โดยน้ำหนักตัวอยู่ที่เท้าหน้า ใช้แรงส่งจากเท้าหลังและสะโพก หัวไหล่</p>
                <h3>ประเภท</h3>
                <p>ป็นการใช้หมัดที่ถนัดมุ่งไปยังเป้าหมาย โดยอาศัยแรงจากหัวไหล่ ลำตัว และเท้ายันพื้น โดยน้ำหนักตัวอยู่ที่เท้าหน้า ใช้แรงส่งจากเท้าหลังและสะโพก หัวไหล่</p>
                <h3>เป้าหมาย</h3>
                <p>ป็นการใช้หมัดที่ถนัดมุ่งไปยังเป้าหมาย โดยอาศัยแรงจากหัวไหล่ ลำตัว และเท้ายันพื้น โดยน้ำหนักตัวอยู่ที่เท้าหน้า ใช้แรงส่งจากเท้าหลังและสะโพก หัวไหล่</p>
                <h3>ความรุนแรง</h3>
                <p>ป็นการใช้หมัดที่ถนัดมุ่งไปยังเป้าหมาย โดยอาศัยแรงจากหัวไหล่ ลำตัว และเท้ายันพื้น โดยน้ำหนักตัวอยู่ที่เท้าหน้า ใช้แรงส่งจากเท้าหลังและสะโพก หัวไหล่</p>

                <h3>ข้อมูลเพิ่มเติม</h3>
                <p>ป็นการใช้หมัดที่ถนัดมุ่งไปยังเป้าหมาย โดยอาศัยแรงจากหัวไหล่ ลำตัว และเท้ายันพื้น โดยน้ำหนักตัวอยู่ที่เท้าหน้า ใช้แรงส่งจากเท้าหลังและสะโพก หัวไหล่</p>
            </div>

                <h3>คลิปสถานที่จริง</h3>
                <a href="https://youtu.be/rFb9GZy2xsc?si=V0JepoM6QjZoRM9G" class="link-success link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover">กดเพื่อดูคลิปวีดีโอ</a></p>
<div class="center">
                <img src="{{('assets/4.jpg')}}" alt="">

                <img src="{{('assets/18.jpg')}}" alt="">
                <h5>โมเดลท่ามวย</h5>
                <h5>สแกน QR Code</h5>
</div>
</div>
<h5><a href="place" class="hero-btn">กลับ</a></h5>
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
</section>
</body>
</html>
