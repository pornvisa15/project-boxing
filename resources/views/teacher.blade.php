<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ทีมงาน</title>
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
            padding: 20px;
            margin: 50px auto;
            width: 50%;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            display: flex;
            justify-content: space-between;
            align-items: flex-start;
            gap: 20px;
            font-size: 1.5rem;
        }
        .box-item div {
    flex: 1; /* ทำให้ข้อความขยายเต็มพื้นที่ที่เหลือ */
}

        .white-box .box-item {
            display: flex;
    flex-direction: row; /* จัดวางในแนวนอน */
    justify-content: flex-start; /* จัดให้อยู่ทางซ้าย */
    align-items: center; /* จัดให้อยู่ตรงกลางในแนวดิ่ง */
    background-color: #ffffff;
    padding: 20px;
    text-align: left; /* จัดข้อความให้อยู่ทางซ้าย */
    border-radius: 5px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    min-height: 200px; /* กำหนดความสูงขั้นต่ำ */
    gap: 20px; /* เว้นช่องว่างระหว่างรูปภาพและเนื้อหา */
        }

        .header .navbar a:hover,
        .box-item .hero-btn:hover {
            color: #ffd700;
        }

        .box-item img {
           width: 150px; /* ปรับขนาดรูปภาพ */
    height: 150px;
    object-fit: cover; /* ทำให้รูปภาพไม่บิดเบี้ยว */
    margin: 0; /* ลบการจัดกึ่งกลาง */
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
                <h3>ทีมงาน</h3>
            </div>
        </div>
    </div>
</section>

<!-- New White Box Section with three horizontal items -->
<section class="white-box">
    <div class="box-item">
        <img src="{{('assets/34.jpg')}}" alt="">
        <div>
        <h4>ชื่อ-นามสกุล</h4>
        <p>นายสุวิชัย แซ่ตั้น</p>
        <h4>ผลงาน</h4>
        <p> เป็นหัวหน้าค่ายและเทรนเนอร์ มาตั้งแต่ตอนเปิดค่าย มาคนเดียวเด็กได้เเชมป์หลาย ชมรมและสมาคมภาคใต้อย่างต่อเนื่อง ต่อมายักมวยเริ่มมากขึ้น ต้องเพิ่มเทรนเนอร์ขึ้นมาอีก</p>
    </div>
    </div>
</section>
<section class="white-box">
    <div class="box-item">
        <img src="{{('assets/35.jpg')}}" alt="">
        <div>
        <h4>ชื่อ-นามสกุล</h4>
        <p>นันทวัฒน์ พรหมวงศ์</p>
        <h4>ผลงาน</h4>
        <p>ช่วยกันเทรนนักมวยทุกคนสลับสับเปลี่ยนกันตามกำลัง จนมีแชมป์แห่งประเทศไทยและแชมป์เวทีมาตรฐานสยาอ้อมน้อยพร้อมกันทั้ง 2 เส้น</p>
    </div>
    </div>
</section>
    <section class="white-box">
    <div class="box-item">
        <img src="{{('assets/36.jpg')}}" alt="">
        <div>
        <h4>ชื่อ-นามสกุล</h4>
        <p>นายไกรวัฒน์ กนูสุวรรณ</p>
        <h4>ผลงาน</h4>
        <p>เป็นเทรนเนอร์ ผ่านการอบรม C-Line sean ช่วยสอนและดูแลนักมวยตามกฏกติกาของค่าย และต้องออกอบรมเพิ่มเติมเกี่ยวกับ พรบ.มวย</p>
    </div>
    </div>
</section>

<section class="contact-info">
    <div class="container">
        <h2>ติดต่อเรา</h2>
        <p><strong>ที่อยู่:</strong> <a href="https://maps.app.goo.gl/nSyjQjgojQYG2BLo6">สนามมวยลานนา โฮมสเตย์&เรสเตอร์รอง ตำบล ควนมะพร้าว เมือง พัทลุง 93000</a></p>
        <p><strong>โทรศัพท์:</strong> <a href="#">+684 247 9665</a></p>
        <p><strong>Facebook:</strong> <a href="https://www.facebook.com/profile.php?id=100063753060493">เพจ: ค่ายมวยลานนาวอเตอร์ไซด์</a></p>
    </div>
    </div>
</section>
</body>
</html>
