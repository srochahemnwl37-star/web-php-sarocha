<!DOCTYPE html>

<head>
    <meta charset="UTF-8">
    <title>เพิ่มข้อมูลนักเรียน</title>
</head>

<body>
    <h2>เพิ่มข้อมูลนักเรียน</h2>
    <form action="insert.php" method="POST">
        <p>
            ชื่อ<br>
            <input type="text" name="name">
        </p>
        <p>
            อีเมล<br>
            <input type="email" name="email">
        </p>
        <p>
            อายุ<br>
            <input type="number" name="age">
        </p>
        <button type="submit">
            บันทึกข้อมูล
        </button>

    </form>
       <br>

        <a href="week12-tableData.php">
            กลับหน้าหลัก
        </a>
</body>

</html>