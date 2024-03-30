<?php
$string = "Hello, World!";

// Hàm đếm số ký tự trong 1 chuỗi
echo strlen($string); // Trả về độ dài của 1 chuỗi
echo "</br>";

// Hàm đếm tổng số từ trong chuỗi
echo str_word_count($string);
echo "</br>";

// Hàm đảo ngược chuỗi
echo strrev($string);
echo "</br>";

// Hàm viết thường tất cả các ký tự trong chuỗi
echo strtolower($string);
echo "</br>";

// Hàm viết hoa tất cả các ký tự
echo strtoupper($string);
echo "</br>";

// Hàm cắt chuỗi
// Chuỗi cần cắt, Vị trí bắt đầu cắt, Số ký tự cần cắt
echo substr($string, 5, 5);
// Trong chuỗi string từ vị trí thứ 5 cắt ra 5 ký tự
echo "</br>";
echo substr($string, 7); 
// Nếu ko điền vị trí kết thúc 
// thì nó sẽ cắt từ vị trí bắt đầu đến hết
echo "</br>";

// Hàm thay thế chuỗi
// Chuỗi cần thay thế, Chuỗi thay thế, Chuỗi
echo str_replace("World", "PHP", $string);
echo "</br>";

// Tìm kiếm vị trí của chuỗi con trong chuỗi khác
echo strpos($string, "World");
echo "</br>";

// Giả sử bạn không biết đếm
// Cho chuỗi sau
$str = "Thay Dinh dep trai nhat Fpoly";
// Cắt ra từ thầy định
// Cắt ra từ Đẹp trai
// Thay thế từ đẹp trai thành xinh trai
