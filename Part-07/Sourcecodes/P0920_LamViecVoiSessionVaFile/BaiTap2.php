<?php
$noiDung = "";
$thongBao = "";
if(isset($_REQUEST['btnGhi']))
{
    $noiDung = $_POST['txtNoiDung'];

    $file = fopen('Data2.txt', 'a+');

    //Ghi nội dung
    fwrite($file, $noiDung);

    //Đóng luồng
    fclose($file);
    $thongBao = "Ghi file thành công !";
}

//Đọc file
if(isset($_REQUEST['btnDoc']))
{
    //Lấy nội dung từ file
    $noiDung = file_get_contents('Data2.txt');
}
?>
<html>
<head>
    <title>Đọc và ghi file lên giao diện</title>
</head>
<body>
<form method="post">
    <table>
        <tr>
            <td>Nội dung:</td>
            <td>
                <textarea name="txtNoiDung" rows="10">
                    <?php echo $noiDung?>
                </textarea>
            </td>
        </tr>
        <tr>
            <td></td>
            <td>
                <input type="submit" name="btnDoc" value="Đọc file"/>
                <input type="submit" name="btnGhi" value="Ghi file"/>
            </td>
        </tr>
        <tr>
            <td></td>
            <td>
                <?php echo $thongBao?>
            </td>
        </tr>
    </table>
</form>
</body>
</html>
