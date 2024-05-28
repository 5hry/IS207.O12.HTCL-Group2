<?php
$servername = "app-db"; // Tên dịch vụ MySQL trong docker-compose.yml
$username = "user";
$password = "user";
$dbname = "is207_database";

// Tạo kết nối
$connect = new mysqli($servername, $username, $password, $dbname);
// Kiểm tra kết nối

if ($connect->connect_error) {
    die("Kết nối thất bại: " . $conn->connect_error);
}
?>
