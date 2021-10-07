<?php
//Bài tập 6
//Khai báo biến
$soThapPhan = 0;
$soNhiPhan = "";
if(isset($_REQUEST['btnChuyenDoi']))
{
    //Lấy số nhị phân
    $soNhiPhan = $_POST['txtSoNhiPhan'];

    //Đưa số về dạng mảng kí tự
    $arr = str_split($soNhiPhan, 1);

    //Duyệt từng phần tử
    for($i = 0; $i < count($arr); $i++)
    {
        if($arr[$i] == '1')
        {
            $soThapPhan += pow(2, count($arr) - $i - 1);
        }
    }

}
?>
<html>
<head>
    <title>Chuyển từ số nhị phân về thập phân</title>
</head>
<body>
<form method="post">
    <fieldset>
        <legend>Nhập số nhị phân cần chuyển</legend>
        <table>
            <tr>
                <td>Số nhị phân</td>
                <td>
                    <input type="text" name="txtSoNhiPhan" value="<?php echo $soNhiPhan;?>" />
                </td>
            </tr>
            <tr>
                <td>Số thập phân</td>
                <td>
                    <input type="text" disabled="disabled" name="txtSoThapPhan"  value="<?php echo $soThapPhan;?>"/>
                </td>
            </tr>
            <tr>
                <td></td>
                <td>
                    <input type="submit" name="btnChuyenDoi" value="Chuyển đổi"/>
                </td>
            </tr>
        </table>
    </fieldset>
</form>
</body>
</html>
