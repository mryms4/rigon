<?php

$baseUrl = "http://localhost/maryamsoufi7979";
// اتصال به دیتابیس
$conn = mysqli_connect('localhost', 'root', 'maryam1379', 'mydb');

// بررسی اتصال
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>

