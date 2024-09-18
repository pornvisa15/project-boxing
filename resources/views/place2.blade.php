<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>หน้าเวที</title>
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
                <h3>ส่วนกลางค่ายมวย</h3>
                <p> มีอุปกรณ์ให้เลือกหลากหลาย มีเทรนเนอร์ในการซ้อมมวย
                </p>
            </div>
    </div>
   

    <div class="content-container">

            <div class="text-container">
                <h3>ส่วนกลางลาน</h3>
                <p>มีเวทีมวย ลู่วิ่งไฟฟ้า กระสอบทราย และการแนะนำนักมวยภายในค่าย โดยเวทีมวยหรือสังเวียนมวย (Boxing Ring) ใช้สำหรับการแข่งขันชกมวย โดยมีลักษณะเป็นรูปสี่เหลี่ยมจัตุรัส ล้อมรอบด้วยเชือก 4 เส้น ซึ่งเชือกแต่ละเส้นต้องมีขนาดเส้นผ่านศูนย์กลางไม่น้อยกว่า 1.5 นิ้ว พื้นสนามต้องมีความปลอดภัยและปราศจากสิ่งกีดขวาง สำหรับทางขึ้นเวทีจะมีบันได 3 ทาง โดยมีความกว้างไม่น้อยกว่า 3 ฟุต โดยบันได 2 ทางจะอยู่ที่มุมตรงข้ามของเวทีสำหรับให้นักมวยและพี่เลี้ยงใช้ขึ้นลง ส่วนบันไดอีกหนึ่งทางจะตั้งอยู่ที่มุมกลางสำหรับผู้ชี้ขาดและแพทย์</p>
                <h3>ทางด้านซ้าย</h3>
                <p>มีลู่วิ่งไฟฟ้าเพื่อให้นักมวยหรือผู้ที่สนใจได้ใช้ออกกำลังกายและวอร์มกล้ามเนื้อก่อนเริ่มเรียนชกมวย </p>
                <h3>ทางด้านขวา </h3>
                <p>มีกระสอบทราย ซึ่งเป็นอุปกรณ์ที่ใช้สำหรับการฝึกซ้อมมวย กระสอบทรายนี้สามารถใช้ฝึกการต่อย เตะ และฝึกท่าทางต่าง ๆ ที่เกี่ยวข้องกับมวย ซึ่งจะช่วยเสริมสร้างความแข็งแรงของกล้ามเนื้อผู้ฝึก รวมถึงเพิ่มศักยภาพและพัฒนาทักษะการเตะและต่อยของนักมวย</p>
            </div>
    
           
    </div>






    
    <div class="content-container1">
         
            <a href="https://youtu.be/qb2GyfW3sdQ" class="video-link">
                <img src="{{('assets/52.jpg')}}" alt="Video Thumbnail 2">
                <p>คลิปส่วนกลางเวที</p>
            </a>
            <a href="https://www.jaroenthongmuaythairatchada.com/blog/read/216?fbclid=IwY2xjawFUuIFleHRuA2FlbQIxMAABHVa68QoxbU8Sapak6qyK0Y3aDUME4__HpObPsudgZq7XnSF6lGpyRSbOTQ_aem_wqGqAgWpGOSEprvgehQyow" class="video-link">
                <img src="{{('assets/s8.jpg')}}" alt="Video Thumbnail 1">
                <p>ข้อมูลเพิ่มเติม</p>
            </a>
        
    </div>
    

  
    <div class="content-container2">
        <div class="box-item2">
            <img src="{{('assets/s6.jpg')}}" alt="">
            <p>AR ส่วนเวที</p>
        </div>
        <div class="box-item2">
            <img src="{{('assets/q7.png')}}" alt="">
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
