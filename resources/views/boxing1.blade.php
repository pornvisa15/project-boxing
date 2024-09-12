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
        .box-item{
           background-color: #ffffff;
        }
        .white-box .box-item {
            display: flex;
    flex-direction: row; /* จัดวางในแนวนอน */
    justify-content: flex-start; /* จัดให้อยู่ทางซ้าย */
    align-items: center; /* จัดให้อยู่ตรงกลางในแนวดิ่ง */

    padding: 20px;
    text-align: left; /* จัดข้อความให้อยู่ทางซ้าย */
    border-radius: 5px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    min-height: 200px; /* กำหนดความสูงขั้นต่ำ */
    gap: 20px; /* เว้นช่องว่างระหว่างรูปภาพและเนื้อหา */
        }

        .white-box p {
            text-align: center;

        }
        .header .navbar a:hover,
        .box-item .hero-btn:hover {
            color: #ffd700;
        }
        .white-box {
        background-color: #ffffff; background-color: #7ba5e4;
        padding: 30px;
        margin: 100px auto;
        width: 80%;
        border-radius: 10px;
        box-shadow: 0 4px 8px rgb(255, 255, 255);
        display: flex;
        flex-direction: column; /* Stack text and images vertically */
        font-size: 1.5rem;
        }
         .box-item .box img {
            padding: 20px;
            width: 30%;
            display: block;
    margin-left: auto;
    margin-right: auto;
}

        .text-center p {
            margin: 3rem 0;

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

    margin-bottom: 30px; /* Space between text and buttons */
    font-size: 1.2 rem;
    text-align: left;
}

            .white-space h3 {
    font-size: 1.75rem; /* ปรับขนาดฟอนต์ตามต้องการ */
    font-weight: bold; /* กำหนดความหนาของตัวอักษร */
    margin-top: 20px; /* เพิ่มระยะห่างด้านบน */
    margin-bottom: 20px; /* เพิ่มระยะห่างด้านล่าง */
    color: #333; /* สีตัวอักษร */
}

.white-space1 {
    display: flex; /* ใช้ Flexbox สำหรับการจัดเรียง */
    justify-content: center; /* จัดให้เนื้อหาอยู่ตรงกลางแนวนอน */
    align-items: center; /* จัดให้เนื้อหาอยู่ตรงกลางแนวตั้ง */
    gap: 20px; /* เว้นระยะห่างระหว่างรูปภาพ */
    margin: 20px 0; /* ระยะห่างด้านบนและด้านล่าง */
}

.white-space1 img {
    width: 15%; /* ปรับขนาดของรูปภาพตามต้องการ */
    margin: 8; /* ลบ margin เพื่อลดช่องว่าง */
}



.white-box p, .text-center p {
    text-align: left; /* เปลี่ยนจาก center เป็น left */
    margin: 3rem 0;
    text-indent: 50px;
    font-size: 1.7rem;
}

.hero, .white-space, .box-item, .text-center {
    text-align: left; /* ให้ทุกอย่างจัดเรียงทางซ้าย */
}



        .box-item {
            display: flex;
            align-items: center;
            justify-content: space-between;
            width: 100%;
        }
        .box-item img {
            padding: 20px;
            width: 50%;
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
        .hero-btn {

           align-items: center;
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

        <div class="box-item">

            <img src="{{('assets/11.jpg')}}" alt="">
            <!-- Center Text -->

            <div class="white-space">


                <p>การใช้หมัด มวยไทยมีหลายหลายรูปแบบ เช่น หมัดชกนำ หมัดชกตาม เป็นต้น ซึ่งทั้งหมดสามารถประยุกต์ใช้ตามแต่ละสถานการณ์ที่เผชิญขณะชกกับคู่ต่อสู้ศิลปะการใช้หมัด ภายในเล่มจะนำเสนอ การใช้หมัดของมวยไทยหลากหลายรูปแบบ</p>
                <h3>หมัดตรงชกนำ</h3>
                <p>หมัดตรงชกนำหรือหมัดตรงหน้าใช้โจมตีเป้าหมายในระยะประชิด อาศัยการถ่ายน้ำหนักตัวจากเท้าหลังมายังเท้าหน้า ส่งแรงไปยังลำตัวถึงหัวไหล่ ไปยังหมัดหน้าเพื่อเพิ่มความรุนแรงของการปะทะ เมื่อชกไปแล้วน้ำหนักตัวของเราจะอยู่ที่เท้าหน้า</p>



            </div>

        </div>

<div class="box-item">
<div class="white-space">



                <h3>หมัดรงชกตาม</h3>
                <p>เป็นการชกหมัดที่อยู่ด้านหลังของเราตรงไปยังเป้าหมาย อาศัยแรงส่งจากเท้ามายังลำตัวจนถึงหัวไหล่ส่งตรงไปที่หมัดเพื่อปะทะเป้าหมาย เมื่อชกไปแล้วไหล่ ลำตัวและเอวจะบิดคว่ำลง</p>



            </div>
            <img src="{{('assets/12.jpg')}}" alt="">
            <!-- Center Text -->



        </div>
        <div class="box-item">

            <img src="{{('assets/13.jpg')}}" alt="">
            <!-- Center Text -->

            <div class="white-space">



               <p>รวมไปถึงสะโพกน้ำหนักตัวจะอยู่ที่เท้าหน้าโดยส่วนใหญ่หมัดตรงชกตามจะมีความหนักหน่วงและรุนแรงสร้างความเสียหายให้กับคู่ต่อสู้มากกว่าหมัดตรงชกนำ</p>





</div>

</section>

<div class="white-space1">
<img src="{{('assets/4.jpg')}}" alt="">
<img src="{{('assets/q4.jpg')}}" alt="">

</div>
<div class="white-space1">
<a href="boxing" class="hero-btn">กลับ</a>
</div>
<div class="white-space1">
<a href="https://youtu.be/h9_GSLd3SMc?si=wRxfJCCIswHCxEcd" class="link-success link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover">ข้อมูลเพิ่มเติม</a>
<a href="https://youtu.be/rFb9GZy2xsc" class="link-success link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover">คลิปท่าหมัดตรง </a>

</div>

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
