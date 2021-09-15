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
    $id = $_REQUEST['id'];
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "departmentstore";

    $conn = new mysqli($servername, $username, $password, $dbname);
    mysqli_set_charset($conn, 'utf8');
    mysqli_select_db($conn, $dbname);

    $sql="SELECT * FROM goods WHERE goodsID='$id'";
    $result = $conn->query($sql);
    $row = $result->fetch_array();
    
    ?>
    <form action="addgood2.php " method="get">
    <table align="center" border="1">
    <tr>
    <td align="center" colspan="2">Add Goods</td>
    </tr>
    <tr>
    <td width="150px">ID</td>
    <td><input type="number" name="id" value="<?php echo $row[0] ?>"></td>
    </tr>

    <tr>
    <td>Name</td>
    <td><input type="text" name="name"></td>
    </tr>

    <tr>
    <td> Price</td>
    <td><input type="number" name="price"></td>
    </td>
    </tr>
    
    <tr>
    <td> Quanity</td>
    <td><input type="number" name="quantity"></td>
    </td>
    </tr>
    
    <tr>
    <td align="center" colspan="2"> <input type="submit" name="submit">
    <input type="reset" name="clear"></td>
    </tr>
   
    
    </table>
    </form>
</body>
</html>