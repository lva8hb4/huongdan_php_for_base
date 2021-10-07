<?php
//Khai báo biến
$soa = 0; $sob = 0; $soc = 0; $cau2a = 0;$cau2b = 0;$cau2c=0; $cau2d = -1;
$trungBinhCong = 0; $trungBinhNhan = 0;
if(isset($_REQUEST['btnTinhToan']))
{
    //Lấy thông tin từ trên giao diện
    $soa = floatval($_POST['txtSoa']);
    $sob = floatval($_POST['txtSob']);
    $soc = floatval($_POST['txtSoc']);

    //Bài tập 4
    $trungBinhCong = ($soa + $sob + $soc)/3;
    $trungBinhNhan = ($soa * $sob * $soc);
    $trungBinhNhan = pow($trungBinhNhan, 1/3.0);

    if($soc != 0) {
        $cau2a = $soa * $soa - 2 * $sob + ($soa * $sob) / $soc;
    }
    if($soa != 0) {
        $cau2b = (pow($sob, 2) - 4 * $soa * $soc) / (2 * $soa);
    }

    $cau2c = 3*$soa - pow($sob, 3) - 2*sqrt($soc);
    $cau2d = ($soa*$soa)/$sob - (4*$soa)/($sob*$soc) + 1;
    if($cau2d >= 0) {
        $cau2d = sqrt($cau2d);
    }

}
?>
<html>
<head>
    <title>Bài tập 2 - Cấu trúc lập trình</title>
</head>
<body>
<form method="post">
    <fieldset>
        <legend>
            Nhập thông tin tính toán
        </legend>
        <table>
            <tr>
                <td>Số a:</td>
                <td>
                    <input type="text" name="txtSoa"  value="<?php echo $soa?>"/>
                </td>
            </tr>
            <tr>
                <td>Số b:</td>
                <td>
                    <input type="text" name="txtSob"  value="<?php echo $sob?>"/>
                </td>
            </tr>
            <tr>
                <td>Số c:</td>
                <td>
                    <input type="text" name="txtSoc" value="<?php echo $soc?>"/>
                </td>
            </tr>
            <tr>
                <td>Câu 2a:</td>
                <td>
                    <?php echo number_format($cau2a,2)?>
                </td>
            </tr>
            <tr>
                <td>Câu 2b:</td>
                <td>
                    <?php echo number_format($cau2b,2)?>
                </td>
            </tr>
            <tr>
                <td>Câu 2c:</td>
                <td>
                    <?php echo number_format($cau2c,2)?>
                </td>
            </tr>
            <tr>
                <td>Câu 2d:</td>
                <td>
                    <?php echo number_format($cau2d,2)?>
                </td>
            </tr>
            <tr>
                <td>Trung bình cộng:</td>
                <td>
                    <?php echo number_format($trungBinhCong,2)?>
                </td>
            </tr>
            <tr>
                <td>Trung bình nhân:</td>
                <td>
                    <?php echo number_format($trungBinhNhan,2)?>
                </td>
            </tr>
            <tr>
                <td></td>
                <td>
                    <input type="submit" name="btnTinhToan" value="Tính toán"/>
                </td>
            </tr>
        </table>
    </fieldset>
</form>
</body>
</html>
