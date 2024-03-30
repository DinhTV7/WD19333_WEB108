<?php
// Một số hàm dùng sẵn để thao tác với mảng

// count: Đếm / Đếm tổng số phần tử trong mảng

// array_keys: Lấy toàn bộ các key trong mảng 
// và đưa vào 1 mảng khác

// array_values: Lấy toàn bộ các giá trị của phần tử trong mảng
// và đưa vào 1 mảng khác

$arr = [1, 2, 3, 4, 5, 6, 7, 8, 9];
// print_r($arr);
echo "</br>";

// Thêm 1 hoặc nhiều phần tử vào đầu mảng
// array_unshift($arr, "DinhTv7", "ABC", 6.5);

// Thêm 1 hoặc nhiều phần tử vào cuối mảng
// array_push($arr, "DinhTv7", "ABC", 6.5);

// Xóa phần tử cuối cùng trong mảng
// array_pop($arr);

// Xóa phần tử đầu tiên trong mảng
// array_shift($arr);

// Tìm kiếm phần tử trong mảng
// Tìm kiếm kiếm 1 giá trị trong mảng, 
// Nếu có thì sẽ trả về key (vị trí) của phần tử đó trong mảng
// Nếu ko có thì sẽ ko trả về gì cả
// echo array_search(10, $arr);
// Nếu có thì sẽ trả về TRUE còn ko có sẽ trả về FALSE
// var_dump(in_array(10, $arr));

// Kiểm tra xem đây có phải là mảng hay không
// Nếu là mảng thì trả về TRUE còn ko phải thì trả về FALSE
// var_dump(is_array($arr));

// Đưa mảng thành 1 chuỗi
// echo implode(" - ", $arr); 
// (Ký tự ngăn cách các phần tử, mảng cần chuyển)

// Đưa 1 chuỗi thành mảng
$string = "T A V A N D I N H";
// print_r(explode(" ", $string));

echo "</br>";
// print_r($arr);
?>

<!-- LÀM VIỆC VỚI FORM -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="">
        <!-- 
            action: chỉ định đích đến của dữ liệu khi người dùng ấn gửi
                (Nếu ko điền thì dữ liệu xử lý ở trang hiện tại)
            method: xác định phương thức HTTP sử dụng (GET và POST)
         -->
        <!-- input dùng để hiển thị hoặc truyền dữ liệu -->
        <input type="text" name="ho_ten">
        <!-- 
            name: chính là KEY
            sử dụng để xác định tên trường dữ liệu khi gửi lên server
         -->

        <button type="submit">SUBMIT</button>
    </form>

    <h2>Phương thức GET</h2>
    <!-- 
        GET
        - Dữ liệu được gửi lên URL, và sẽ hiển thị trực tiếp giá trị trên URL
        - Ưu điểm: Truyền tải dữ liệu qua các trang rất nhanh
        - Nhược điểm: Kém bảo mật nên thường được sử dụng trong các tác vụ nhỏ
            (search, Truyền dữ liệu qua các trang)
     -->
    <form action="buoi_11_action.php" method="GET">
        <label for="">Họ và tên:</label>
        <input type="text" name="ho_ten">

        <label for="">Lớp:</label>
        <input type="text" name="lop">

        <button type="submit">SUBMIT</button>
    </form>
    <?php 
        // Dữ liệu được gửi lên là 1 mảng liên hợp
        // có key chính là name trong input

        // Lấy ra toàn bộ dữ liệu
        var_dump($_GET);

        // Lấy ra từng giá trị
        // echo $_GET["ho_ten"];

        // Bắt buộc phải kiểm tra trước khi thao tác với dữ liệu
        // isset() Nếu có giá trị thì trả về TRUE còn ko có thì trả về FALSE
        if (isset($_GET["ho_ten"]) && isset($_GET["lop"])) {
            echo $_GET["ho_ten"];
            echo $_GET["lop"];
        }
    ?>

    <h2>Phương thức POST</h2>
    <!-- 
        POST:
        - Dữ liệu sẽ được gửi ngầm đi
        - Ưu điểm: Bảo mật cao hơn GET
        - Thường được dùng trong các tác vụ xử lý dữ liệu quan trọng
            (Đăng nhập đăng ký, thêm sửa dữ liệu,...)
     -->
    <form action="" method="POST">
        <label for="">Họ và tên:</label>
        <input type="text" name="ho_ten">

        <label for="">Lớp:</label>
        <input type="text" name="lop">

        <button type="submit">SUBMIT</button>
    </form>
    <?php
        // Lấy ra toàn bộ dữ liệu
        var_dump($_POST);

        // Bắt buộc phải kiểm tra trước khi thao tác với dữ liệu
        if (isset($_POST["ho_ten"]) && isset($_POST["lop"])) {
            echo $_POST["ho_ten"];
            echo $_POST["lop"];
        }
    ?>

    <!-- 
        Tạo 1 form đăng nhập sử dụng phương thức POST
        Nhập vào username và password
        Bắn dữ liệu sang 1 buoi_11_action
        Nếu username và password đều là "thaydinhdz"
        thì hiển thị ra màn hình "Thầy Định đẹp trai nhất FPOLY"
     -->

     <form action="buoi_11_action.php" method="POST">
        <label for="">username:</label>
        <input type="text" name="username">

        <label for="">password:</label>
        <input type="password" name="password">

        <button type="submit">SUBMIT</button>
    </form>

</body>
</html>