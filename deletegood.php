<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "departmentstore";
$conn = new mysqli($servername, $username, $password, $dbname);
mysqli_set_charset($conn, 'utf8');
$id = $_GET['id'];
$sql = "DELETE FROM goods WHERE goodsID = '$id' ";
mysqli_query($conn, $sql) or die("DELETE จากตาราง book มีข้อผิดพลาดเกิดขึ้น"
    . mysqli_error());
mysqli_close($conn);
header("Location:show.php");
