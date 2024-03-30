<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Xin chào</h1>
    <?php
    if (isset($_GET["ho_ten"]) && isset($_GET["lop"])) {
        $name = $_GET["ho_ten"];
        $class = $_GET["lop"];
    }
    ?>
    <h1><?= $name ?></h1>
    <h1><?= $class ?></h1>
</body>
</html>
<?php
    $users = [
        [
            "username" => "DinhTV7",
            "password" => "12345678",
            "email" => "dinhtv7@fpt.edu.vn",
            "phone" => "0987654321",
            "status" => 0
        ],
        [
            "username" => "TrungND78",
            "password" => "87654321",
            "email" => "trungnd78@fpt.edu.vn",
            "phone" => "0987654321",
            "status" => 1
        ]
    ]
?>