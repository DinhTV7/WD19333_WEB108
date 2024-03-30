<?php
// Mảng liên hợp
// là mảng mà vị trí của các phần tử được tự xác định
// và nó được gọi là các key

// Cách khai báo mảng liên hợp
// $ten_mang = [ key => giá trị ];
// Các key viết liền không dấu
// Một key chỉ tồn tại duy nhất 1 lần trong mảng
$arr = [
    "toi" => "I",
    "yeu" => "Love",
    "em" => "You"
];
// Hiển thị giá trị
// $ten_mang[key];
echo $arr["toi"];
echo $arr["yeu"];
echo $arr["em"];

// Khai báo 1 mảng thông tin cá nhân
// họ tên, ngày sinh, năm sinh, số điện thoại, giới tính
// Hiển thị toàn bộ thông tin ra màn hình
$info = [
    "ho_ten" => "Tạ Văn Định",
    "ngay_sinh" => "20/11/2005",
    "nam_sinh" => 2005,
    "so_dien_thoai" => "0987654321",
    "gioi_tinh" => "Nam"
];
$info["ho_ten"];
$info["ngay_sinh"];
$info["nam_sinh"];
$info["so_dien_thoai"];
$info["gioi_tinh"];
echo "</br>";
// Sử dụng foreach
foreach ($info as $item) {
    echo $item . " ";
}
echo "</br>";

// Lấy ra cả key và giá trị
foreach ($info as $nyc1 => $nyc2) {
    echo $nyc1 . " => " . $nyc2;
    echo "</br>";
}

$values = array_values($info);
// Duyệt mảng info và trả ra 1 mảng mới gồm các giá trị 
// của mảng info
var_dump($values);
echo "</br>";

$keys = array_keys($info);
var_dump($keys);
// Duyệt mảng info và trả ra 1 mảng mới gồm các key của
// mảng info

// Duyệt mảng info bằng vòng lặp for

// Khai báo 1 mảng liên hợp gồm điểm các môn đang học
// Tính trung bình cộng điểm các môn
// Tìm môn có điểm cao nhất
// Tìm môn có điểm thấp nhất
// Hiển thị các môn lại theo thứ tự điểm giảm dần