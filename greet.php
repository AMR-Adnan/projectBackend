<?php
// استرجاع الاسم من معامل GET
$name = $_GET['name'] ?? 'ضيف'; // استخدام GET للمعاملات البسيطة
?>

<!DOCTYPE html>
<html dir="rtl" lang="ar">
<head>
    <meta charset="UTF-8">
    <title>صفحة الترحيب</title>
</head>
<body>
    <h1>ترحيب</h1>
    <p>مرحباً، <?php echo htmlspecialchars($name); ?>!</p>
    
    <form method="GET" action="greet.php"> <!-- استخدام GET للبحث والمعلومات غير الحساسة -->
        <label for="name">أدخل اسمك:</label>
        <input type="text" id="name" name="name">
        <button type="submit">ترحيب</button>
    </form>
</body>
</html>