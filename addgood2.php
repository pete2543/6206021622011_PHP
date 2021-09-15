<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?php
if (isset($_GET['submit'])) {
    $id = $_GET['id'];
    $name = $_GET['name'];
    $price = $_GET['price'];
    $quantity = $_GET['quantity'];

    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "departmentstore";

    $conn = new mysqli($servername, $username, $password);
    mysqli_set_charset($conn, 'utf8');
    mysqli_select_db($conn, $dbname);
    $sql = "INSERT INTO goods (goodsID, goodsName, GoodsPrice,GoodsQuantit)
        VALUES ('$id', '$name', '$price','$quantity')";
    mysqli_query($conn, $sql);

   echo "Save Success ";
   echo '<A HREF="addgoods1.php">back</A>';
}

?>

</body>
</html>