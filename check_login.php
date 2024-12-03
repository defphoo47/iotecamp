<?php
// ข้อมูล username และ password ที่กำหนดไว้ล่วงหน้า
$valid_user = "admin";
$valid_pass = "1234";

// รับค่าจากฟอร์ม
$username = $_POST['username'];
$password = $_POST['password'];

// ตรวจสอบ username และ password
if ($username === $valid_user && $password === $valid_pass) {
    echo "Login successful. Welcome, " . htmlspecialchars($username) . "!";
} else {
    echo "Invalid username or password. Please try again.";
}
?>
