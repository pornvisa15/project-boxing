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
        
        }
        /* Style for white-box class */
        .white-box {
            background-color: #ffffff;
            padding: 20px;
            margin: 50px auto;
            max-width: 1200px; /* กำหนดความกว้างสูงสุดของกล่อง */
            border-radius: 10px; 
            display: flex;
            flex-direction: column;
            font-size: 1.5rem;
            box-shadow: 0 2px 4px rgba(123, 165, 228, 0.7); 
            

        }
     

        .text-container {
            text-align: center; /* จัดข้อความให้ชิดกลาง */
            padding-right:100px;
            padding-left: 90px; ลดระยะห่างทางซ้าย
            display: flex;
        }
        .text-container p {
    text-indent: 20px; /* เพิ่มระยะห่างวรรคหน้า */
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
            position: absolute; /* จัดตำแหน่งข้อความให้อยู่ภายในรูปภาพ */
            bottom: 10px; /* ระยะห่างจากด้านล่างของรูปภาพ */
            left: 10px; /* ระยะห่างจากด้านซ้ายของรูปภาพ */
            margin: 0; /* ลบระยะห่างที่อาจมีจากพารากราฟ */
            font-size: 1.25rem; /* ขนาดตัวอักษร */
            color: #ffffff; /* สีข้อความ */
            background-color: rgba(0, 0, 0, 0.5); /* พื้นหลังสีดำโปร่งใสเพื่อให้ข้อความอ่านได้ง่าย */
            padding: 5px; /* เพิ่มระยะห่างภายใน */
            border-radius: 3px; /* มุมโค้งของพื้นหลังข้อความ */
        }



       
        .box-item {
            flex: 1; 
            max-width: 50%;
            display: flex;
            justify-content: center; 
        }

        
        .box-item img {
            width: 100%;
            height: 350px; /* กำหนดความสูงของรูปภาพเป็น 200px */
            object-fit: cover; 
            border-radius: 5px; /* มุมโค้งของรูปภาพ */
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
            height:335px; 
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
    <div class="text-box">
        <h7>Welcome to Lan Na Water Side!</h7>
    </div>
    <div class="white-space">
        
    <div class="content-container">
            <div class="box-item">
                <img src="{{('assets/56.jfif')}}" alt="">
            </div>
            <div class="text-container3">
                <h3>ยินดีต้อนรับสู่ค่ายมวยลานนาวอเตอร์ไซด์</h3>
                <p> ขอต้อนรับทุกท่านสู่ยิมของเรา ยิมของเรานั้นเปิดให้บริการแก่ชุมชน และผู้ที่สนใจเพื่อให้ทุกคนสามารถร่วมออกกำลังกายและพัฒนาทักษะได้อย่างเต็มที่
                </p>
            </div>
    </div>
   

    <div class="content-container">

            <div class="text-container">
                <h3>ส่วนด้านหน้าของค่าย</h3>
                <p>หน้าค่ายมวย "ลานนาวอเตอร์ไซด์" มีป้ายค่ายขนาดใหญ่ที่โดดเด่นเพื่อให้ผู้มาเยี่ยมชมสังเกตเห็นได้ง่าย ภายในบริเวณหน้าค่ายยังมีร้านอาหารตามสั่ง </p>
                <p>รวมถึงร้านจำหน่ายน้ำและขนม เพื่อให้บริการแก่ผู้ฝึกซ้อมในค่ายและผู้ที่มาเยือน ซึ่งเป็นช่องทางในการเพิ่มรายได้ให้กับค่ายมวยอีกทางหนึ่ง นอกจากนี้ยังมีลานจอดรถที่กว้างขวางและสะดวกสบายสำหรับผู้ที่มาใช้บริการที่ค่าย</p>
                
                <h3>บริเวณใกล้เคียงกับค่ายมวย </h3>
                <p>ยังมีร้านอาหารที่หลากหลายและน่าสนใจ เช่นร้านอาหารลานนา วอเตอร์ไซด์ ตั้งอยู่ภายในบริเวณค่าย ให้บริการอาหารไทยและอาหารพื้นบ้านภาคใต้ที่หลากหลาย ภายในร้านมีบรรยากาศกว้างขวาง โปร่งสบาย เหมาะสำหรับการผ่อนคลายหลังการฝึกซ้อม หรือเป็นสถานที่สำหรับมื้ออาหารร่วมกับครอบครัว</p>
            </div>
    
           
    </div>






    
    <div class="content-container1">
         
            <a href="https://youtu.be/3Z5ohzVy9jA" class="video-link">
                <img src="{{('assets/67.jpg')}}" alt="Video Thumbnail 2">
                <p>คลิปส่วนหน้าของค่าย</p>
            </a>
            <a href="https://www.google.com/maps/place/%E0%B8%A5%E0%B8%B2%E0%B8%99%E0%B8%99%E0%B8%B2+%E0%B8%A7%E0%B8%AD%E0%B9%80%E0%B8%95%E0%B8%AD%E0%B8%A3%E0%B9%8C%E0%B9%84%E0%B8%8B%E0%B8%94%E0%B9%8C+%E0%B8%9E%E0%B8%B1%E0%B8%97%E0%B8%A5%E0%B8%B8%E0%B8%87/@7.6124664,100.0103826,12z/data=!4m13!1m2!2m1!1z4Lij4LmJ4Liy4LiZ4Lit4Liy4Lir4Liy4Lij4Lil4Liy4LiZ4LiZ4Liy!3m9!1s0x304d63e454161b29:0x5fd2565494141d3d!5m2!4m1!1i2!8m2!3d7.6124664!4d100.0927801!15sCirguKPguYnguLLguJnguK3guLLguKvguLLguKPguKXguLLguJnguJnguLJaLyIt4Lij4LmJ4Liy4LiZIOC4reC4suC4q-C4suC4oyDguKXguLLguJkg4LiZ4LiykgEKcmVzdGF1cmFudJoBI0NoWkRTVWhOTUc5blMwVkpRMEZuU1VSRFh6VXRXRWwzRUFF4AEA!16s%2Fg%2F11fswklshr?entry=ttu&g_ep=EgoyMDI0MDkxMS4wIKXMDSoASAFQAw%3D%3D" class="video-link">
                <img src="{{('assets/51.jpg')}}" alt="Video Thumbnail 1">
                <p>ข้อมูลเพิ่มเติม</p>
            </a>
        
    </div>
    

  
    <div class="content-container2">
        <div class="box-item2">
            <img src="{{('assets/s5.jpg')}}" alt="">
            <p>AR ส่วนหน้าของค่าย</p>
        </div>
        <div class="box-item2">
            <img src="{{('assets/q5.png')}}" alt="">
            <p>สแกน QR Code เพื่อดู AR</p>
        </div>
        
    </div>
   

    <div class="text-container">
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
