<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ติดต่อเรา</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    @vite('resources/css/app.css')
    <style>
        .hero {
            background-color: #7ba5e4;
            text-align: justify;
        }

        .white-box {
            background-color: #7ba5e4;
            สีฟ้าอ่อน padding: 80px;
            margin: 50px auto;
            width: 54%;
            border-radius: 10px;
            box-shadow: 0 2px 4px rgba(0, 102, 204, 0.7);
            display: flex;
            flex-direction: column;
            align-items: center;
            font-size: 1.7rem;
            /* ขนาดฟอนต์ */
            justify-content: center;
            /* จัดให้อยู่ตรงกลางในแนวตั้ง */
        }

        .hero-info h3 {
            margin-top: 0.5px;
            /* เพิ่มระยะห่างด้านบนของข้อความ */
            margin-bottom: 10px;
            /* เพิ่มระยะห่างด้านล่างของข้อความ */
            font-size: 30px;
            /* ขนาดตัวอักษร */
            line-height: 1.5;
            /* ระยะห่างระหว่างบรรทัด */
            font-weight: bold;
            /* น้ำหนักตัวอักษร */
            color: #FFFF00;
            /* สีของข้อความ */
            text-shadow: 2px 2px 4px #003366;
            margin: 20px auto;
        }

        .header .navbar a:hover,
        .box-item .hero-btn:hover {
            color: #ffd700;
        }

        body {
            /* text-align: center; */
            font-family: Arial, sans-serif;
            /* กำหนดฟอนต์ */
            margin: 0;
            padding: 0;

        }


        .navbar a {
            text-decoration: none;
            color: inherit;

        }

        .white-box {
            display: flex;
            justify-content: center;
            /* จัดให้อยู่ตรงกลางในแนวนอน */
            padding: 40px;

        }

        .white-space {
            display: flex;
            /* ใช้ Flexbox */
            flex-direction: column;
            /* จัดเนื้อหาในแนวตั้ง */
            align-items: center;
            /* จัดให้อยู่ตรงกลางในแนวนอน */
            text-align: center;
            /* จัดข้อความให้อยู่ตรงกลาง */
            background-color: white;
            /* สีพื้นหลังของ white-space */
            padding: 50px;
            /* เพิ่มระยะห่างภายใน */
            border-radius: 5px;
            /* มุมโค้ง */
            max-width: 800px;
            /* ความกว้างสูงสุด */
            text-indent: 40px;
            margin: 0 20px;
        }

        .map-container {
            margin-top: 20px;
            /* ระยะห่างด้านบน */
            display: flex;
            /* ใช้ Flexbox */
            justify-content: center;
            /* จัดให้อยู่ตรงกลางในแนวนอน */
            width: 100%;
            /* ใช้ความกว้างเต็มที่ของคอนเทนเนอร์ */
        }

        .white-box h1 {
            margin-top: 0.5px;
            /* เพิ่มระยะห่างด้านบนของข้อความ */
            margin-bottom: 10px;
            /* เพิ่มระยะห่างด้านล่างของข้อความ */
            font-size: 30px;
            /* ขนาดตัวอักษร */
            line-height: 1.5;
            /* ระยะห่างระหว่างบรรทัด */
            font-weight: bold;
            /* น้ำหนักตัวอักษร */
            color: #FFFF00;
            /* สีของข้อความ */
            text-shadow: 2px 2px 4px #003366;
            margin: 20px auto;
        }




        .white-space p {
            margin-top: 10px;
            /* เพิ่มระยะห่างด้านบนของข้อความ */
            margin-bottom: 1px;
            /* เพิ่มระยะห่างด้านล่างของข้อความ */
            font-size: 16px;
            /* ขนาดตัวอักษร */
            line-height: 1.5;
            /* ระยะห่างระหว่างบรรทัด */
        }

        .hero-info h3 {
            margin-top: 0.5px;
            /* เพิ่มระยะห่างด้านบนของข้อความ */
            margin-bottom: 10px;
            /* เพิ่มระยะห่างด้านล่างของข้อความ */
            font-size: 30px;
            /* ขนาดตัวอักษร */
            line-height: 1.5;
            /* ระยะห่างระหว่างบรรทัด */
            font-weight: bold;
            /* น้ำหนักตัวอักษร */
            color: #FFFF00;
            /* สีของข้อความ */
            text-shadow: 2px 2px 4px #003366;
            margin: 20px auto;
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
                    <h3>You can contact us!</h3>

                </div>
            </div>
        </div>
    </section>








    <section class="white-box">

        <div class="white-space">

            <p><strong>โทรศัพท์:</strong> <a href="tel:+6842479665">+684 247 9665</a></p>
            <p><strong>Facebook:</strong> <a href="https://www.facebook.com/profile.php?id=100063753060493"
                    target="_blank">เพจ:ค่ายมวยลานนาวอเตอร์ไซด์</a></p>

            <!-- Embed Google Map -->
            <div class="map-container">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3954.644904142993!2d100.10186257481658!3d7.613562492401656!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x304d6321156a4747%3A0x6f4ef14b42519684!2z4Liq4LiZ4Liy4Lih4Lih4Lin4Lii4Lil4Liy4LiZ4LiZ4LiyIOC5guC4ruC4oeC4quC5gOC4leC4ouC5jCbguYDguKPguKrguYDguJXguK3guKPguYzguKPguK3guIc!5e0!3m2!1sth!2sth!4v1726557597414!5m2!1sth!2sth"
                    width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade" width="600" height="450" style="border:0;"
                    allowfullscreen="" loading="lazy"></iframe>
            </div>

        </div>
    </section>









</body>

</html>
