<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>หน้าแรก</title>
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
   @vite('resources/css/app.css')
   <style>
      .hero{
    background-color: #7ba5e4;
    text-align: justify;
    
        }
    .white-box {
        background-color: #7ba5e4; /* สีพื้นหลังของ white-box */
        padding: 80px; /* ระยะห่างภายใน */
        margin: 50px auto; /* ระยะห่างด้านบนและด้านล่าง, จัดตรงกลางในแนวนอน */
        width: 60%; /* ความกว้าง */
        border-radius: 10px; /* มุมโค้ง */
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); /* เงา */
        display: flex; /* ใช้ Flexbox */
        flex-direction: column; /* จัดเนื้อหาในแนวตั้ง */
        align-items: center; จัดให้อยู่ตรงกลางในแนวนอน
        font-size: 1.7rem; /* ขนาดฟอนต์ */
    }
    
    .header .navbar a:hover,
        .box-item .hero-btn:hover {
            color: #ffd700;
        }
    body {
        /* text-align: center; */
        font-family: Arial, sans-serif; /* กำหนดฟอนต์ */
        margin: 0;
        padding: 0;
        }

    
    .navbar a {
            text-decoration: none;
            color: inherit;
        }
    .white-box {
        display: flex;
        justify-content: center; /* จัดให้อยู่ตรงกลางในแนวนอน */
        padding: 40px;
}



    .white-space {
        display: flex; /* ใช้ Flexbox */
        flex-direction: column; /* จัดเนื้อหาในแนวตั้ง */
        align-items: center; /* จัดให้อยู่ตรงกลางในแนวนอน */
        /* text-align: center; จัดข้อความให้อยู่ตรงกลาง */
        background-color: white; /* สีพื้นหลังของ white-space */
        padding: 50px; /* เพิ่มระยะห่างภายใน */
        border-radius: 5px; /* มุมโค้ง */
        max-width: 800px; /* ความกว้างสูงสุด */
        text-indent: 40px; 
    }
    .white-space h1 {
    margin-top: 0.5px; /* เพิ่มระยะห่างด้านบนของข้อความ */
    margin-bottom: 20px; /* เพิ่มระยะห่างด้านล่างของข้อความ */
    font-size: 30px; /* ขนาดตัวอักษร */
    line-height: 1.5; 
    font-weight: bold;/* ระยะห่างระหว่างบรรทัด */
    }

    .white-space p {
    margin-top: 20px; /* เพิ่มระยะห่างด้านบนของข้อความ */
    margin-bottom: 20px; /* เพิ่มระยะห่างด้านล่างของข้อความ */
    font-size: 16px; /* ขนาดตัวอักษร */
    line-height: 1.5; /* ระยะห่างระหว่างบรรทัด */
}
.white-space img {
        width: 500%; /* ขยายรูปภาพให้เต็มความกว้างของคอนเทนเนอร์ */
        max-width: 500px; /* ความกว้างสูงสุด */
        height: auto; /* ความสูงอัตโนมัติ */
        margin-bottom: 20px; /* ระยะห่างด้านล่าง */
        margin-top: 20px; /* เพิ่มระยะห่างด้านบนของข้อความ */
        margin-bottom: 30px; /* เพิ่มระยะห่างด้านล่างของข้อความ */
        font-size: 17px; /* ขนาดตัวอักษร */
        line-height: 1.5; /* ระยะห่างระหว่างบรรทัด */
    }
.white-space img:nth-of-type(2),
.white-space img:nth-of-type(3) {
    width: 300px; /* ปรับขนาดความกว้างของรูปภาพที่สองและสาม */
    height: auto; /* ให้ความสูงปรับตามสัดส่วนของรูปภาพ */
    object-fit: cover; /* ทำให้รูปภาพไม่บิดเบี้ยว */
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
             <h3>ประวัติค่ายมวยลานนาวอเตอร์ไซด์</h3>

            </div>
        </div>
    </div>
</section>








<section class="white-box">
    <div class="white-space">
        <h1></h1>
        <h2>ติดต่อเรา</h2>
        <p><strong>ที่อยู่:</strong> <a href="https://maps.app.goo.gl/nSyjQjgojQYG2BLo6" target="_blank">สนามมวยลานนา โฮมสเตย์&เรสเตอร์รอง ตำบล ควนมะพร้าว เมือง พัทลุง 93000</a></p>
        <p><strong>โทรศัพท์:</strong> <a href="tel:+6842479665">+684 247 9665</a></p>
        <p><strong>Facebook:</strong> <a href="https://www.facebook.com/profile.php?id=100063753060493" target="_blank">เพจ:ค่ายมวยลานนาวอเตอร์ไซด์</a></p>

        <!-- Embed Google Map -->
        <div class="map-container">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4021.652080911401!2d100.08384011402044!3d7.601418470237042!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x304f31c7d417cb37%3A0x4a1c97e3c5a07c4a!2z4Lix4LiU4Lih4LiL4LiT4Liw4Liy4Lii4Li14Lii4Liq!5e0!3m2!1sth!2sth!4v1697035167794!5m2!1sth!2sth" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
        </div>
    </div>              
</section>









</body>

</html>
