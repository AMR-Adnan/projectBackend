<?php
// عرض الوقت الحالي للسيرفر
date_default_timezone_set('Africa/Cairo'); // ضبط النطاق الزمني
$currentTime = date('Y-m-d H:i:s');
?>

<!DOCTYPE html>
<html dir="rtl" lang="ar">
<head>
    <meta charset="UTF-8">
    <title>تطبيق PHP</title>
</head>
<body>
    <h1>مرحباً بك في تطبيق PHP</h1>
    <p>وقت السيرفر الحالي: <?php echo htmlspecialchars($currentTime); ?></p>
    
    <h2>اختر إجراء:</h2>
    <ul>
        <li><a href="form.php">إرسال نموذج (POST)</a></li>
        <li><a href="greet.php">صفحة الترحيب (GET)</a></li>
    </ul>
</body>
</html>