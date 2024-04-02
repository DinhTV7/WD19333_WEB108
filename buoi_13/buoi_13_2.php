<?php
session_start();

if (isset($_SESSION["tan_dang_nhap"]) && isset($_SESSION["mat_khau"])) {
    echo $_SESSION["tan_dang_nhap"];
    echo "</br>";
    echo $_SESSION["mat_khau"];
}

echo "</br>------------------------------------</br>";

if (isset($_COOKIE["name"]) && isset($_COOKIE["class"])) {
    echo $_COOKIE["name"];
    echo "</br>";
    echo $_COOKIE["class"];
}