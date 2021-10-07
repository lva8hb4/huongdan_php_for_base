<?php
//Bài tập 10
//Khai báo biến
$so4ChuSo = 0; $nghin = 0; $donVi = 0; $tong = 0;
$thongBao = "";
//Nếu người dùng nhấn nút Tính toán
if(isset($_REQUEST['btnTinhToan']))
{
    $so4ChuSo = intval($_POST['txtSo4ChuSo']);

    if($so4ChuSo < 1000 || $so4ChuSo > 9999)
    {
        $thongBao = "Bạn cần phải nhập số 4 chữ số";
    }

    $temp = 0;
    $nghin = (int)($so4ChuSo/1000);
    $temp = (int)($so4ChuSo%1000);
    $tram = (int)($temp/100);
    $temp = (int)($temp%100);
    $chuc = (int)($temp/10);
    $donVi = (int)($temp%10);

    $tong = $nghin + $tram + $chuc + $donVi;
}
?>
<html>
<head>
    <title>Bài tập 10 - Cấu trúc lập trình</title>
</head>
<body>
<form method="post">
    <fieldset>
        <legend>Nhập thông tin tính toán</legend>
        <table>
            <tr>
                <td>Số 1:</td>
                <td>
                    <input type="text" name="txtSo4ChuSo"  value="<?php echo $so4ChuSo?>"/>
                </td>
            </tr>
            <tr>
                <td>Tổng</td>
                <td>
                    <input type="text" name="txtTong"  value="<?php echo $tong?>"/>
                </td>
            </tr>
            <tr>
                <td>Nghìn</td>
                <td>
                    <input type="text" name="txtNghin"  value="<?php echo $nghin?>"/>
                </td>
            </tr>
            <tr>
                <td>Đơn vị</td>
                <td>
                    <input type="text" name="txtDonVi"  value="<?php echo $donVi?>"/>
                </td>
            </tr>
            <tr>
                <td></td>
                <td>
                    <input type="submit" name="btnTinhToan"/>
                </td>
            </tr>
            <tr>
                <td></td>
                <td style="color:red;">
                   <?php echo $thongBao?>
                </td>
            </tr>
        </table>
    </fieldset>
</form>
</body>
</html>

