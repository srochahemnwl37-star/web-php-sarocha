<?php
    $username = $_POST['Username'];
    $useremail = $_POST['UserEmail'];
    $userphone = $_POST['UserPhone'];
    $userpass = $_POST['UserPass'];
    $usernum = $_POST['UserNum'];
    $userdate = $_POST['UserDate'];
    $usergender = $_POST['UserGender'];
    $userposition = $_POST['UserPosition'];
    $userskills = $_POST['Skills'];
    $usernote = $_POST['UserNote'];

    echo "ชื่อผู้สมัคร: $username<br>";
    echo "อีเมล: $useremail<br>";
    echo "เบอร์โทรติดต่อ: $userphone<br>";
    echo "รหัสผ่าน(เข้าสู่ระบบ): $userpass<br>";
    echo "เงินเดือนที่คาดหวัง: $usernum<br>";
    echo "วันที่เริ่มงานได้: $userdate<br>";
    echo "เพศ: $usergender<br>";
    echo "ตำแหน่งที่สนใจ: $userposition<br>";
    echo "ทักษะความสามารถ: " . implode(", ", $userskills) . "<br>";
    echo "แนะนำตัวเพิ่มเติม: $usernote<br>";
?>