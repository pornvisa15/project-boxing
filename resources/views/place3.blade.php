<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>หน้ายิม</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    @vite('resources/css/app.css')
    <style>
        .hero {
            text-align: justify;
        }

        .white-box {
            text-align: center;
        }

        .header .navbar a:hover,
        .box-item .hero-btn:hover {}

        /* Style for white-box class */
        .white-box {
            background-color: #ffffff;
            padding: 20px;
            margin: 50px auto;
            max-width: 1200px;
            /* กำหนดความกว้างสูงสุดของกล่อง */
            border-radius: 10px;
            display: flex;
            flex-direction: column;
            font-size: 1.5rem;
            box-shadow: 0 2px 4px rgba(0, 102, 204, 0.7);
        }



        .text-container {
            text-align: center;
            /* จัดข้อความให้ชิดกลาง */
            padding-right: 100px;
            padding-left: 90px;
            ลดระยะห่างทางซ้าย display: flex;
        }

        .text-container p {
            text-indent: 20px;
            /* เพิ่มระยะห่างวรรคหน้า */
        }

        .content-container {
            display: flex;
            justify-content: space-between;
            align-items: center;
            gap: 20px;
            margin: 20px 0;
        }

        .content-container1 {
            display: flex;
            justify-content: space-between;
            align-items: center;
            gap: 20px;
            margin: 10px 0;
        }

        .content-container2 {
            display: flex;
            justify-content: space-between;
            align-items: center;
            gap: 20px;
            margin: 20px 0;
        }

        .box-item2 {
            position: relative;
            width: 50%;
        }

        .box-item2 img {
            width: 100%;
            height: 300px;
            object-fit: cover;
            border-radius: 5px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.15);
        }

        .box-item2 p {
            position: absolute;
            /* จัดตำแหน่งข้อความให้อยู่ภายในรูปภาพ */
            bottom: 10px;
            /* ระยะห่างจากด้านล่างของรูปภาพ */
            left: 10px;
            /* ระยะห่างจากด้านซ้ายของรูปภาพ */
            margin: 0;
            /* ลบระยะห่างที่อาจมีจากพารากราฟ */
            font-size: 1.25rem;
            /* ขนาดตัวอักษร */
            color: #ffffff;
            /* สีข้อความ */
            background-color: rgba(0, 0, 0, 0.5);
            /* พื้นหลังสีดำโปร่งใสเพื่อให้ข้อความอ่านได้ง่าย */
            padding: 5px;
            /* เพิ่มระยะห่างภายใน */
            border-radius: 3px;
            /* มุมโค้งของพื้นหลังข้อความ */
        }




        .box-item {
            flex: 1;
            max-width: 50%;
            display: flex;
            justify-content: center;
        }


        .box-item img {
            width: 100%;
            height: 350px;
            /* กำหนดความสูงของรูปภาพเป็น 200px */
            object-fit: cover;
            border-radius: 5px;
            /* มุมโค้งของรูปภาพ */
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.15);

        }




        .text-container3 {
            flex: 0.5;
            padding-left: 10px;
            text-align: center;
            max-width: 520px;
            margin: 0 auto;
        }


        .text-center p {
            text-align: center;
            margin-bottom: 2rem;

        }

        .text-box {
            text-align: center;
            margin-bottom: 1rem;
            margin-top: 20px;
        }

        .text-box h7 {
            font-size: 30px;
            font-weight: bold;
            margin: 0;
            text-indent: 50px;
            text-align: center;
            color: #000000;

        }




        .white-space {
            display: flex;
            flex-direction: column;
            gap: 2rem;

        }


        .white-space h5 {
            white-space: pre;
            text-align: center;
            margin-top: 20px;
        }

        .white-space h3 {
            font-size: 2rem;
            font-weight: bold;
            margin-top: 20px;
            margin-bottom: 20px;
            color: #333;
            text-align: center;
        }

        .video-link {
            display: flex;
            align-items: center;
            text-decoration: none;
            position: relative;
            text-decoration: none;
        }

        .video-link img {
            width: 100%;
            height: 335px;
            object-fit: cover;
            border-radius: 5px;
            margin-right: 10px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.15);
        }

        .video-link p {
            position: absolute;
            bottom: 10px;
            left: 10px;
            margin: 0;
            font-size: 1.25rem;
            color: #ffffff;
            background-color: rgba(0, 0, 0, 0.5);
            padding: 5px;
            border-radius: 3px;
            text-align: center;
        }



        .hero-btn {
            display: inline-block;
            margin-top: 10px;
            padding: 10px 20px;
            background-color: #007bff;
            color: white;
            text-decoration: none;
            border-radius: 5px;
            font-weight: bold;
        }

        .hero-btn:hover {
            background-color: #0056b3;
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
            background-color: #c49564;
            transition: background-color 0.3s ease;
        }

        .hero-btn:hover,
        .blog-btn:hover,
        .blod-title:hover {
            background-color: #8f6d4a;
        }


        .navbar a {
            text-decoration: none;
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
                    <h3>Welcome to Lan Na Water Side!</h3>
                </div>
            </div>
        </div>
    </section>





    <!-- New White Box Section -->
    <section class="white-box">
        <div class="text-box">
            <h7>Gym</h7>
        </div>
        <div class="white-space">

            <div class="content-container">
                <div class="box-item">
                    <img src="{{ 'assets/55.jpg' }}" alt="">
                </div>
                <div class="text-container3">
                    <h3>ส่วนของยิม</h3>
                    <p> ยิมของเรามีอุปกรณ์ออกกำลังกาย ช่วยเพิ่มความแข็งแกร่งและความทนทานของร่างกาย
                        โดยมีอุปกรณ์ครบครันสำหรับการฝึกซ้อมที่มีประสิทธิภาพ.
                    </p>
                </div>
            </div>


            <div class="content-container">

                <div class="text-container">
                    <h3>ส่วนกลางลานยิม</h3>
                    <p>ในส่วนภายในของยิมประกอบด้วยเครื่องออกกำลังกายที่หลากหลาย
                        เพื่อรองรับการฝึกซ้อมของนักมวยและผู้ใช้งาน โดยมีอุปกรณ์ที่สำคัญ ได้แก่
                        อุปกรณ์สำหรับการฝึกซ้อมมวย อุปกรณ์ป้องกันต่าง ๆ ดัมเบลที่มีหลายขนาดให้เลือกใช้
                        และอุปกรณ์ออกกำลังกายไฟฟ้าหลายชนิด</p>

                    <p>ในส่วนภายในของยิมประกอบด้วยเครื่องออกกำลังกายที่หลากหลาย
                        เพื่อรองรับการฝึกซ้อมของนักมวยและผู้ใช้งาน โดยมีอุปกรณ์ที่สำคัญ ได้แก่
                        อุปกรณ์สำหรับการฝึกซ้อมมวย อุปกรณ์ป้องกันต่าง ๆ ดัมเบลที่มีหลายขนาดให้เลือกใช้
                        และอุปกรณ์ออกกำลังกายไฟฟ้าหลายชนิด
                        กระสอบทรายเป็นอุปกรณ์ที่ใช้ในการฝึกซ้อมเพื่อเสริมสร้างความแข็งแรงและความทนทานของกล้ามเนื้อ
                        รวมถึงการปรับสมดุลและความคล่องตัวของร่างกาย
                        การฝึกซ้อมด้วยกระสอบทรายช่วยเพิ่มประสิทธิภาพในการเตะและต่อย ซึ่งเป็นทักษะที่สำคัญในการชกมวย</p>

                    <p>นอกจากนี้ การออกกำลังกายยังมีบทบาทสำคัญในการเตรียมร่างกายให้พร้อมสำหรับการแข่งขัน
                        โดยช่วยฟื้นฟูร่างกายหลังการฝึกซ้อมหนัก ลดความเหนื่อยล้า
                        และช่วยให้ร่างกายกลับสู่สภาวะปกติอย่างรวดเร็ว
                        การใช้เครื่องออกกำลังกายที่หลากหลายและเหมาะสมจึงเป็นการส่งเสริมการฝึกซ้อมให้มีประสิทธิภาพและได้รับผลลัพธ์ที่ดีต่อร่างกายและทักษะการชกมวย
                    </p>
                </div>


            </div>







            <div class="content-container1">

                <a href="https://youtu.be/JFrRCNKd2XY" class="video-link">
                    <img src="{{ 'assets/54.jpg' }}" alt="Video Thumbnail 2">
                    <p>คลิปส่วนของยิม</p>
                </a>
                <a href="https://www.jetts.co.th/5-%E0%B8%97%E0%B9%88%E0%B8%B2%E0%B8%AD%E0%B8%AD%E0%B8%81%E0%B8%81%E0%B8%B3%E0%B8%A5%E0%B8%B1%E0%B8%87%E0%B8%81%E0%B8%B2%E0%B8%A2%E0%B8%AA%E0%B9%84%E0%B8%95%E0%B8%A5%E0%B9%8C%E0%B8%99%E0%B8%B1%E0%B8%81/"
                    class="video-link">
                    <img src="{{ 'assets/s9.jpg' }}" alt="Video Thumbnail 1">
                    <p>ข้อมูลเพิ่มเติม</p>
                </a>

            </div>



            <div class="content-container2">
                <div class="box-item2">
                    <img src="{{ 'assets/s7.jpg' }}" alt="">
                    <p>AR ส่วนของยิม</p>
                </div>
                <div class="box-item2">
                    <img src="{{ 'assets/q8.png' }}" alt="">
                    <p>สแกน QR Code เพื่อดู AR</p>
                </div>

            </div>
            {{--

            <div class="text-container">
                <h5><a href="place" class="hero-btn">กลับ</a></h5>
            </div> --}}

        </div>

        </div>
    </section>







    <section class="contact-info">
        <div class="container">
            <h2>ติดต่อเรา</h2>
            <p><strong>ที่อยู่:</strong> <a href="https://maps.app.goo.gl/nSyjQjgojQYG2BLo6">สนามมวยลานนา
                    โฮมสเตย์&เรสเตอร์รอง</a></p>
            <p><strong>โทรศัพท์:</strong> <a href="#">+684 247 9665</a></p>
            <p><strong>Facebook:</strong> <a
                    href="https://www.facebook.com/profile.php?id=100063753060493">ค่ายมวยลานนาวอเตอร์ไซด์</a></p>
        </div>
    </section>
</body>

</html>
