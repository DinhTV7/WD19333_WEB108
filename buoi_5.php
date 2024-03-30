<?php
// Cho 2 số tự nhiên, tính tổng 2 số và in ra màn hình

$so1 = 5;
$so2 = 10;

$tong = $so1 + $so2;
// echo $tong;

// Hàm trong PHP
// Hàm là các khối code dùng để thực hiện 1 công việc
// cụ thể nào đó có tính tái sử dụng 
// và chỉ thực thi khi được gọi

// Cấu trúc
function ten_ham() {
    // Khối code
}

// Cách gọi hàm
ten_ham();

// Hàm trả về
// Là hàm sẽ trả về 1 kết quả cụ thể nào đó (return)

// Hàm trả về có tham số
function tinhTong($a, $b) { // Tham số được truyền vào giữa 2 ngoặc tròn
    $tong = $a + $b;
    return $tong;
}
$x = 3;
$y = 4;
echo tinhTong($y, $x); 
// Giá trị truyền vào tham số sẽ được gán tương ứng theo vị trí

// Hàm trả về không có tham số
function getRandomNumber() {
    $number = rand(1, 38);
    return $number;
}
echo getRandomNumber();

// Hàm không trả về
// Là hàm không trả về 1 kết quả cụ thể (ko có return)

// Hàm không trả về có tham số
function sayHello($name) {
    echo "Xin chào " . $name;
}
sayHello("Tạ Văn Định 3");

// Hàm không trả về không có tham số
function xinChao() {
    echo "Xin chào các bạn";
}
xinChao();

// Lab 2:
// Bài 1: Cho giá trị chiều dài, chiều rộng
// Tính chu vi và diện tích của hình chữ nhật

// Bài 2: Cho giá trị a và b
// Giải phương trình bậc 1: ax + b = 0

// Bài 3: Cho 3 giá trị đáy lớn, đáy bé, chiều cao
// Tính diện tích hình thang