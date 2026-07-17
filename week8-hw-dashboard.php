<?php
// week8-hw-dashboard.php
// หน้าสำหรับใช้งานหลังล็อคอิน ตรวจสอบสถานะการล็อคอินจาก session และ cookie

session_start();

if (!isset($_SESSION['username']) && isset($_COOKIE['username'])) {
    // ไม่มี session แต่มี cookie -> ดึงชื่อจาก cookie มาเก็บไว้ใน session
    $_SESSION['username'] = $_COOKIE['username'];
}

?>
<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="UTF-8">
    <title>Dashboard</title>
    <style>
        body {
            font-family: "Tahoma", sans-serif;
            background-color: #f4f4f4;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        .box {
            background: #fff;
            padding: 30px 40px;
            border-radius: 8px;
            box-shadow: 0 2px 8px rgba(0,0,0,0.2);
            text-align: center;
        }
    </style>
</head>
<body>
    <div class="box">
        <?php if (isset($_SESSION['username'])): ?>
            <h2>ยินดีต้อนรับ <?php echo htmlspecialchars($_SESSION['username']); ?></h2>
        <?php else: ?>
            <h2>โปรดล็อคอิน</h2>
        <?php endif; ?>
    </div>
</body>
</html>