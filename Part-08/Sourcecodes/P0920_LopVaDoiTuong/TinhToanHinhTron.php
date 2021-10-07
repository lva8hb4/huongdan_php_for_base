<?php
//Khai báo lớp
require 'HinhTron.php';

//Khai báo biến
$banKinh = 0; $chuVi = 0; $dienTich = 0;

if(isset($_REQUEST['btnTinhToan'])) {

    $banKinh = floatval($_POST['txtBanKinh']);
    //Khai báo 1 đối tượng
    $ht = new HinhTron($banKinh);

    //Tính toán
    $chuVi = $ht->chuVi();
    $dienTich = $ht->dienTich();
}

?>
<html>
<head>
    <title>Thực hiện tính toán hình tròn</title>
</head>
<body>
<form method="post">
<fieldset>
    <legend>Nhập thông tin hình tròn cần tính</legend>
    <table>
        <tr>
            <td>Bán kính:</td>
            <td>
                <input type="text" name="txtBanKinh" value="<?php echo $banKinh?>"/>
            </td>
        </tr>
        <tr>
            <td>Chu vi:</td>
            <td>
                <input type="text" disabled="disabled" name="txtChuVi" value="<?php echo $chuVi?>"/>
            </td>
        </tr>
        <tr>
            <td>Bán kính:</td>
            <td>
                <input type="text" disabled="disabled" name="txtDienTich" value="<?php echo $dienTich?>"/>
            </td>
        </tr>
        <tr>
            <td>Bán kính:</td>
            <td>
                <input type="submit" name="btnTinhToan" value="Tính toán"/>
            </td>
        </tr>
    </table>
</fieldset>
</form>
</body>
</html>
