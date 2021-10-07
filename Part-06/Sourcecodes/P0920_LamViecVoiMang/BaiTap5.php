<?php
//Bài tập 5
//Khai báo biến
$soThapPhan = 0;
$soNhiPhan = ""; $strSoThapPhan = "";
if(isset($_REQUEST['btnChuyenDoi']))
{
    //Khai báo mảng chứa có bit số dư
    $arr = array();

    //Lấy số thập phân
    $soThapPhan = intval($_POST['txtSoThapPhan']);
    $strSoThapPhan = $soThapPhan;
    $soDu = 0;
    while($soThapPhan > 0)
    {
        $soDu = (int)($soThapPhan%2);
        $soThapPhan = (int)($soThapPhan/2);

        //Đưa vào mảng
        array_push($arr, $soDu);
    }

    //Duyệt theo chiều ngược từ cao xuống thấp
    for($i = count($arr)-1; $i>=0; $i--)
    {
        $soNhiPhan .= $arr[$i];
    }
}
?>
<html>
<head>
    <title>Chuyển từ số thập phân về nhị phân</title>
</head>
<body>
<form method="post">
    <fieldset>
        <legend>Nhập số thập phân cần chuyển</legend>
        <table>
            <tr>
                <td>Số thập phân</td>
                <td>
                    <input type="text" name="txtSoThapPhan" value="<?php echo $strSoThapPhan;?>" />
                </td>
            </tr>
            <tr>
                <td>Số nhị phân</td>
                <td>
                    <input type="text" disabled="disabled" name="txtSoNhiPhan"  value="<?php echo $soNhiPhan;?>"/>
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
