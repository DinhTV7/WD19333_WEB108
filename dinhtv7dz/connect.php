<?php
// - Kết nối PDO là 1 phương pháp trong PHP dùng để kết nối
//      và tương tác với CSDL
// - Ưu điểm là PDO cho phép kết nối nhiều loại CSDL khác nhau như
// MySQL, PostgreSQL, SQLite, SQL Server, .....

$host = "localhost";
$dbname = "web108_wd19333";
$username = "root";
$password = "";

try {
    // Tạo kết nối đến CSDL bằng PDO
    $pdo = new PDO("mysql:host=$host; dbname=$dbname", $username, $password);

    // Thiết lập chế độ lỗi
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // echo "Kết nối thành công";

} catch (PDOException $e) {

    echo "Lỗi kết nối CSDL: " . $e->getMessage();

}