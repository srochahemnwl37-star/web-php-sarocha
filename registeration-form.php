<!DOCTYPE html>
<html lang="th">

<head>
    <title>แบบฟอร์มสมัครงาน</title>
</head>

<body>
    <form action="registeration-accept.php" method="POST">
        <h1>ใบสมัครงาน</h1>
        <label>ชื่อผู้สมัคร:</label>
        <input type="text" name="Username" required>
<br>

        <label>อีเมล:</label>
        <input type="email" name="UserEmail" required>
<br>

        <label>เบอร์โทรติดต่อ:</label>
        <input type="tel" name="UserPhone" required>
<br>

        <label>รหัสผ่าน(เข้าสู่ระบบ):</label>
        <input type="password" name="UserPass" required>
<br>

        <label>เงินเดือนที่คาดหวัง:</label>
        <input type="number" name="UserNum" required>
<br>

        <label>วันที่เริ่มงานได้:</label>
        <input type="date" name="UserDate" required>
<br>

        <label>เพศ:</label>
        <input type="radio" name="UserGender" value="ชาย"> ชาย
        <input type="radio" name="UserGender" value="หญิง"> หญิง
<br>
        <label>ตำแหน่งที่สนใจ:</label>
        <select name="UserPosition">
            <option value="โปรแกรมเมอร์">โปรแกรมเมอร์</option>
            <option value="กราฟิกดีไซน์">กราฟิกดีไซน์</option>
            <option value="การตลาด">การตลาด</option>
        </select>
<br>
        <label>ทักษะความสามารถ (เลือกได้มากกว่า 1)</label>
        <input type="checkbox" name="Skills[]" value="PHP"> PHP
        <input type="checkbox" name="Skills[]" value="HTML"> HTML
        <input type="checkbox" name="Skills[]" value="CSS"> CSS
        <input type="checkbox" name="Skills[]" value="SQL"> SQL
<br>
        <label>แนะนำตัวเพิ่มเติม:</label>
        <textarea name="UserNote"></textarea>
<br>

        <input type="submit" value="ส่งใบสมัคร">
        <input type="reset" value="ล้างข้อมูล">
    </form>
</body>

</html>