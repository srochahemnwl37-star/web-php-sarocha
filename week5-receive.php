<?php

    if ($_SERVER['REQUEST_METHOD'] === "GET") {
        $name = $_GET['userName'] ?: 'ไม่ระบุ';
        $password = $_GET['userPass'] ?: 'ไม่ระบุ';
        $email = $_GET['userEmail'] ?: 'ไม่ระบุ';
        $date = $_GET['userdate'] ?: 'ไม่ระบุ';
        $age = $_GET['age'] ?: 'ไม่ระบุ';
        $gender = $_GET['userGender'] ?? 'ไม่ระบุ';
        $province = $_GET['province'] ?: 'ไม่ระบุ';
        $hobby = $_GET['userHobby'] ?? ['ไม่ระบุ'];
        $message = $_GET['userMsg'] ?: 'ไม่ระบุ';
    }

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