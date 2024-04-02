<?php
// SESSION và COOKIE

// Giống nhau: Đều dùng để lưu trữ dữ liệu tạm thời

// Khác nhau
// - SESSION:
//      + Dữ liệu sẽ được lưu trữ trên máy chủ
//      + SESSION sẽ tồn tại trong 1 phiên làm việc của người dùng
//      + SESSION sẽ bị xóa khi người dùng đóng trình duyệt hoặc tự xóa nó

// - COOKIE:
//      + Dữ liệu được lưu trữ trên chính máy tính của người dùng
//      + Chỉ toàn tại trong 1 khoảng thời gian được xác định
//      + Nó sẽ tự động bị xóa khi hết thời gian hoặc khi đóng trình duyệt

// SESSION:
// Bắt đầu 1 phiên làm việc với SESSION
session_start();

$username = "Tạ Văn Định";
$password = "dinhdz";

// Thiết lập giá trị trên SESSION
$_SESSION["tan_dang_nhap"] = $username;
$_SESSION["mat_khau"] = $password;

if (isset($_SESSION["tan_dang_nhap"]) && isset($_SESSION["mat_khau"])) {
    echo $_SESSION["tan_dang_nhap"];
    echo "</br>";
    echo $_SESSION["mat_khau"];
}

// Xóa SESSION
unset($_SESSION["tan_dang_nhap"]);

// Kết thúc 1 phiên làm việc
session_destroy();

echo "</br>------------------------------------</br>";

// COOKIE
$ho_ten = "Gì gì đó";
$lop = "WD19333";

// Thiết lập giá trị cho COOKIE
setcookie("name", $ho_ten, time() + 10);
setcookie("class", $lop, time() + 10);

if (isset($_COOKIE["name"]) && isset($_COOKIE["class"])) {
    echo $_COOKIE["name"];
    echo "</br>";
    echo $_COOKIE["class"];
}

// Xóa COOKIE
setcookie("name", $ho_ten, time() - 11);
setcookie("class", $lop, time() - 11);

