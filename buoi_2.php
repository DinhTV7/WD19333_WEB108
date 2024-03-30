<?php
    // Khai báo biến
    // Bắt buộc biến trong PHP phải có $tên_biến
    $a = 5;

    echo $a;

    // Cách nối chuỗi
    echo "Số " . $a . " là số lẻ";

    // Có thể hiển thị nhiều giá trị 
    // bằng cách sử dụng dấu ,
    $b = 6;
    echo $a, $b;

    // Các kiểu dữ liệu
    // Kiểu số nguyên
    $soNguyen = 2005;
    // Kiểu số thực
    $soThuc = 2.5;
    // Kiểu boolean
    $booLean = true; // Hoặc false
    // Kiểu null
    $myNull = null; // Biến ko có gì hết (trống rỗng)
    // Kiểu string
    $myString = "Tạ Văn Định";

    // Khai báo thông tin của 3 nyc
    // (Họ tên, năm sinh, chiều cao, cân nặng)
    // Hiển thị ra màn hình mỗi nyc 1 dòng
    // Các thông tin ngăn cách nhau bởi dấu -
    $hoTen = "Tạ Văn Định";
    $namSinh = 2005;
    $chieuCao = 1.73;
    $canNang = 60;
    echo $hoTen . " - " . 
        $namSinh  . " - " . 
        $chieuCao . "m - " . 
        $canNang .  "kg";

    // Nhắc lại toán tử
    // Toán tử số học:
    // +, -, *, % (Chia lấy phần dư), / (Chia lấy phần nguyên), ** (Lũy thừa)
    
    // Toán tử so sánh
    // >, <, >=, <=
    // == So sánh bằng
    // === So sánh cả giá trị và kiểu dữ liệu
    // != So sánh không bằng
    // !== Không bằng giá trị hoặc kiểu dữ liệu
    // <> Khác
    // x <=> y: nếu giá trị của x bằng giá trị của y thì nó trả về 0
    // ngược lại nếu giá trị x lớn hơn giá trị y thì trả về 1
    // nếu giá trị y lớn hơn giá trị x thì trả về -1

    // Toán tử logic: && và ||

    // Toán tử gán
    // x = y    x = y   gán giá trị y cho x
    // x += y   x = x + y   cộng thêm y cho x
    // x -= y   x = x - y   trừ x đi y giá trị
    // x *= y   x = x * y   nhân thêm y lần cho x
    // x /= y   x = x / y   chia y lần giá trị x
    // x %= y   x = x % y   chia lấy phần dư giá trị x

    // Toán tử tăng giảm
    echo "</br>";
    $x = 5;
    $y = $x++; // trả về giá trị gốc trước khi nó thay đổi
    // $z = ++$x; // Thay đổi biến trước sau đó trả về giá trị
    echo $y;
    echo $x;
    // echo $z;

    // Câu điều kiện
    // if ( điều kiện ) { 
    //      câu lệnh 1
    // } else { 
    //     câu lệnh 2
    // }

    // Cho 1 số nguyên. 
    // Kiểm tra xem số đó là sỗ chẵn hay số lẻ
    $number = 9;
    if ($number % 2 == 0) {
        echo "Số " . $number . " là số chẵn";
    } else {
        echo "Số " . $number . " là số lẻ";
    }

    // Câu điều kiện if - else if
    // if ( điều kiện 1 ) { 
    //      câu lệnh 1
    // } else if ( điều kiện 2 ) { 
    //     câu lệnh 2
    // } else if ( điều kiện n ) { 
    //     câu lệnh n
    // } else {
    //     câu lệnh
    // }

    // Bài tập: Tính phương trình bậc 1: ax + b = 0

    // Bài lab 1:
    // Bài 1: Tính phương trình bậc 2: ax^2 + bx +c =0
    // Check a = 0 quay về giải pt bậc 1 
    // Check a != 0 => tính delta -> delta = 0, > 0, < 0

    // Bài 2: Cho các thông tin họ tên, năm sinh,
    // giới tính (nam là 0, nữ là 1) của nyc
    // Kiểm tra nyc có đủ tuổi đi NVQS hay không
    // Hiển thị: Ông/Bà có/không đủ tuổi đi NVQS
    // Ông/Bà dựa vào giới tính là 0/1
    // tuổi = năm hiện tại - năm sinh
    // năm hiện tại search "get current year in php"
    // >=18 và <= 27 thì đủ tuổi đi NVQS
?>