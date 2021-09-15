<?php
echo "<br><br>";
$ImageFile = $_FILES['ImageFile']['name'];
$MAX_FILE_SIZE = $_POST['MAX_FILE_SIZE'];
if (isset($ImageFile)) //ตรวจสอบว่ามีตัวแปร ImageFile อยู่หรือไม่
{
    $ImageFile_name = $_FILES['ImageFile']['name'];
    $ImageFile_type = $_FILES['ImageFile']['type'];
    $ImageFile_size = $_FILES['ImageFile']['size'];
    echo "File name : " . $ImageFile_name . "<br>";
    echo "File type : " . $ImageFile_type . "<br>";
    echo "File size : " . $ImageFile_size . "<br>";
    if ($ImageFile_type == "image/gif" or $ImageFile_type == "image/jpeg") {

        if ($ImageFile_size <= $MAX_FILE_SIZE) {
            @copy($ImageFile,"pictures/$ImageFile_name");//picturesเป็นForderสำหรับเก็บภาพ
            @unlink($ImageFile);
            echo "<li>บันทึกข้อมูลเรียบร้อย<br>";
            echo "<a href='ch10-7_form.php'>กลับไป upload </a><br>";
            echo "<image src='pictures/$ImageFile_name' width='320'height='240'>";
        } else {
            echo "<li>รูปภาพมีขนาดใหญ่กว่า 500 kb.<br>";
            echo "<input type=\"button\" value=\"กลับไปแก้ไข\" ";
            echo "onclick= \"history.back();\" style=\"cursor:hand\">";
        } //end max_file_size
    } else {
        echo "<li>รูปภาพไม่ใช่ไฟล์ประเภท GIF หรือ JPG <br>";
        echo "<input type=\"button\" value=\"กลับไปแก้ไข\" ";
        echo "onclick= \"history.back();\" style=\"cursor:hand\">";
    } // end image_type
}// end isset
?>
