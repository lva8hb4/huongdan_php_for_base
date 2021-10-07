<?php
//Bài tập 3
//Khai báo biến
$soa = 0; $sob = 0; $ketQua = 0;
$phepTinh = ""; $thongBao = "";

if(isset($_REQUEST['btnTinhToan']))
{
//Lấy thông tin và chuyển về dạng số
$soa = floatval($_POST['txtSoa']);
$sob = floatval($_POST['txtSob']);

//Lấy phép tính
$phepTinh = $_POST['phepToan'];

//Tính toán
switch($phepTinh)
{
case "1": $ketQua = $soa + $sob;
break;

case "2": $ketQua = $soa - $sob;
break;
case "3": $ketQua = $soa * $sob;
break;
case "4":
if($sob != 0) {
$ketQua = $soa / $sob;
}
else{
$thongBao = "Bạn cần phải nhập số b khác 0";
}
break;
}

}
?>
<html>
<head>
    <title>Bài tập 3 - Cấu trúc lập trình</title>
</head>
<body>
<form method="post">
    <fieldset>
        <legend>Nhập thông tin tính toán</legend>
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
                    <input type="text" name="txtSob" value="<?php echo $sob?>"/>
                </td>
            </tr>
            <tr>
                <td>Phép toán:</td>
                <td>
                    <select name="phepToan">
                        <option value="1" <?php if($phepTinh=="1") echo "selected";?>>Cộng</option>
                        <option value="2" <?php if($phepTinh=="2") echo "selected";?>>Trừ</option>
                        <option value="3" <?php if($phepTinh=="3") echo "selected";?>>Nhân</option>
                        <option value="4" <?php if($phepTinh=="4") echo "selected";?>>Chia</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>Kết quả:</td>
                <td>
                    <input type="text" name="txtKetQua" value="<?php echo $ketQua?>"/>
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
