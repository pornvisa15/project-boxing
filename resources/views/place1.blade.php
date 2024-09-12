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
        .white-box  {
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
            flex-direction: column;
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
            flex-direction: column;
            align-items: center;
            justify-content: center;
            width: 100%;
        }
        .center {
            align-items: center;
        }

        .text-left {
            flex: 1;
            text-align: left;
            margin-bottom: 20px;
        }
        .white-space {
            text-align: center;
            margin-bottom: 30px;
            background-color: #ffffff;
            margin: 10px auto;
            border-radius: 10px;
        }
        .white-space h5 {
            white-space: pre;
            text-align: center;
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
        /* Button Styles */
        .hero-btn, .blog-btn, .blod-title {
            display: inline-block;
            padding: 10px 20px;
            margin: 10px 0;
            text-decoration: none;
            border-radius: 5px;
            color: white;
            background-color: #c49564;
            transition: background-color 0.3s ease;
        }
        .hero-btn:hover, .blog-btn:hover, .blod-title:hover {
            background-color: #8f6d4a;
        }
        /* Remove underline from navbar links */
        .navbar a {
            text-decoration: none;
        }


        .white-box {
    width: 100%;
    padding: 20px;
}

.content-container {
    display: flex;
    align-items: center; /* จัดให้องค์ประกอบอยู่ในแนวตั้งตรงกลาง */
    justify-content: space-between; /* เว้นระยะห่างระหว่างรูปภาพกับข้อความ */
    gap: 20px; /* ระยะห่างระหว่างรูปภาพและข้อความ */
}

.box-item {
    flex: 1; /* รูปภาพครอบครองพื้นที่ครึ่งหนึ่งของหน้าจอ */
    max-width: 50%;
}

.box-item img {
    width: 100%; /* ให้รูปภาพขยายเต็ม container */
    height: auto; /* รักษาสัดส่วนของภาพ */
}

.text-container {
    flex: 1; /* ข้อความครอบครองพื้นที่ครึ่งหนึ่งของหน้าจอ */
    padding-left: 20px; /* เพิ่มระยะห่างทางซ้ายของข้อความ */
}

.hero-btn {
    display: inline-block;
    margin-top: 10px;
    padding: 10px 20px;
    background-color: #007bff;
    color: white;
    text-decoration: none;
    border-radius: 5px;
}

.hero-btn:hover {
    background-color: #0056b3;
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
        <a href="#ติดต่อเรา">ติดต่อเรา</a>
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
                <h3>หน้าค่ายมวย</h3>
            </div>
        </div>
    </div>
</section>






<!-- New White Box Section -->
<section class="white-box">
    <div class="white-space">
    <div class="content-container">
        <div class="box-item">
            <img src="{{('assets/9.jpg')}}" alt="">
        </div>
        
        <div class="text-container">
            <p>หน้าค่ายมวย "ลานนาวอเตอร์ไซด์" จะมีป้ายค่ายขนาดใหญ่ที่โดดเด่นเพื่อให้ผู้มาเยี่ยมชมสังเกตเห็นได้ง่าย ภายในบริเวณหน้าค่ายยังมีร้านอาหารตามสั่ง</p>
            <h5><a href="place" class="hero-btn">กลับ</a></h5>
        </div>
    </div>
    </div>
</section>








<section class="contact-info">
    <div class="container">
        <h2>ติดต่อเรา</h2>
        <p><strong>ที่อยู่:</strong> <a href="https://maps.app.goo.gl/nSyjQjgojQYG2BLo6">สนามมวยลานนา โฮมสเตย์&เรสเตอร์รอง</a></p>
        <p><strong>โทรศัพท์:</strong> <a href="#">+684 247 9665</a></p>
        <p><strong>Facebook:</strong> <a href="https://www.facebook.com/profile.php?id=100063753060493">ค่ายมวยลานนาวอเตอร์ไซด์</a></p>
    </div>
</section>
</body>
</html>
