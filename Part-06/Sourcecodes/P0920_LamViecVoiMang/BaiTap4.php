<?php
//Khai báo biến
$arrDuong = array();
$arrAm = array();
$tongDuong = 0; $tongAm = 0;
$arr = array();
if(isset($_REQUEST['btnTinhToan']))
{
    //Lấy giá trị từ form
    for($i = 0; $i < 4; $i++)
    {
        $giaTri = $_POST['txtDay' . ($i+1)];
        //Cắt chuỗi đưa về mảng theo từng dấu ;
        $temp = explode(";", $giaTri);
        //Đưa vào mảng
        array_push($arr, $temp);
    }

    //Duyệt mảng để tính toán
    for($i = 0; $i < 4; $i++)
    {
        for($j = 0; $j < 4; $j++)
        {
            $giaTri = intval($arr[$i][$j]);
            if($giaTri >= 0)
            {
                $tongDuong += $giaTri;
                array_push($arrDuong, $giaTri);
            }
            else
            {
                $tongAm += $giaTri;
                array_push($arrAm, $giaTri);
            }
        }
    }
}
?>
<html>
<head>
    <title>Bài tập 2</title>
</head>
<body>
<form method="post">
<fieldset>
        <legend>Nhập thông tin tính toán</legend>
    <table>
        <tr>
            <td>Dãy 1</td>
            <td>
                <input type="text" name="txtDay1" value="<?php echo implode(";",$arr[0]) ?>"/>
            </td>
        </tr>
        <tr>
            <td>Dãy 2</td>
            <td>
                <input type="text" name="txtDay2" value="<?php echo implode(";",$arr[1]) ?>"/>
            </td>
        </tr>
        <tr>
            <td>Dãy 3</td>
            <td>
                <input type="text" name="txtDay3" value="<?php echo implode(";",$arr[2]) ?>"/>
            </td>
        </tr>
        <tr>
            <td>Dãy 4</td>
            <td>
                <input type="text" name="txtDay4" value="<?php echo implode(";",$arr[3]) ?>"/>
            </td>
        </tr>
        <tr>
            <td>Tổng dương:</td>
            <td>
                <?php echo $tongDuong;?>
            </td>
        </tr>
        <tr>
            <td>Dãy số:</td>
            <td>
                <?php
                for($i = 0; $i < count($arrDuong); $i++){
                    echo $arrDuong[$i] . "<br>";
                }
                ?>
            </td>
        </tr>
        <tr>
            <td>Tổng âm:</td>
            <td><?php echo $tongAm;?></td>
        </tr>
        <tr>
            <td>Dãy số:</td>
            <td>
                <?php
                for($i = 0; $i < count($arrAm); $i++){
                    echo $arrAm[$i] . "<br>";
                }
                ?>
            </td>
        </tr>
        <tr>
            <td></td>
            <td>
                <input type="submit" name="btnTinhToan" value="Tính toán">
            </td>
        </tr>
    </table>
</fieldset>
</form>
</body>
</html>
