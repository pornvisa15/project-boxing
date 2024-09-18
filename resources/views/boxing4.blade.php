<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>หน้าท่ามวย4</title>
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
                <h3>ท่าศอกงัด</h3>
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
                <img src="{{('assets/48.jpg')}}" alt="">
            </div>
            <div class="text-container3">
                <h3>ท่าศอกงัด (Elbow Uppercut)</h3>
                <p>เป็นเทคนิคที่ใช้ศอกในการโจมตีจากล่างขึ้นบน โดยจะงัดศอกขึ้นในมุมเฉียงหรือแนวตั้งเพื่อตีคู่ต่อสู้ที่คางหรือใบหน้า เทคนิคนี้ใช้แรงจากการหมุนของร่างกายและสะโพกเพื่อเพิ่มพลังการโจมตี สามารถสร้างความเสียหายได้มากและทำให้คู่ต่อสู้เสียสมดุลหรือล้มลง</p>
            </div>
    </div>
   

    <div class="content-container">

            <div class="text-container">
                <h3>ศอกงัด</h3>
                <p>คือ เป็นศอกที่ใช้ตีเสยขึ้นโดยการงัดขึ้นตรงๆ หรือบางครั้งอาจเฉียงเล็กน้อยการงัดให้ย่อตัวลงเพื่อที่จะใช้แรงส่งจากเท้า ใช้เมื่อคู่ต่อสู้จะเข้ามาจับคอตีเข่าให้ใช้ศอกงัดเข้าที่เป้าหมาย คือ ปลายคางของ คู่ต่อสู้</p>
                <p>ผู้โจมตีจะงอข้อศอกประมาณ 90 องศา และยกแขนขึ้นมาจากด้านล่าง การงัดศอกจะเริ่มจากการงอเข่าเล็กน้อยแล้วดันขึ้น ส่งแรงจากขาไปยังลำตัวและศอก เคลื่อนไหวเป็นการงัดศอกขึ้นจากด้านล่างเป้าหมายไปยังส่วนที่อ่อนแอของคู่ต่อสู้ เช่น ใต้คางหรือกราม ควรมีการควบคุมสมดุลของร่างกายและการป้องกันที่ดี เพื่อป้องกันการโต้ตอบจากคู่ต่อสู้</p>
                <h3>ใช้สำหรับ</h3>
                <p>ใช้โจมตีที่คางหรือใบหน้าเพื่อทำให้คู่ต่อสู้เสียสมดุลและหมดสติได้ หรืออาจใช้โจมตีที่ลิ้นปี่เพื่อทำให้หายใจลำบากและสร้างความเจ็บปวด</p>
                
                <h3>ความรุนแรง</h3>
                <p>ศอกของนักมวยมืออาชีพสามารถสร้างแรงกระแทกได้ประมาณ 1,000–2,000 ปอนด์ต่อตารางนิ้ว (PSI) ขึ้นอยู่กับเทคนิคและน้ำหนักตัวของนักมวย ศอกที่มีแรงกระแทกสูงสามารถทำให้คู่ต่อสู้เจ็บหนักหรือหมดสติได้</p>
            </div>
    </div>






    
    <div class="content-container1">
         
            <a href="https://youtu.be/Vng_cA3BrG8" class="video-link">
                <img src="{{('assets/48.jpg')}}" alt="Video Thumbnail 2">
                <p>คลิปท่าศอกงัด</p>
            </a>
            <a href="https://jaroenthongmuaythaikhaosan.com/blog/read/157" class="video-link">
                <img src="{{('assets/s4.jpg')}}" alt="Video Thumbnail 1">
                <p>ข้อมูลเพิ่มเติม</p>
            </a>
        
    </div>
    

  
    <div class="content-container2">
        <div class="box-item2">
            <img src="{{('assets/7.jpg')}}" alt="">
            <p>ท่าศอกงัด</p>
        </div>
        <div class="box-item2">
            <img src="{{('assets/q4.png')}}" alt="">
            <p>สแกน QR Code เพื่อดู AR</p>
        </div>
        
    </div>
   

    <div class="text-container">
        <h5><a href="boxing" class="hero-btn">กลับ</a></h5>
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
