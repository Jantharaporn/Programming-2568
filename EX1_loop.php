<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="UTF-8">
    <title>ลูป PHP</title>
    <style>
        body {
            font-family: "Prompt", sans-serif;
            background: #f2f2f2;
            margin: 0;
            padding: 20px;
        }
        .container {
            width: 700px;
            margin: auto;
            background: #ffffffff;
            padding: 25px;
            border-radius: 12px;
            box-shadow: 0 0 15px rgba(0,0,0,0.1);
        }
        h2 {
            margin-top: 35px;
            color: #333;
        }
        pre {
            background: #f8f8f8;
            padding: 15px;
            border-radius: 8px;
            color: #444;
            font-size: 17px;
            line-height: 1.5;
        }
        .title {
            font-weight: bold;
            color: #000000ff;
        }
    </style>
</head>
<body>

<div class="container">
    <h1>Loop PHP</h1>

    <!--1) Loop FOR-->
    <h2 class="title">1) ใช้ Loop FOR</h2>
    <pre>
<?php
echo "รูปแบบที่ 1:ดาวเพิ่มระดับ\n";
for ($i = 1; $i <= 4; $i++) {
    echo str_repeat("*", $i) . "\n";
}

echo "\nรูปแบบที่ 2:ตัวเลขซ้ำ\n";
for ($i = 1; $i <= 3; $i++) {
    echo str_repeat($i . " ", 4) . "\n";
}

echo "\nรูปแบบที่ 3:ตัวเลขเพิ่ม\n";
for ($i = 1; $i <= 3; $i++) {
    echo str_repeat($i . " ", $i) . "\n";
}

echo "\nรูปแบบที่ 4:ตัวเลขในกรอบ\n";
for ($i = 1; $i <= 5; $i++) {
    for ($j = 1; $j <= 6; $j++) {
        if ($i == 1 || $i == 5 || $j == 1 || $j == 6) {
            echo "* ";
        } else {
            echo ($i - 1) . " ";
        }
    }
    echo "\n";
}

echo "\nรูปแบบที่ 5:ตัวเลขลด\n";
for ($i = 3; $i >= 1; $i--) {
    echo str_repeat($i . " ", $i) . "\n";
}
?>
    </pre>


    <!--2) Loop WHILE-->
    <h2 class="title">2) ใช้ Loop WHILE</h2>
    <pre>
<?php
echo "รูปแบบที่ 1:ดาวเพิ่มระดับ\n";
$i = 1;
while ($i <= 4) {
    echo str_repeat("*", $i) . "\n";
    $i++;
}

echo "\nรูปแบบที่ 2:ตัวเลขซ้ำ\n";
$i = 1;
while ($i <= 3) {
    echo str_repeat($i . " ", 4) . "\n";
    $i++;
}

echo "\nรูปแบบที่ 3:ตัวเลขเพิ่ม\n";
$i = 1;
while ($i <= 3) {
    echo str_repeat($i . " ", $i) . "\n";
    $i++;
}

echo "\nรูปแบบที่ 4:ตัวเลขในกรอบ\n";
$i = 1;
while ($i <= 5) {
    $j = 1;
    while ($j <= 6) {
        if ($i == 1 || $i == 5 || $j == 1 || $j == 6) {
            echo "* ";
        } else {
            echo ($i - 1) . " ";
        }
        $j++;
    }
    echo "\n";
    $i++;
}

echo "\nรูปแบบที่ 5:ตัวเลขลด\n";
$i = 3;
while ($i >= 1) {
    echo str_repeat($i . " ", $i) . "\n";
    $i--;
}
?>
    </pre>

    <!--3) Loop DO WHILE -->
    <h2 class="title">3) ใช้ Loop DO WHILE</h2>
    <pre>
<?php
echo "รูปแบบที่ 1:ดาวเพิ่มระดับ\n";
$i = 1;
do {
    echo str_repeat("*", $i) . "\n";
    $i++;
} while ($i <= 4);

echo "\nรูปแบบที่ 2:ตัวเลขซ้ำ\n";
$i = 1;
do {
    echo str_repeat($i . " ", 4) . "\n";
    $i++;
} while ($i <= 3);

echo "\nรูปแบบที่ 3:ตัวเลขเพิ่ม\n";
$i = 1;
do {
    echo str_repeat($i . " ", $i) . "\n";
    $i++;
} while ($i <= 3);

echo "\nรูปแบบที่ 4:ตัวเลขในกรอบ\n";
$i = 1;
do {
    $j = 1;
    do {
        if ($i == 1 || $i == 5 || $j == 1 || $j == 6) {
            echo "* ";
        } else {
            echo ($i - 1) . " ";
        }
        $j++;
    } while ($j <= 6);

    echo "\n";
    $i++;
} while ($i <= 5);

echo "\nรูปแบบที่ 5:ตัวเลขลด\n";
$i = 3;
do {
    echo str_repeat($i . " ", $i) . "\n";
    $i--;
} while ($i >= 1);
?>
    </pre>
    <center>
   <a href="Webpage.php">กลับหน้า Webpage</a>
    </center>
</div>

</body>
</html>
