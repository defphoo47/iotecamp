<?php
session_start(); // เริ่มต้น Session
session_destroy(); // ลบข้อมูลทั้งหมดใน Session

// เปลี่ยนเส้นทางไปยังหน้าเข้าสู่ระบบ
header("Location: login.html");
exit();
?>
