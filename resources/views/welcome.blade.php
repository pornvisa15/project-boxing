<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>หน้าแรก</title>
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
            /* สีพื้นหลังของ white-box */
            padding: 80px;
            /* ระยะห่างภายใน */
            margin: 50px auto;
            /* ระยะห่างด้านบนและด้านล่าง, จัดตรงกลางในแนวนอน */
            width: 60%;
            /* ความกว้าง */
            border-radius: 10px;
            /* มุมโค้ง */
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            /* เงา */
            display: flex;
            /* ใช้ Flexbox */
            flex-direction: column;
            /* จัดเนื้อหาในแนวตั้ง */
            align-items: center;
            จัดให้อยู่ตรงกลางในแนวนอน font-size: 1.7rem;
            /* ขนาดฟอนต์ */
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


        <<<<<<< HEAD .navbar a {
            =======.navbar a {
                >>>>>>>beeaaa8f817801c3ceb2e512188da0ed6fda54fc text-decoration: none;
                color: inherit;
            }

            .white-box {
                display: flex;
                justify-content: center;
                /* จัดให้อยู่ตรงกลางในแนวนอน */
                padding: 40px;
            }



            <<<<<<< HEAD .white-space {
                display: flex;
                /* ใช้ Flexbox */
                flex-direction: column;
                /* จัดเนื้อหาในแนวตั้ง */
                align-items: center;
                /* จัดให้อยู่ตรงกลางในแนวนอน */
                /* text-align: center; จัดข้อความให้อยู่ตรงกลาง */
                background-color: white;
                /* สีพื้นหลังของ white-space */
                padding: 50px;
                /* เพิ่มระยะห่างภายใน */
                border-radius: 5px;
                /* มุมโค้ง */
                max-width: 800px;
                /* ความกว้างสูงสุด */
                text-indent: 40px;
            }

            .white-space h1 {
                margin-top: 0.5px;
                /* เพิ่มระยะห่างด้านบนของข้อความ */
                margin-bottom: 20px;
                /* เพิ่มระยะห่างด้านล่างของข้อความ */
                font-size: 30px;
                /* ขนาดตัวอักษร */
                line-height: 1.5;
                font-weight: bold;
                /* ระยะห่างระหว่างบรรทัด */
            }

            =======.white-space {
                display: flex;
                /* ใช้ Flexbox */
                flex-direction: column;
                /* จัดเนื้อหาในแนวตั้ง */
                align-items: center;
                /* จัดให้อยู่ตรงกลางในแนวนอน */
                /* text-align: center; จัดข้อความให้อยู่ตรงกลาง */
                background-color: white;
                /* สีพื้นหลังของ white-space */
                padding: 50px;
                /* เพิ่มระยะห่างภายใน */
                border-radius: 5px;
                /* มุมโค้ง */
                max-width: 800px;
                /* ความกว้างสูงสุด */
                text-indent: 40px;
            }

            >>>>>>>beeaaa8f817801c3ceb2e512188da0ed6fda54fc .white-space h1 {
                margin-top: 0.5px;
                /* เพิ่มระยะห่างด้านบนของข้อความ */
                margin-bottom: 20px;
                /* เพิ่มระยะห่างด้านล่างของข้อความ */
                font-size: 30px;
                /* ขนาดตัวอักษร */
                line-height: 1.5;
                font-weight: bold;
                /* ระยะห่างระหว่างบรรทัด */
            }

            .white-space p {
                margin-top: 20px;
                /* เพิ่มระยะห่างด้านบนของข้อความ */
                margin-bottom: 20px;
                /* เพิ่มระยะห่างด้านล่างของข้อความ */
                font-size: 16px;
                /* ขนาดตัวอักษร */
                line-height: 1.5;
                /* ระยะห่างระหว่างบรรทัด */
            }

            .white-space img {
                width: 500%;
                /* ขยายรูปภาพให้เต็มความกว้างของคอนเทนเนอร์ */
                max-width: 500px;
                /* ความกว้างสูงสุด */
                height: auto;
                /* ความสูงอัตโนมัติ */
                margin-bottom: 20px;
                /* ระยะห่างด้านล่าง */
                margin-top: 20px;
                /* เพิ่มระยะห่างด้านบนของข้อความ */
                margin-bottom: 30px;
                /* เพิ่มระยะห่างด้านล่างของข้อความ */
                font-size: 17px;
                /* ขนาดตัวอักษร */
                line-height: 1.5;
                /* ระยะห่างระหว่างบรรทัด */
            }

            .white-space img:nth-of-type(2),
            .white-space img:nth-of-type(3) {
                width: 300px;
                /* ปรับขนาดความกว้างของรูปภาพที่สองและสาม */
                height: auto;
                /* ให้ความสูงปรับตามสัดส่วนของรูปภาพ */
                object-fit: cover;
                /* ทำให้รูปภาพไม่บิดเบี้ยว */
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
                    <h3>
                        Lanna waterside Boxing Gym Website</h3>

                </div>
            </div>
        </div>
    </section>








    <<<<<<< HEAD <section class="white-box">
        <div class="white-space">
            <h1>ค่ายมวยลานนาวอเตอร์ไซด์</h1>
            <p>ค่ายมวยลานนาวอเตอร์ไซด์พัทลุงก่อตั้งขึ้นในปี 2014
                โดยมีวัตถุประสงค์หลักในการส่งเสริมและพัฒนามวยไทยในจังหวัดพัทลุง
                ค่ายมวยแห่งนี้เป็นศูนย์ฝึกซ้อมที่มีความเชี่ยวชาญในการพัฒนาทักษะของนักมวยไทย
                โดยเฉพาะนักมวยที่มุ่งหวังในการพัฒนาทักษะและเข้าร่วมการแข่งขัน</p>
            <img src="{{ 'assets/37.jpg' }}" alt="">
            <p>ต้นกำเนิดของค่ายมวยลานนาวอเตอร์ไซด์เริ่มต้นจากนายสุวิชัย แซ่ตั้น มีความสนใจและชื่นชอบในกีฬามวยไทย
                นายสุวิชัยได้เริ่มต้นฝึกซ้อมมวยให้กับลูกชายสองคนจนประสบความสำเร็จในการแข่งขันมวยไทย
                ความสำเร็จนี้ได้กระตุ้นให้มีการฝึกซ้อมต่อเนื่องและดึงดูดความสนใจจากชุมชนท้องถิ่นที่สนใจเข้าร่วมการฝึกซ้อม
                ค่ายมวยเริ่มได้รับความนิยมในระดับท้องถิ่นและได้มีการเปลี่ยนชื่อจาก "ค่ายมวย ช.ชัยชนะ" เป็น
                "ลานนาวอเตอร์ไซด์" เพื่อสะท้อนถึงการพัฒนาและการขยายตัวของค่ายมวยอย่างต่อเนื่อง</p>
            <img src="{{ 'assets/38.jpg' }}" alt="">
            <p>ปัจจุบัน ค่ายมวยลานนาวอเตอร์ไซด์ได้พัฒนาและเติบโตอย่างต่อเนื่อง โดยมีนักกีฬาที่มีชื่อเสียงหลายท่าน เช่น
                เพชรยอดคง, เพชรน้ำหนึ่ง, ศิลาเงิน และพลังทรัพย์ ค่ายมวยประสบความสำเร็จในการแข่งขัน
                โดยเฉพาะศิลาเงินลานนาวอเตอร์ไซด์ที่ได้รับตำแหน่งแชมเปี้ยนแห่งประเภทไทย ที่สนามเวทียามอ้อมน้อย รุ่น 30
                ปอนด์ </p>
            <img src="{{ 'assets/39.jfif' }}" alt="">
            <p>ที่นอกจากการฝึกซ้อมและการแข่งขัน
                ค่ายมวยลานนาวอเตอร์ไซด์พัทลุงยังมีบทบาทสำคัญในการเสริมสร้างชุมชนและส่งเสริมสุขภาพในท้องถิ่น
                โดยการเปิดโอกาสให้ผู้สนใจเข้าร่วมการฝึกซ้อมมวยและการออกกำลังกาย
                ซึ่งช่วยส่งเสริมสุขภาพดีและการออกกำลังกายในชุมชน
                ค่ายมวยลานนาวอเตอร์ไซด์พัทลุงจึงเป็นศูนย์ฝึกซ้อมที่มีความสำคัญในวงการมวยไทย
                โดยเน้นการพัฒนาทักษะของนักมวยและการส่งเสริมการมีสุขภาพดีในชุมชน</p>
        </div>
        </section>
        =======
        <section class="white-box">
            <div class="white-space">
                <h1>ประวัติค่ายมวยลานนาวอเตอร์ไซด์</h1>
                <p>ค่ายมวยลานนาวอเตอร์ไซด์พัทลุงก่อตั้งขึ้นในปี 2014
                    โดยมีวัตถุประสงค์หลักในการส่งเสริมและพัฒนามวยไทยในจังหวัดพัทลุง
                    ค่ายมวยแห่งนี้เป็นศูนย์ฝึกซ้อมที่มีความเชี่ยวชาญในการพัฒนาทักษะของนักมวยไทย
                    โดยเฉพาะนักมวยที่มุ่งหวังในการพัฒนาทักษะและเข้าร่วมการแข่งขัน</p>
                <img src="{{ 'assets/37.jpg' }}" alt="">
                <p>ต้นกำเนิดของค่ายมวยลานนาวอเตอร์ไซด์เริ่มต้นจากนายสุวิชัย แซ่ตั้น มีความสนใจและชื่นชอบในกีฬามวยไทย
                    นายสุวิชัยได้เริ่มต้นฝึกซ้อมมวยให้กับลูกชายสองคนจนประสบความสำเร็จในการแข่งขันมวยไทย
                    ความสำเร็จนี้ได้กระตุ้นให้มีการฝึกซ้อมต่อเนื่องและดึงดูดความสนใจจากชุมชนท้องถิ่นที่สนใจเข้าร่วมการฝึกซ้อม
                    ค่ายมวยเริ่มได้รับความนิยมในระดับท้องถิ่นและได้มีการเปลี่ยนชื่อจาก "ค่ายมวย ช.ชัยชนะ" เป็น
                    "ลานนาวอเตอร์ไซด์" เพื่อสะท้อนถึงการพัฒนาและการขยายตัวของค่ายมวยอย่างต่อเนื่อง</p>
                <img src="{{ 'assets/38.jpg' }}" alt="">
                <p>ปัจจุบัน ค่ายมวยลานนาวอเตอร์ไซด์ได้พัฒนาและเติบโตอย่างต่อเนื่อง โดยมีนักกีฬาที่มีชื่อเสียงหลายท่าน
                    เช่น
                    เพชรยอดคง, เพชรน้ำหนึ่ง, ศิลาเงิน และพลังทรัพย์ ค่ายมวยประสบความสำเร็จในการแข่งขัน
                    โดยเฉพาะศิลาเงินลานนาวอเตอร์ไซด์ที่ได้รับตำแหน่งแชมเปี้ยนแห่งประเภทไทย ที่สนามเวทียามอ้อมน้อย รุ่น
                    30
                    ปอนด์ </p>
                <img src="{{ 'assets/39.jfif' }}" alt="">
                <p>ที่นอกจากการฝึกซ้อมและการแข่งขัน
                    ค่ายมวยลานนาวอเตอร์ไซด์พัทลุงยังมีบทบาทสำคัญในการเสริมสร้างชุมชนและส่งเสริมสุขภาพในท้องถิ่น
                    โดยการเปิดโอกาสให้ผู้สนใจเข้าร่วมการฝึกซ้อมมวยและการออกกำลังกาย
                    ซึ่งช่วยส่งเสริมสุขภาพดีและการออกกำลังกายในชุมชน
                    ค่ายมวยลานนาวอเตอร์ไซด์พัทลุงจึงเป็นศูนย์ฝึกซ้อมที่มีความสำคัญในวงการมวยไทย
                    โดยเน้นการพัฒนาทักษะของนักมวยและการส่งเสริมการมีสุขภาพดีในชุมชน</p>
            </div>
        </section>
        >>>>>>> beeaaa8f817801c3ceb2e512188da0ed6fda54fc









        <section class="contact-info">
            <div class="container">
                <h2>ติดต่อเรา </h2>
                <p><strong>ที่อยู่:</strong> <a href="https://maps.app.goo.gl/nSyjQjgojQYG2BLo6">สนามมวยลานนา
                        โฮมสเตย์&เรสเตอร์รอง ตำบล ควนมะพร้าว เมือง พัทลุง 93000</a></p>
                <p><strong>โทรศัพท์:</strong> <a href="#">+684 247 9665</a></p>
                <p><strong>Facebook</strong> <a
                        href="https://www.facebook.com/profile.php?id=100063753060493">เพจ:ค่ายมวยลานนาวอเตอร์ไซด์</a>
                </p>

            </div>
        </section>
</body>

</html>
