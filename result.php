<?php
session_start();

// استرجاع البيانات من الجلسة
$name = $_SESSION['name'] ?? 'ضيف';
$color = $_SESSION['color'] ?? '#000000';

// مسح بيانات الجلسة بعد الاستخدام
unset($_SESSION['name']);
unset($_SESSION['color']);
?>

<!DOCTYPE html>
<html dir="rtl" lang="ar">
<head>
    <meta charset="UTF-8">
    <title>نتيجة الإرسال</title>
</head>
<body>
    <h1>نتيجة الإرسال</h1>
    <p>مرحباً، <?php echo htmlspecialchars($name); ?>!</p>
    <p>لونك المفضل هو: 
        <span style="color: <?php echo htmlspecialchars($color); ?>">
            <?php echo htmlspecialchars($color); ?>
        </span>
    </p>
    <a href="form.php">إرسال نموذج آخر</a>
</body>
</html>