<!DOCTYPE html>
<html>

<head>
    <title>Update Table Book</title>
    <meta charset="utf-8">
</head>

<body>
    <?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "departmentstore";
    $conn = new mysqli($servername, $username, $password, $dbname);
    mysqli_set_charset($conn, 'utf8');
    mysqli_select_db($conn, $dbname);
    $sqltxt = mysqli_query($conn, "SELECT * FROM goods order by goodsID")
        or die(mysqli_error($conn));

    echo "<CENTER><H3>Show Goods</H3></CENTER>";
    echo '<div align = "center"> <A HREF="addgood1.php"><H3>add goods</H3></A></div>';
    echo "<table width=\"800\" border=\"0\" bordercolor=\"D1D7DA\"";
    echo "align = \"center\" valign = \"top\" >";
    echo " <br><b><tr align=\"center\" bgcolor=\"#0099CC\">";
    echo "<td width =\"30\" align=\"center\">#</font></td>";
    echo "<td width =\"100\" align=\"center\" >Goods ID</td>";
    echo "<td align=\"center\" width = \"200\">Goods Name</td>";
    echo "<td align=\"center\" width = \"200\">Goods Price</td>";
    echo "<td align=\"center\" width = \"200\">Goods Quantity</td>";
    echo "<td align=\"center\" width = \"200\">Edit</td>";
    echo "<td align=\"center\" width =\"80\" >Delete</a></font></td>\n</b>";
    $a = 1;
    while ($rs = mysqli_fetch_array($sqltxt)) {
        echo "<tr align=\"center\" bgcolor=\"#CCFFFF\">";
        echo "<td align=\"center\" bgcolor =\"#0099CC\">$a</td>";
        echo "<td align=\"center\"> ";
        echo "<a href=\"detailbook.php?id=$rs[0]\">$rs[0]</a></td>";
        echo "<td align=\"center\">$rs[1]</td>";
        echo "<td align=\"center\">$rs[2]</td>";
        echo "<td align=\"center\">$rs[3]</td>";
        echo "<td align=\"center\"> <a href=\"editgood.php?id=$rs[0]\" ";
        echo '<A HREF="editgood.php?goodsID=$rs[0]">Edit</A>';
        echo "<td align=\"center\"> <a href=\"deletegood.php?id=$rs[0]\" ";
        echo "onclick=\"return confirm(' ยืนยันการลบข้อมูล $rs[1] ')\">[ลบ] ";
        echo "</a></font></td>\n";
        $a++;
    }
    ?>
    </tr>
    </table><BR><BR>
    <?php
    mysqli_close($conn);
    ?>