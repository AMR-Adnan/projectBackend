<?php
// معالجة إرسال النموذج
if ($_SERVER['REQUEST_METHOD'] === 'POST') { // استخدام POST لإرسال البيانات بشكل آمن
    $name = $_POST['name'] ?? '';
    $color = $_POST['color'] ?? '#000000';
    
    // تخزين البيانات في الجلسة لنقلها لصفحة النتائج
    session_start();
    $_SESSION['name'] = $name;
    $_SESSION['color'] = $color;
    
    // إعادة التوجيه لمنع إعادة إرسال النموذج
    header("Location: result.php", true, 303); // 303 See Other مناسبة لنمط POST-redirect-GET
    exit();
}
?>

<!DOCTYPE html>
<html dir="rtl" lang="ar">
<head>
    <meta charset="UTF-8">
    <title>إرسال البيانات</title>
</head>
<body>
    <h1>أدخل معلوماتك</h1>
    <form method="POST" action="form.php"> <!-- استخدام POST لإرسال بيانات النموذج -->
        <label for="name">اسمك:</label>
        <input type="text" id="name" name="name" required>
        
        <label for="color">لونك المفضل:</label>
        <input type="color" id="color" name="color" value="#ff0000">
        
        <button type="submit">إرسال</button>
    </form>
</body>
</html>