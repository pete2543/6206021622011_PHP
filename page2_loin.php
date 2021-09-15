<?php
$employeeUsername = $_POST['employeeUsername'];
$employeePassword = $_POST['employeePassword'];
$servername = "localhost";
$username = "root";
$password = "";
$dbName = "departmentstore";
$conn = mysqli_connect($servername, $username, $password);
echo '<center>';
if (!$conn)
    die("Can't connect with mySQL");
mysqli_select_db($conn, $dbName) or die("Cannot select departmentStore database");
$sql = "SELECT * FROM employee WHERE employeeUsername='$employeeUsername' AND employeePassword='$employeePassword'";
$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result)) {
    $employee = mysqli_fetch_array($result);
    session_start();
    $_SESSION['employeeUsername'] = $employee[2];
    $_SESSION['employeePassword'] = $employee[3];
    $_SESSION['employeePermission'] = $employee[4];
    mysqli_close($conn);
    header("location:menu.php");
    echo '</center>';
} else {
    echo "Unable to access the system";
    echo "Wrong username or password";
}
