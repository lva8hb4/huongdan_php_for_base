<?php
//Bài tập 9
//Khai báo biến
$so1 = 0; $so2 = 0; $so3 = 0; $so4 = 0; $tong = 0; $hangChuc = 0; $hangDonVi = 0;

if(isset($_REQUEST['btnTinhToan']))
{
    //Lấy thông tin từ trên giao diện và chuyển về số nguyên
    $so1 = intval($_POST['txtSo1']);
    $so2 = intval($_POST['txtSo2']);
    $so3 = intval($_POST['txtSo3']);
    $so4 = intval($_POST['txtSo4']);

    $tong = $so1 + $so2 + $so3 + $so4;

    $hangChuc = (int)($tong/10);
    $hangDonVi = (int)($tong%10);
}
?>
<html>
<head>
    <title>Bài tập 9 - Cấu trúc lập trình</title>
</head>
<body>
<form method="post">
    <fieldset>
        <legend>Nhập thông tin tính toán</legend>
        <table>
            <tr>
                <td>Số 1:</td>
                <td>
                    <input type="text" name="txtSo1"  value="<?php echo $so1?>"/>
                </td>
            </tr>
            <tr>
                <td>Số 2</td>
                <td>
                    <input type="text" name="txtSo2"  value="<?php echo $so2?>"/>
                </td>
            </tr>
            <tr>
                <td>Số 3</td>
                <td>
                    <input type="text" name="txtSo3"  value="<?php echo $so3?>"/>
                </td>
            </tr>
            <tr>
                <td>Số 4</td>
                <td>
                    <input type="text" name="txtSo4"  value="<?php echo $so4?>"/>
                </td>
            </tr>
            <tr>
                <td>Tổng</td>
                <td>
                    <input type="text" disabled="disabled" name="txtTong"  value="<?php echo $tong?>"/>
                </td>
            </tr>
            <tr>
                <td>Hàng chục</td>
                <td>
                    <input type="text" disabled="disabled" name="txtHangChuc"  value="<?php echo $hangChuc?>"/>
                </td>
            </tr>
            <tr>
                <td>Hàng đơn vị</td>
                <td>
                    <input type="text" disabled="disabled" name="txtHangDonVi"  value="<?php echo $hangDonVi?>"/>
                </td>
            </tr>
            <tr>
                <td></td>
                <td>
                    <input type="submit" name="btnTinhToan"/>
                </td>
            </tr>
        </table>
    </fieldset>
</form>
</body>
</html>
