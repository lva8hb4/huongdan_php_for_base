<?php
//khai báo biến
$max = 0; $min = 0;
$vitriMax = 1; $vitriMin = 1;
$giaTri = "";
$chuSo5 = 0;
$arr = array();
$arrgiamdan = array();
if(isset($_REQUEST['btnThucHien']))
{
    $giaTri = $_POST['txtDaySo'];
    $arr = explode(",", $giaTri);

    $max = $arr[0]; $min = $arr[0];
    for($i = 0; $i < count($arr); $i++)
    {
        if($arr[$i] > $max)
        {
            $max = $arr[$i];
            $vitriMax = $i + 1;
        }
        if($arr[$i] < $max)
        {
            $min = $arr[$i];
            $vitriMin = $i + 1;
        }
    }

    $arrgiamdan = $arr;

    //Sắp xếp giảm dần
    rsort($arrgiamdan);
    for($i = 0; $i < count($arr) ; $i++)
    {
        if(intval($arr[$i] / 10) == 5)
        {
            $chuSo5++;
        }
        if(intval($arr[$i] % 10) == 5)
        {
            $chuSo5++;
        }
    }

}
?>
<html>
<head>
    <title>WebAppKT 11.11.2020 - Nguyễn Xuân Sơn</title>
</head>
<body>
<h3 style="width: 5%; background-color: brown">Đề bài 1</h3>
<form method="post">
    <fieldset style="width: 350px;">
        <legend>Nhập dãy số</legend>
        <table style="width: 99%;">
            <tr>
                <td>Nhập dãy số:</td>
                <td>
                    <label>
                        <input type="text" name="txtDaySo" value="<?php echo implode(",", $arr)?>">
                    </label>
                </td>
            </tr>
            <tr>
                <td>Số lớn nhất:</td>
                <td>
                    <?php echo $max . ", Vị trí: ". $vitriMax ?>
                </td>
            </tr>

            <tr>
                <td>Số nhỏ nhất:</td>
                <td>
                    <?php echo $min . ", Vị trí: ". $vitriMin?>
                </td>
            </tr>

            <tr>
                <td>Giảm dần:</td>
                <td>
                    <?php
                    foreach ($arrgiamdan as $value)
                    {
                        echo $value . "&nbsp";
                    }
                    ?>
                </td>
            </tr>
            <tr>
                <td>Chữ số 5:</td>
                <td>
                    <?php echo $chuSo5 . " lần xuất hiện"?>
                </td>
            </tr>
            <tr>
                <td> Top 3 lớn nhất:</td>
                <td>
                    <?php
                    for($i = 0; $i < 3; $i++)
                    {
                        echo $arrgiamdan[$i] . "&nbsp";
                    }
                    ?>

                </td>
            </tr>
            <tr>
                <td></td>
                <td>
                    <input type="submit" name="btnThucHien" value="Thực Hiện">
                </td>
            </tr>
        </table>
    </fieldset>
</form>

<h3 style="width: 5%; background-color: brown">Đề bài 2</h3>
<div  style="width: 300px; height: 150px;background-color:darkgray; border-width: 10px; border-color: black; border-style: solid; margin:auto"></div>
</body>
</html>
