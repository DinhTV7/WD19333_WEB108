<?php
// Vòng lặp PHP
// Khi tôi muốn thực hiện 1 công việc (đoạn code nào đó)
// lặp đi lặp lại nhiều lần

// Vòng lặp for
// Sử dụng khi đã biết trước điều kiện dừng
// Cú pháp: 
// for (giá trị trị khởi tạo; Điều kiện; Bước nhảy) 
// { khối lệnh thực thi }

// Hiển thị ra màn hình lần lượt các số từ 1 -> 10
for ($i = 1; $i <= 10; $i++) {
    echo $i;
}

// Vòng lặp while
// Sử dụng không cần biết trước điều kiện dừng
// Cú pháp
// while (Điều kiện) {khối lệnh thực thi} 
// Hiển thị ra màn hình lần lượt các số từ 1 -> 10
$a = 1;
while ($a <= 10) {
    echo $a;
    $a++;
}


// Vòng lặp do...while...
// Thi hành câu lện trước, sau đó sẽ kiểm tra điều kiện
// Nếu điều kiện vẫn đúng thì tiến hành lặp lại
// Hiển thị ra màn hình lần lượt các số từ 11 -> 20
// Cú pháp:
// do { câu lệnh } while ( điều kiện )
$b = 11;
do {
    echo $b;
    $b++;
} while ( $b <= 20 );

// Bài 1: Tính tổng các số từ 1 -> 100
echo('</br>');
$tong = 0 ; 
for($x = 1; $x <= 100; $x++){
    $tong += $x;
}
echo($tong);

$tong2 = 0;
$x2 = 1;
while ( $x2 <= 100 ){
    $tong2 += $x2;
    $x2++;
}
echo $tong2;
echo('</br>');
// Bài 2: In ra màn hình bảng cửu chương 9
// Bài 3: Tìm các số nguyên tố < 100



