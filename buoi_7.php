<?php
// Mảng trong PHP là 1 tập hợp các phần tử
// có hoặc không cùng kiểu dữ liệu

// Mảng có 2 thành phần: Vị trí và giá trị
// Vị trí bắt đầu từ 0 -> n-1 
// (n là tổng số phần tử trong mảng)

// Cách khai báo mảng
// Cách 1:
$mang_1 = array(1, 2, "Định", 4.5, true); // Cách khai báo cũ
// Cách 2:
$mang_2 = [1, 2, "DinhTV7", 9.5, "Đẹp trai"];
// Sử dụng cách này để khai báo mảng

// echo $mang_1; 
// Sai vì echo ko được sử dụng để hiển thị mảng

// Hiển thị ra thông tin cấu trúc của mảng
var_dump($mang_1); 
// thường dùng trong việc debug
echo "</br>";
// Hiển thị chi tiết cấu trúc của mảng, 
print_r($mang_1);
// Chỉ hiển thị vị trí và giá trị 
echo "</br>";

// Truy xuất giá trị của 1 phần tử trong mảng
// Cú pháp: $tên_mảng[vị trí];
echo $mang_2[2];
echo $mang_2[4];

// Mảng có 3 loại
// Loại 1: Mảng rỗng
$arr = [];

// Loại 2: Mảng tuần tự
// Là mảng mà vị trí các phần tử được xác định sẵn
// là các số nguyên dương bắt đầu từ 0

echo "</br>";
$phones = ["apple", "samsung", "oppo", "xiaomi"];
// In ra màn hình tất cả các giá trị 
// của phần tử trong mảng phones

echo $phones[0];
echo "</br>";
echo $phones[1];
echo "</br>";
echo $phones[2];
echo "</br>";
echo $phones[3];
echo "</br>";

// Duyệt mảng phones bằng for
// count() là hàm dùng để đếm tổng số phẩn tử trong mảng
echo count($phones);
for ($i = 0; $i < count($phones); $i++) {
    echo $phones[$i] . " ";
}
echo "</br>";

// Duyệt mảng bằng foreach
// foreach chuyên dùng để duyệt mảng trong PHP
// Cú pháp foreach ($tên_mảng_cần_duyệt as $key) { công việc }
// $phones = ["apple", "samsung", "oppo", "xiaomi"];
foreach ($phones as $phone) {
    echo $phone . " ";
}

// Lab 3:
// Bài 1: Cho 1 mảng các số nguyên gồm 10 phần tử
// Hiển thị ra các phần tử có giá trị lẻ

// Bài 2: Đếm và tính tổng các phần tử có giá trị chẵn
// trong mảng bên trên

// Bài 3: Tìm giá trị lớn nhất trong mảng trên
// 3 bài đều làm theo 2 cách: for và foreach
