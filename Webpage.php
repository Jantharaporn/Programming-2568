<?php
    //ข้อมูลเรา
    $student_id = "67040233119";
    $fullname = "นางสาวจันทราภรณ์ ผาสีดา (Jantharaporn Phaseeda)";
    $nickname = "แพรว (Prawe)";
    $faculty = "คณะวิทยาสาสตร์";
    $major = "เทคโนโลยีสารสนเทศ (Information technology)";
    $province = "238 ม.10 อำเภอเซกา จังหวัดบึงกาฬ 38150";
    $dream_job = "นักพัฒนาโปรแกรมเมอร์";
    
?>
<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Webpage</title>

    <style>
        body {
            margin: 0;
            padding: 0;
            background: #f7f6f2; /* โทนสว่าง นุ่ม */
            font-family: "Prompt", sans-serif;
        }

        .card {
            width: 600px;
            background: #fff8bbff;
            margin: 40px auto;
            padding: 25px;
            border-radius: 14px;
            box-shadow: 0 4px 15px rgba(0,0,0,0.1);
        }

        .profile-img {
            width: 220px;
            height: 220px;
            object-fit: cover;
            border-radius: 50%;
            display: block;
            margin: auto;
            box-shadow: 0 0 12px rgba(0,0,0,0.15);
        }

        .info {
            margin-top: 25px;
            font-size: 18px;
            color: #444;
            line-height: 1.8;
        }

        .info span {
            font-weight: 600;
            color: #333;
        }

        .social {
            margin-top: 25px;
            text-align: center;
        }

        .icon {
            width: 45px;
            margin: 0 10px;
            transition: 0.3s;
        }

        .icon:hover {
            transform: scale(1.1);
            opacity: 0.8;
        }
    </style>

</head>
<body>

<div class="card">
    
    <img src="PIC/1928f89b-0ab4-4f64-a27a-794f6715fac6.jpg" alt="profile" class="profile-img">

    <div class="info">
        <p><span>รหัสนักศึกษา:</span> <?php echo $student_id; ?></p>
        <p><span>ชื่อ-สกุล:</span> <?php echo $fullname; ?></p>
        <p><span>ชื่อเล่น:</span> <?php echo $nickname; ?></p>
        <p><span>คณะ:</span> <?php echo $faculty; ?></p>
        <p><span>สาขาวิชา:</span> <?php echo $major; ?></p>
        <p><span>ที่อยู่:</span> <?php echo $province; ?></p>
        <p><span>อาชีพในฝัน:</span> <?php echo $dream_job; ?></p>
    </div>

    <center>
    <div class="social">
        <a href="https://www.facebook.com/profile.php?id=100028583644436" target="_blank">
            <img src="PIC/facebook.jpg" class="icon" width="60" height="50">
        </a>

        <a href="mailto:67040233119@udru.ac.th">
            <img src="PIC/email.jpg" class="icon" width="60" height="50">
        </a>

    </div>
    <hr>
   <a href="EX1_loop.php">งาน Loop</a>
    </center>
</div>

</body>
</html>
