<?php
// // Khai báo 1 mảng liên hợp các thông tin
// // Họ tên, mã sinh viên, lớp của nyc
// // Sử dụng foreach để hiển thị toàn bộ thông tin ra màn hình

// $arrNYC = [
//     "ho_ten" => "Nguyễn Thị A",
//     "ma_sv" => "PH12345",
//     "lop" => "WD19333"
// ];

// foreach ($arrNYC as $value) {
//     echo $value . "</br>";
// }


// // Mảng đa chiều
// // là một mảng chứa 1 hoặc nhiều mảng khác

// // Mảng tuần tự 2 chiều
// $arr_1 = [
//     [ 1, 2 ],
//     [ 3, 4 ],
//     [ 5, 6, 7 ]
// ];

// // In ra giá trị
// // Cú pháp: $ten_mang[Vị trí mảng cần truy cập][Vị trí của phần tử]
// echo $arr_1[0][0];
// echo $arr_1[2][0];
// echo $arr_1[2][2];
// echo "</br>";

// // Sử dụng foreach để in ra toàn bộ các số trong mảng arr_1
// foreach ($arr_1 as $item)
// {
//     var_dump($item);
//     echo "</br>";
//     foreach ($item as $value) 
//     {
//         echo $value;
//         echo "</br>";
//     }
// }
// // Tính tổng giá trị các phần tử trong mảng trên
// $tong = 0;
// foreach ($arr_1 as $item)
// {
//     foreach ($item as $value) 
//     {
//         $tong += $value;
//     }
// }
// echo $tong;

// Mảng liên hợp 2 chiều
// Đây chính là mảng dữ liệu mà Database tra ra cho chúng ta
$arrNYC_2 = [
    [
        "ho_ten" => "Nguyễn Thị A",
        "ma_sv" => "PH12345",
        "lop" => "WD19333"
    ],
    [
        "ho_ten" => "Nguyễn Thị B",
        "ma_sv" => "PH54321",
        "lop" => "WD19333"
    ],
    [
        "ho_ten" => "Nguyễn Thị C",
        "ma_sv" => "PH12345",
        "lop" => "WD19333"
    ]
];

// // In ra giá trị
// // Cú pháp: $ten_mang[vị trí mảng cần truy cập][key]
// echo "</br>";
// echo $arrNYC_2[0]["ho_ten"];
// echo "</br>";
// // Hiển thị ra tất cả thông tin của người thứ 2
// echo $arrNYC_2[1]["ho_ten"];
// echo "</br>";
// echo $arrNYC_2[1]["ma_sv"];
// echo "</br>";
// echo $arrNYC_2[1]["lop"];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Danh sách người yêu cũ</h1>
    <!-- Hiển thị toàn bộ thông tin nyc của mảng trên ra table -->
    <table border="1">
        <thead>
            <th>STT</th>
            <th>Họ tên</th>
            <th>Mã sinh viên</th>
            <th>Lớp</th>
        </thead>
        <tbody>
            <?php
            $stt = 1;
            foreach ($arrNYC_2 as $item) :
            ?>
                <!-- Công việc cần lặp -->
                <tr>
                    <td><?= $stt++ ?></td>
                    <td><?php echo $item["ho_ten"] ?></td>
                    <td><?php echo $item["ma_sv"] ?></td>
                    <td><?php echo $item["lop"] ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>

</html>

<!-- 
    BÀI TẬP:
        Tạo mảng thông tin 3 sinh viên gồm các thuộc tính
        Họ tên, Năm sinh, Điểm trung bình
        Hiển thị toàn bộ thông tin sinh viên ra HTML dưới dạng table

        Tạo 1 cốt Trạng thái ở cuối bảng hiển thị
        Nếu điểm TB < 5 hiển thị "Toạch", >= 5 hiển thị "Qua môn"

        Tạo 1 cột Tuổi ở cuối bảng
        Thực tính tuổi và hiển thị ra
        Nếu tuổi < 18 thì màu backgroub là màu đỏ
        Nếu tuổi >= 18 thì màu backgroub là màu xanh (green)
     -->