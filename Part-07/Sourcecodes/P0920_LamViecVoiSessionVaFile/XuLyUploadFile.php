<?php

//Xử lý upload file trong php
if(isset($_REQUEST['btnThucHien']))
{
    if($_FILES['fUpload']['error'] > 0)
    {
        echo "Có lỗi xảy ra trong quá trình tải file. Chi tiết: " . $_FILES['fUpload']['error']. "<br>";
    }
    else
    {
        echo "Tên file: " . $_FILES['fUpload']['name'] . "<br>";
        echo "Kiểu file: " . $_FILES['fUpload']['type'] . "<br>";
        echo "Kích thước: " . $_FILES['fUpload']['size'] . "<br>";
        echo "Thư mục tạm: " . $_FILES['fUpload']['tmp_name'] . "<br>";

        //Di chuyển file vào thư mục của dự án
        move_uploaded_file($_FILES['fUpload']['tmp_name'], "images/" . $_FILES['fUpload']['name']);
        echo "Thực hiện tải file thành công !<br>";
    }
}
?>
<html>
<head>
    <title>Xử lý upload với file</title>
</head>
<body>
<form method="post" enctype="multipart/form-data">
    <fieldset>
        <legend>Chọn file cần upload</legend>
        <table>
            <tr>
                <td>
                    Chọn file:
                </td>
                <td>
                    <input type="file" name="fUpload">
                </td>
            </tr>
            <tr>
                <td></td>
                <td>
                    <input type="submit" name="btnThucHien" value="Thực hiện"/>
                </td>
            </tr>
        </table>
    </fieldset>
</form>
</body>
</html>
