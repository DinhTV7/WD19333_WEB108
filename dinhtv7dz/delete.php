<?php
require_once("connect.php");

if (isset($_GET["id_user"])) {
    $id = $_GET["id_user"];

    // Viết câu truy vấn
    $sql_delete = "DELETE FROM users WHERE id = '$id' ";

    $stmt_delete = $pdo->prepare($sql_delete);

    $stmt_delete->execute();

    // Quay trở lại trang index sau khi xóa
    header("Location: index.php");
}