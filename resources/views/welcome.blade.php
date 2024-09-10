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
            background-color: #7ba5e4;
            padding: 80px;
            margin: 50px auto;
            width: 60%;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            display: flex;
            justify-content: space-between;
            font-size: 1.7rem;
        }

        .header .navbar a:hover,
        .box-item .hero-btn:hover {
            color: #ffd700;
        }
    body {
    text-align: center;

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
             <h3>ประวัติค่ายมวยลานนาวอเตอร์ไซด์</h3>


            </div>
        </div>
    </div>
</section>

    <section class="white-box">



                <p>ประวัติศาสตร์อันยาวนานของมวยไทย เริ่มมีและใช้กันในการสงครามในสมัยก่อน ในปัจจุบัน มีการดัดแปลงมวยไทยมาใช้ในกองทัพโดยเรียกว่า “เลิศฤทธิ์” ซึ่งแตกต่างจากมวยไทยในปัจจุบันที่ใช้เป็นการกีฬา โดยมีการใช้นวมขึ้นเพื่อป้องกันการอันตรายที่เกิดขึ้น มวยไทยยังคงได้ชื่อว่า ศาสตร์การโจมตีทั้งแปด ซึ่งรวม สองมือ สองเท้า สองศอก และสองเข่า (บางตำราอาจเป็น นวอาวุธ ซึ่งรวมการใช้ศีรษะโจมตี หรือ ทศอาวุธ ซึ่งรวมการใช้บั้นท้ายกระแทกโจมตีด้วย) มวยไทยสืบทอดมาจาก มวยโบราณ ซึ่งแบ่งออกเป็นแต่ละสายตามท้องที่นั้น ๆ โดยมีสายสำคัญหลัก ๆ เช่น มวยท่าเสา (ภาคเหนือ) มวยโคราช (ภาคอีสาน) มวยไชยา (ภาคใต้) มวยลพบุรีและมวยพระนคร (ภาคกลาง) มวยพลศึกษามีคำกล่าวไว้ว่า “หมัดดีโคราช ฉลาดลพบุรี ท่าดีไชยา ไวกว่าท่าเสา ครบเครื่องพลศึกษา</p>




        </section>
        <section class="contact-info">
            <div class="container">
                <h2>ติดต่อเรา  </h2>
                <p><strong>ที่อยู่:</strong> <a href="https://maps.app.goo.gl/nSyjQjgojQYG2BLo6">สนามมวยลานนา โฮมสเตย์&เรสเตอร์รอง ตำบล ควนมะพร้าว เมือง พัทลุง 93000</a></p>
                <p><strong>โทรศัพท์:</strong> <a href="#">+684 247 9665</a></p>
                <p><strong>Facebook</strong> <a href="https://www.facebook.com/profile.php?id=100063753060493">เพจ:ค่ายมวยลานนาวอเตอร์ไซด์</a></p>

            </div>
        </section>
</body>

</html>
