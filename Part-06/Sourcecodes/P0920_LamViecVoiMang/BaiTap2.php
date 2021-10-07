<?php
//Bài tập 2,3
//Khai báo biến
$max = 0; $min = 0;

if(isset($_REQUEST['btnThucHien']))
{
    //Khai báo mảng
    $arr = array();

    //Lấy được giá trị từ các textbox trên giao diện
    for($i = 1; $i <= 10; $i++)
    {
        $giaTri = $_POST['txtSo' . $i];

        //Đưa giá trị kiểu số nguyên vào mảng
        array_push($arr, intval($giaTri));
    }

    $max = $arr[0]; $min = $arr[0];
    //Duyệt các phần tử trong mảng để tìm max, min
    for($i = 0; $i < count($arr); $i++)
    {
        if($arr[$i] < $min)
        {
            $min = $arr[$i];
        }

        if($arr[$i] > $max)
        {
            $max = $arr[$i];
        }
    }

    //Sắp xếp giảm dần
    rsort($arr);
}
?>
<html>
<head>
    <title>Bài tập 2</title>
</head>
<body>
<fieldset>
    <form method="post">
    <legend>Nhập thông tin tính toán</legend>
    <table>
        <?php for($i = 1; $i <= 10; $i++){?>
        <tr>
            <td>Số <?php echo $i?></td>
            <td>
                <input type="text" name="txtSo<?php echo $i?>" value="<?php echo $arr[$i-1]?>"/>
            </td>
        </tr>
        <?php } ?>
        <tr>
            <td>Max:</td>
            <td>
                <?php echo $max;?>
            </td>
        </tr>
        <tr>
            <td>Min:</td>
            <td>
                <?php echo $min;?>
            </td>
        </tr>
        <tr>
            <td>Dãy giảm dần</td>
            <td>
                <?php
                for($i = 0; $i < count($arr); $i++){
                    echo $arr[$i] . "<br>";
                }
                ?>
            </td>
        </tr>
        <tr>
            <td></td>
            <td>
                <input type="submit" value="Thực hiện" name="btnThucHien"/>
            </td>
        </tr>
    </table>
</fieldset>
</form>
</body>
</html>
