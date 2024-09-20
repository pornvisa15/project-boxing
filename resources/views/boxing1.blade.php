<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>หน้าท่ามวย1</title>
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
            margin-bottom: 5rem;

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
                    <h3>ท่าหมัดตรง</h3>
                </div>
            </div>
        </div>
    </section>





    <!-- New White Box Section -->
    <section class="white-box">
        <div class="text-box">
            <h7>Join us for Thai boxing training!</h7>
        </div>
        <div class="white-space">

            <div class="content-container">
                <div class="box-item">
                    <img src="{{ 'assets/13.jpg' }}" alt="">
                </div>
                <div class="text-container3">
                    <h3>หมัดมวยไทย</h3>
                    <p>หมัดเป็นอาวุธสำคัญในมวยไทย (Muay Thai) ที่ใช้บ่อยในการต่อสู้ นักมวยใช้หมัดไม่เพียงเพื่อโจมตี
                        แต่ยังมีหลากหลายรูปแบบและทิศทางเพื่อเพิ่มความหลากหลายและเทคนิคในการชก
                        การฝึกฝนเทคนิคหมัดอย่างถูกต้องจะช่วยเพิ่มประสิทธิภาพในการแข่งขันและทำให้การต่อสู้มีความน่าสนใจมากขึ้น
                    </p>
                </div>
            </div>


            <div class="content-container">

                <div class="text-container">
                    <h3>หมัดตรงหรือหมัดชกตาม</h3>
                    <p>การใช้หมัด มวยไทยมีหลายหลายรูปแบบ เช่น หมัดชกนำ หมัดชกตาม เป็นต้น
                        ซึ่งทั้งหมดสามารถประยุกต์ใช้ตามแต่ละสถานการณ์ที่เผชิญขณะชกกับคู่ต่อสู้ศิลปะการใช้หมัด
                        ภายในเล่มจะนำเสนอ การใช้หมัดของมวยไทยหลากหลายรูปแบบ</p>
                    <p>หมัดตรงชกนำหรือหมัดตรงหน้า การถ่ายน้ำหนักตัวจากเท้าหลังมายังเท้าหน้า ส่งแรงไปยังลำตัวถึงหัวไหล่
                        ไปยังหมัดหน้าเพื่อเพิ่มความรุนแรงของการปะทะ เมื่อชกไปแล้วน้ำหนักตัวของเราจะอยู่ที่เท้าหน้า</p>
                    <p>หมัดรงชกตาม เป็นการชกหมัดที่อยู่ด้านหลังของเราตรงไปยังเป้าหมาย
                        อาศัยแรงส่งจากเท้ามายังลำตัวจนถึงหัวไหล่ส่งตรงไปที่หมัดเพื่อปะทะเป้าหมาย เมื่อชกไปแล้วไหล่
                        ลำตัวและเอวจะบิดคว่ำลง
                        รวมไปถึงสะโพกน้ำหนักตัวจะอยู่ที่เท้าหน้าโดยส่วนใหญ่หมัดตรงชกตามจะมีความหนักหน่วงและรุนแรงสร้างความเสียหายให้กับคู่ต่อสู้มากกว่าหมัดตรงชกนำ
                    </p>
                    <h3>ใช้สำหรับ</h3>
                    <p>หมัดตรงเป็นการโจมตีที่มักจะพุ่งตรงไปที่เป้าหมายข้างหน้า
                        โดยเฉพาะบริเวณใบหน้ามักเล็งไปที่จมูกหรือคางเพื่อสร้างความเสียหายและทำให้คู่ต่อสู้เสียสมดุล
                        ส่วนลำตัวการชกเฉพาะบริเวณชายโครงหรือลิ้นปี่ทำให้หายใจลำบาก</p>

                    <h3>ความรุนแรง</h3>
                    <p>ความรุนแรงของหมัดนักมวยมืออาชีพสามารถสร้างแรงกระแทกได้สูงมาก
                        โดยมีการประเมินว่าแรงของหมัดนักมวยมืออาชีพสามารถสร้างแรงกระแทกได้ประมาณ 500–1,000
                        ปอนด์ต่อตารางนิ้ว (PSI) ขึ้นอยู่กับน้ำหนัก ความเร็ว และเทคนิคของนักมวยแต่ละคน</p>
                </div>
            </div>







            <div class="content-container1">

                <a href="https://youtu.be/rFb9GZy2xsc" class="video-link">
                    <img src="{{ 'assets/42.jpg' }}" alt="Video Thumbnail 2">
                    <p>คลิปท่าหมัดตรง</p>
                </a>
                <a href="https://youtu.be/h9_GSLd3SMc?si=wRxfJCCIswHCxEcd" class="video-link">
                    <img src="{{ 'assets/s1.jpg' }}" alt="Video Thumbnail 1">
                    <p>ข้อมูลเพิ่มเติม</p>
                </a>

            </div>



            <div class="content-container2">
                <div class="box-item2">
                    <img src="{{ 'assets/5.jpg' }}" alt="">
                    <p>ท่าหมัดตรง</p>
                </div>
                <div class="box-item2">
                    <img src="{{ 'assets/q1.png' }}" alt="">
                    <p>สแกน QR Code เพื่อดู AR</p>
                </div>

            </div>


            {{-- <div class="text-container">
                <h5><a href="boxing" class="hero-btn">กลับ</a></h5>
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
