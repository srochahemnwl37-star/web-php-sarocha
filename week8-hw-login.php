<?php
// week8-hw-login.php
// หน้าฟอร์มสำหรับ Login
?>
<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="UTF-8">
    <title>เข้าสู่ระบบ</title>
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
        .login-box {
            background: #fff;
            padding: 30px 40px;
            border-radius: 8px;
            box-shadow: 0 2px 8px rgba(0,0,0,0.2);
            width: 320px;
        }
        .login-box h2 {
            text-align: center;
            margin-bottom: 20px;
        }
        .form-group {
            margin-bottom: 15px;
        }
        label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
        }
        input[type="text"],
        input[type="password"] {
            width: 100%;
            padding: 8px;
            box-sizing: border-box;
            border: 1px solid #ccc;
            border-radius: 4px;
        }
        .remember-group {
            display: flex;
            align-items: center;
            gap: 8px;
            margin-bottom: 20px;
        }
        .remember-group label {
            margin-bottom: 0;
            font-weight: normal;
        }
        button {
            width: 100%;
            padding: 10px;
            background-color: #4CAF50;
            color: #fff;
            border: none;
            border-radius: 4px;
            font-size: 16px;
            cursor: pointer;
        }
        button:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>
    <div class="login-box">
        <h2>เข้าสู่ระบบ</h2>
        <form action="week8-hw-proceed.php" method="post">
            <div class="form-group">
                <label for="username">ชื่อผู้ใช้ (Username)</label>
                <input type="text" id="username" name="username" required>
            </div>

            <div class="form-group">
                <label for="password">รหัสผ่าน (Password)</label>
                <input type="password" id="password" name="password" required>
            </div>

            <div class="remember-group">
                <input type="checkbox" id="remember" name="remember" value="1">
                <label for="remember">จดจำฉันไว้ (Remember me)</label>
            </div>

            <button type="submit">เข้าสู่ระบบ</button>
        </form>
    </div>
</body>
</html>