<?php
// แนะนำตัวเอง - Sarocha Hemenual

// ข้อมูลส่วนตัว
$name = "สโรชา เหมนวล";
$studentId = "69319010023";
$department = "เทคโนโลยีสารสนเทศ";
$age = 18;

?>
<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>แนะนำตัวเอง - <?php echo $name; ?></title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 20px;
        }
        
        .container {
            background: white;
            border-radius: 15px;
            box-shadow: 0 10px 40px rgba(0, 0, 0, 0.3);
            padding: 40px;
            max-width: 500px;
            width: 100%;
        }
        
        .header {
            text-align: center;
            margin-bottom: 30px;
            border-bottom: 3px solid #667eea;
            padding-bottom: 20px;
        }
        
        .header h1 {
            color: #667eea;
            font-size: 28px;
            margin-bottom: 5px;
        }
        
        .info-section {
            margin-bottom: 25px;
        }
        
        .info-label {
            color: #666;
            font-size: 12px;
            text-transform: uppercase;
            font-weight: bold;
            margin-bottom: 8px;
            letter-spacing: 1px;
        }
        
        .info-value {
            color: #333;
            font-size: 18px;
            font-weight: 600;
            padding: 10px;
            background-color: #f5f5f5;
            border-radius: 8px;
            border-left: 4px solid #667eea;
        }
        
        .footer {
            text-align: center;
            margin-top: 30px;
            padding-top: 20px;
            border-top: 1px solid #eee;
            color: #999;
            font-size: 12px;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <h1>👋 แนะนำตัวเอง</h1>
            <p style="color: #999; margin-top: 5px;">Self Introduction</p>
        </div>
        
        <div class="info-section">
            <div class="info-label">ชื่อ - Name</div>
            <div class="info-value"><?php echo $name; ?></div>
        </div>
        
        <div class="info-section">
            <div class="info-label">รหัสวิชา - Student ID</div>
            <div class="info-value"><?php echo $studentId; ?></div>
        </div>
        
        <div class="info-section">
            <div class="info-label">แผนก - Department</div>
            <div class="info-value"><?php echo $department; ?></div>
        </div>
        
        <div class="info-section">
            <div class="info-label">อายุ - Age</div>
            <div class="info-value"><?php echo $age; ?> ปี</div>
        </div>
        
        <div class="footer">
            <p>Created on: <?php echo date('d/m/Y H:i'); ?></p>
        </div>
    </div>
</body>
</html>
