<!DOCTYPE html>
<html lang="th">
<head>
    <title>Page Title</title>
</head>
<body>
    <form action="week5-receive.php" method="get ">
        <label>username</label>
        <input  type="text" name="userName" readonly>

    <br>
        <label>password</label>
        <input type="password" name="userPass" readonly>
<br>
        <label>email</label>
        <input type="email" name="userEmail">
<br>
        <label>วันเกิด</label>
        <input type="date" name="userdate">
<br>
        <label>อายุ</label>
        <input type="number" name="age">
<br>
        <input type="radio" name="userGender" value="ชาย"> ชาย
        <input type="radio" name="userGender" value="หญิง"> หญิง
<br>
        <select name="province">
            <option value="ไม่ระบุ">-</option>
            <option value="กรุงเทพ">กรุงเทพ</option>
        </select>
<br>
        <input type="checkbox" name="userHobby[]" value="อ่านหนังสือ"> อ่านหนังสือ
        <input type="checkbox" name="userHobby[]" value="ฟังเพลง"> ฟังเพลง
<br>
        <label>ความคิดเห็น</label>
        <textarea name="userMsg"></textarea>
<br>

         <input type="submit" value="ส่งข้อมูล">
         <input type="reset" value="ล้างข้อมูล">


    </form>
</body>
</html>