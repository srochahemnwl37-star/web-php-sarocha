<?php
// week8-hw-proceed.php
// หน้าสำหรับตรวจสอบข้อมูล Login ที่ส่งมาจาก week8-hw-login.php

session_start();

$username = isset($_POST['username']) ? $_POST['username'] : '';
$password = isset($_POST['password']) ? $_POST['password'] : '';
$remember = isset($_POST['remember']) ? $_POST['remember'] : '';

if ($username === 'admin' && $password === 'admin1234') {
    // ล็อคอินสำเร็จ -> เก็บ username ไว้ใน session
    $_SESSION['username'] = $username;

    // หากมีการเลือก remember me -> เก็บ username ไว้ใน cookie ด้วย (30 วัน)
    if ($remember) {
        setcookie('username', $username, time() + (30 * 24 * 60 * 60), "/");
    }

    echo "ล็อคอินสำเร็จ";
} else {
    // ล็อคอินไม่สำเร็จ
    echo "ล็อคอินไม่สำเร็จ";
}
?>