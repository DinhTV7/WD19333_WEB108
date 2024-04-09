<?php
// Hiển thị ra danh sách người dùng trong DB
// include("a");
// require();
// include_once();
// require_once();

require_once("connect.php");

// Viết câu truy vấn để thao tác với CSDL
$sql_listUser = "SELECT * FROM users";
// Chuẩn bị truy vấn
$stmt_listUser = $pdo->prepare($sql_listUser);
// Chạy câu truy vấn
$stmt_listUser->execute();
// Hiển thị lấy ra dữ liệu
// fetchAll(): Dùng để trả ra nhiều dữ liệu
$listUser = $stmt_listUser->fetchAll(PDO::FETCH_ASSOC);
// PDO::FETCH_ASSOC dùng đề xóa key thừa ko có trong DB

// var_dump($listUser);
// Hiển thị toàn bộ người dùng trong mảng $listUser ra table
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Danh sách người dùng</title>
</head>

<body>
    <h3>Danh sách người dùng</h3>
    <a href="create.php">
        <button>Thêm mới</button>
    </a>
    <table border="1">
        <thead>
            <th>STT</th>
            <th>Name</th>
            <th>Email</th>
            <th>Phone</th>
            <th>Status</th>
            <th>Action</th>
        </thead>
        <tbody>
            <?php foreach ($listUser as $key => $value) : ?>
                <tr>
                    <td><?= ++$key ?></td>
                    <td><?= $value["name"] ?></td>
                    <td><?= $value["email"] ?></td>
                    <td><?= $value["phone"] ?></td>
                    <td><?= $value["status"] == 1 ? "Hoạt động" : "Ngừng hoạt động" ?></td>
                    <td>
                        <a href="update.php?id_user=<?= $value["id"] ?>">
                            <button>Sửa</button>
                        </a>
                        <a href="delete.php?id_user=<?= $value["id"] ?>" 
                            onclick="return confirm('Bạn có muốn xóa hay không?')">
                            <button>Xóa</button>
                        </a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>

</html>

<!-- 
    Tạo nút Thêm, Sau khi ấn vào nút thêm sẽ chuyển sang trang 
    thêm người dùng (Tạo form có đầy đủ các ô input của các trường)
    Sử dụng method POST và hiển thị ra thông tin đã nhập
 -->