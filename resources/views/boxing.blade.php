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
        .hero {
            text-align: justify;
        }
        .white-box {
            background-color: #7ba5e4;
            padding: 20px;
            margin: 50px auto;
            width: 50%;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
        .box-item {
            display: flex; /* จัดเลย์เอาต์ด้วย Flexbox */
            align-items: center;
            gap: 20px;
            background-color: #ffffff;
        }

        .box-item img {
            width: 30%; /* ปรับขนาดรูปภาพ */
            height: auto;
        }
        .box-item h4 {
            flex: 1; /* ให้เนื้อหาขยายพื้นที่มากกว่า */
            text-align: left;
        }

        /* Button Styles */
        .hero-btn {
            display: inline-block;
            padding: 10px 20px;
            margin: 10px 0;
            text-decoration: none;
            border-radius: 5px;
            color: white; /* สีข้อความ */
            background-color: #c49564; /* สีพื้นหลังปุ่ม */
            transition: background-color 0.3s ease; /* เอฟเฟกต์เมื่อโฮเวอร์ */
        }
        .hero-btn:hover {
            background-color: #8f6d4a; /* เปลี่ยนสีปุ่มเมื่อโฮเวอร์ */
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
        <div>
            <h3>ท่าหมัดตรง</h3>
            <h4>การใช้หมัด มวยไทยมีหลายหลายรูปแบบ เช่น หมัดชกนำ หมัดชกตาม เป็นต้น ซึ่งทั้งหมดสามารถประยุกต์ใช้ตามแต่ละสถานการณ์ที่เผชิญขณะชกกับคู่ต่อสู้ ศิลปะการใช้หมัด...</h4>
            <p><a href="boxing1" class="hero-btn">รายละเอียดเพิ่มเติม</a></p>
        </div>
</div>
</section>

<section class="white-box">
    <div class="box-item">
        <img src="{{('assets/5.jpg')}}" alt="">
        <div>
            <h3>ท่าหมัดเสย</h3>
            <h4>หมัดเสยหรือหมัดสอยดาว หมัดที่ชกโดยข้อศอก เกร็งข้อศอกและหงายหมัดขึ้นวิถีของหมัดจะออกจากด้านล่างสู่ด้านบน ทำมุมฉากกับพื้นใช้ได้ดีเมื่อเป้าหมายอยู่ใกล้ตัว...</h4>
            <p><a href="boxing2" class="hero-btn">รายละเอียดเพิ่มเติม</a></p>
        </div>
    </div>
</section>

<section class="white-box">
    <div class="box-item">
        <img src="{{('assets/6.jpg')}}" alt="">
        <div>
            <h3>ท่าเข่าเฉียง</h3>
            <h4>ข่าเฉียงคือการตีเข่าที่มีวิถีการตีเฉียงขึ้นจากจุดตั้งต้นของเข่าไปยังตำแหน่งที่เข่าปะทะเป้าหมาย ถ้าตีเข่าซ้าย จะเฉียงมากระทบเป้าด้านขวา ตีเข่าขวาจะเฉียงมากระทบเป้าด้านซ้าย ถ้าคู่ชกเข้ามาตรง ๆ เข่าเฉียงจะถูกเป้าที่โคนขาและลำตัวด้านข้าง...</h4>
            <p><a href="boxing3" class="hero-btn">รายละเอียดเพิ่มเติม</a></p>
        </div>
    </div>
</section>
<section class="white-box">
    <div class="box-item">
        <img src="{{('assets/7.jpg')}}" alt="">
        <div>
            <h3>ท่าศอกงัด</h3>
            <h4>ศอกงัด คือ เป็นศอก ที่ใช้ตีเสยขึ้น โดยการงัดขึ้นตรง ๆ หรือบางครั้ง อาจเฉียงเล็กน้อย การงัดให้ย่อตัวลง เพื่อที่จะ ใช้แรงส่งจากเท้า ใช้เมื่อคู่ต่อสู้ จะเข้ามาจับคอตีเข่า ให้ใช้ศอกงัด เข้าที่เป้าหมาย คือ ปลายคางของ คู่ต่อสู้...</h4>
            <p><a href="boxing4" class="hero-btn">รายละเอียดเพิ่มเติม</a></p>
        </div>
    </div>
</section>
<section class="white-box">
    <div class="box-item">
        <img src="{{('assets/8.jpg')}}" alt="">
        <div>
            <h3>เตะตัด</h3>
            <h4>การเตะตัด ลักษณะการเตะตัด เป็นการเตะให้เท้าขนานไปกับพื้นโดยทั่วไปจะใช้เท้าหลังเป็นเท้าเตะเหวี่ยงขาทั้งท่อนขึ้นและให้งอเข่ามากกว่าเตะเฉียงเล็กน้อยบิดให้สันแข้งเข้าหาเป้าหมายถ้าจะให้รุนแรงจะต้องสืบเท้าเข้าไปก่อนแล้วเหวี่ยงเท้าโดยใช้แรงจากสะโพกให้มาก เมื่อเตะพลาดเป้าหมาย ห้ามหมุนตัวเพื่อจะเปิดโอกาสให้คู่ต่อสู้กระท าการโต้ตอบ...</h4>
            <p><a href="boxing5" class="hero-btn">รายละเอียดเพิ่มเติม</a></p>
        </div>
    </div>
</section>

<!-- Footer -->
<section class="contact-info">
    <div class="container">
        <h2>ติดต่อเรา</h2>
        <p><strong>ที่อยู่:</strong> <a href="https://maps.app.goo.gl/nSyjQjgojQYG2BLo6">สนามมวยลานนา โฮมสเตย์&เรสเตอร์รอง ตำบล ควนมะพร้าว เมือง พัทลุง 93000</a></p>
        <p><strong>โทรศัพท์:</strong> <a href="#">+684 247 9665</a></p>
        <p><strong>Facebook:</strong> <a href="https://www.facebook.com/profile.php?id=100063753060493">ค่ายมวยลานนาวอเตอร์ไซด์</a></p>
    </div>
</section>
</body>
</html>
