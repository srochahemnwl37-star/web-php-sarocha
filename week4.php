<?php
function sanitize_number($value) {
    return is_numeric($value) ? $value + 0 : null;
}

$multiplier = null;
$multiplierResult = null;
$firstNumber = null;
$secondNumber = null;
$sumResult = null;
$errorMessage = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['action']) && $_POST['action'] === 'multiply') {
        $multiplier = sanitize_number($_POST['multiplier'] ?? '');
        if ($multiplier === null) {
            $errorMessage = 'กรุณาป้อนตัวเลขที่ถูกต้องสำหรับสูตรคูณ';
        } else {
            $multiplierResult = [];
            for ($i = 1; $i <= 12; $i++) {
                $multiplierResult[] = "$multiplier x $i = " . ($multiplier * $i);
            }
        }
    }

    if (isset($_POST['action']) && $_POST['action'] === 'add') {
        $firstNumber = sanitize_number($_POST['first_number'] ?? '');
        $secondNumber = sanitize_number($_POST['second_number'] ?? '');
        if ($firstNumber === null || $secondNumber === null) {
            $errorMessage = 'กรุณาป้อนตัวเลขทั้งสองช่องให้ถูกต้อง';
        } else {
            $sumResult = $firstNumber + $secondNumber;
        }
    }
}

function h($value) {
    return htmlspecialchars($value, ENT_QUOTES, 'UTF-8');
}

$html = '<!DOCTYPE html>' . "\n";
$html .= '<html lang="th">' . "\n";
$html .= '<head>' . "\n";
$html .= '    <meta charset="UTF-8">' . "\n";
$html .= '    <meta name="viewport" content="width=device-width, initial-scale=1.0">' . "\n";
$html .= '    <title>เว็บไซต์ PHP สูตรคูณและบวกเลข</title>' . "\n";
$html .= '    <style>' . "\n";
$html .= '        body { font-family: Arial, sans-serif; background: #f5f5f5; color: #333; margin: 0; padding: 20px; }' . "\n";
$html .= '        .container { max-width: 700px; margin: auto; background: #fff; padding: 20px; border-radius: 8px; box-shadow: 0 2px 10px rgba(0,0,0,0.1); }' . "\n";
$html .= '        h1, h2 { color: #0056b3; }' . "\n";
$html .= '        form { margin-bottom: 24px; }' . "\n";
$html .= '        label { display: block; margin-bottom: 8px; font-weight: bold; }' . "\n";
$html .= '        input[type="number"] { width: 100%; padding: 10px; margin-bottom: 12px; border: 1px solid #ccc; border-radius: 4px; }' . "\n";
$html .= '        button { padding: 10px 18px; background: #0056b3; color: #fff; border: none; border-radius: 4px; cursor: pointer; }' . "\n";
$html .= '        button:hover { background: #004494; }' . "\n";
$html .= '        .result { background: #e9f5ff; border-left: 4px solid #007bff; padding: 14px; margin-bottom: 16px; }' . "\n";
$html .= '        .error { background: #ffe9e9; border-left: 4px solid #d9534f; padding: 14px; margin-bottom: 16px; }' . "\n";
$html .= '        ul { padding-left: 20px; }' . "\n";
$html .= '    </style>' . "\n";
$html .= '</head>' . "\n";
$html .= '<body>' . "\n";
$html .= '    <div class="container">' . "\n";
$html .= '        <h1>เว็บไซต์ PHP</h1>' . "\n";
$html .= '        <p>เลือกใช้งานตามฟังก์ชันที่ต้องการ:</p>' . "\n";

if ($errorMessage) {
    $html .= '        <div class="error">' . h($errorMessage) . '</div>' . "\n";
}

$html .= '        <section>' . "\n";
$html .= '            <h2>1) ป้อนตัวเลขเพื่อแสดงสูตรคูณ</h2>' . "\n";
$html .= '            <form method="post">' . "\n";
$html .= '                <label for="multiplier">ตัวเลข:</label>' . "\n";
$html .= '                <input type="number" id="multiplier" name="multiplier" value="' . h($multiplier) . '" required>' . "\n";
$html .= '                <input type="hidden" name="action" value="multiply">' . "\n";
$html .= '                <button type="submit">แสดงสูตรคูณ</button>' . "\n";
$html .= '            </form>' . "\n";

if ($multiplierResult !== null) {
    $html .= '                <div class="result">' . "\n";
    $html .= '                    <strong>สูตรคูณของ ' . h($multiplier) . ':</strong>' . "\n";
    $html .= '                    <ul>' . "\n";
    foreach ($multiplierResult as $line) {
        $html .= '                        <li>' . h($line) . '</li>' . "\n";
    }
    $html .= '                    </ul>' . "\n";
    $html .= '                </div>' . "\n";
}

$html .= '        </section>' . "\n";
$html .= '        <section>' . "\n";
$html .= '            <h2>2) ป้อนตัวเลข 2 ตัวเพื่อนำไปบวกกัน</h2>' . "\n";
$html .= '            <form method="post">' . "\n";
$html .= '                <label for="first_number">ตัวเลขตัวที่ 1:</label>' . "\n";
$html .= '                <input type="number" id="first_number" name="first_number" value="' . h($firstNumber) . '" required>' . "\n";
$html .= '                <label for="second_number">ตัวเลขตัวที่ 2:</label>' . "\n";
$html .= '                <input type="number" id="second_number" name="second_number" value="' . h($secondNumber) . '" required>' . "\n";
$html .= '                <input type="hidden" name="action" value="add">' . "\n";
$html .= '                <button type="submit">คำนวณผลรวม</button>' . "\n";
$html .= '            </form>' . "\n";

if ($sumResult !== null) {
    $html .= '                <div class="result">' . "\n";
    $html .= '                    <strong>ผลบวกของ ' . h($firstNumber) . ' และ ' . h($secondNumber) . ' คือ ' . h($sumResult) . '</strong>' . "\n";
    $html .= '                </div>' . "\n";
}

$html .= '        </section>' . "\n";
$html .= '    </div>' . "\n";
$html .= '</body>' . "\n";
$html .= '</html>' . "\n";

echo $html;
