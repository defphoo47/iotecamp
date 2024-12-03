<?php
session_start(); // เริ่มต้น Session

// ตรวจสอบว่าผู้ใช้เข้าสู่ระบบหรือไม่
if (!isset($_SESSION['username'])) {
    // หากไม่ได้เข้าสู่ระบบ ให้เปลี่ยนเส้นทางไปที่หน้าเข้าสู่ระบบ
    header("Location: login.html");
    exit();
}

// แสดงข้อความต้อนรับ
$username = htmlspecialchars($_SESSION['username']); // ป้องกัน XSS
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome</title>
</head>
<body>
    <h1>Welcome, <?php echo $username; ?>!</h1>
    <p>You have successfully logged in.</p>
    <a href="logout.php">Logout</a>
</body>
</html>
