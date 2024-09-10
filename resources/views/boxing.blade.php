<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ท่ามวยในรูปแบบ AR</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    @vite('resources/css/app.css')
    <style>
        /* CSS Styles */
        .hero{

    text-align: justify;
        }
        .white-box {
            background-color: #7ba5e4;
            padding: 20px;
            margin: 50px auto;
            width: 50%;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            display: flex;
            align-items: center;
            justify-content: space-between;
            font-size: 1.5rem;
        }
        .header .navbar a:hover,
        .box-item .hero-btn:hover {
            color: #ffd700;
        }
        .white-box .box-item {
            background-color: #ffffff;
            padding: 20px;
            width: 100%;
            text-align: center;
            border-radius: 5px;
        }

        .box-item img {
            padding: 20px;
            width: 30%;
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
                <h3>ท่ามวยในรูปแบบ AR</h3>
            </div>
        </div>
    </div>
</section>

<!-- New White Box Section -->
<section class="white-box">
    <div class="box-item">
        <img src="{{('assets/4.jpg')}}" alt="">
        <p><a href="boxing1" class="hero-btn">ท่าหมัดตรง</a></p>

        <h4>กดเพื่อดู QR Code</h4>
    </div>
</section>

<section class="white-box">
    <div class="box-item">
        <img src="{{('assets/5.jpg')}}" alt="">
        <p><a href="boxing2" class="hero-btn">ท่าหมัดเสย</a></p>

        <h4>กดเพื่อดู QR Code</h4>
    </div>
</section>

<section class="white-box">
    <div class="box-item">
        <img src="{{('assets/6.jpg')}}" alt="">
        <p><a href="boxing3" class="hero-btn">ท่าเข่าเฉียง</a></p>

        <h4>กดเพื่อดู QR Code</h4>
    </div>
</section>
<section class="white-box">
    <div class="box-item">
        <img src="{{('assets/7.jpg')}}" alt="">
        <p><a href="boxing4" class="hero-btn">ท่าศอกงัด</a></p>

        <h4>กดเพื่อดู QR Code</h4>
    </div>
</section>
<section class="white-box">
    <div class="box-item">
        <img src="{{('assets/8.jpg')}}" alt="">
        <p><a href="boxing5" class="hero-btn">ท่าแตะตัด</a></p>

        <h4>กดเพื่อดู QR Code</h4>
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
