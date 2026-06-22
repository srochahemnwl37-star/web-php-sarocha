<?php
    $name = $_GET['userName'];
    $password = $_GET['userPass'];
    $email = $_GET['userEmail'];
    $date = $_GET['userdate'];
    $age = $_GET['age'];
    $gender = $_GET['userGender'];
    $province = $_GET['province'];
    $hobby = $_GET['userHobby'];
    $message = $_GET['userMsg'];

    echo "สวัสดีคุณ $name<br>";
    echo "รหัสผ่านของคุณคือ: $password<br>";
    echo "อีเมลของคุณคือ: $email<br>";
    echo "วันเกิดของคุณคือ: $date<br>";
    echo "อายุของคุณคือ: $age<br>";
    echo "เพศของคุณคือ: $gender<br>";
    echo "จังหวัดของคุณคือ: $province<br>";
    echo "งานอดิเรกของคุณคือ:" . implode(", ", $hobby) . "<br>";
    echo "ความคิดเห็นของคุณคือ: $message<br>";
?>