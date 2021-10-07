<?php
$soChuoi = "";
$max = $min = 0;//Khai báo biến min, max ở đây để echo ra giao diện
$xuatMang = [];//Khai báo mảng ở đây nếu muốn echo ra giao diện
if (isset($_REQUEST['btnThucHien']))
{
    $soChuoi = array();
    $soChuoi = $_POST['txtSo'];

    $xuatMang = explode(",", $soChuoi);//mảng string

    $soMang = array();
    //Chuyển từng phần tử của mảng string sang mảng số
    for($i = 0; $i < count($xuatMang); $i++){
        array_push($soMang, floatval($xuatMang[$i]));
    }
    $max = -INF;//-INF là âm vô cùng
    for($i = 0;$i <count($soMang); $i++)
    {
        //quét từng phần tử của mảng số
        if($soMang[$i] > $max){
            $max = $soMang[$i];
        }
    }
    $min = INF;//INF là số dương vô cùng
    for($i = 0; $i < count($soMang); $i++)
    {
        //quét từng phần tử của mảng số
        if($soMang[$i] < $min){
            $min = $soMang[$i];
        }
    }

    rsort($soMang);
}
?>

<html>
    <head>
        <title>Bài tập 1</title>
    </head>
    <body>
        <fieldset>
            <form method="post">
                <legend>Nhập thông tin tính toán</legend>
                <table>
                    <tr>
                        <td> Nhập số</td>
                        <td>
                            <input type="text" name="txtSo">
                        </td>
                    </tr>
                    <tr>
                        <td>In ra mảng</td>
                        <td>
                            <?php
                                foreach ($xuatMang as $value)
                                {
                                    echo $value;
                                }
                            ?>
                        </td>
                    </tr>
                    <tr>
                        <td>Giá trị lớn nhất</td>
                        <td><?php echo $max; ?></td>
                        <td>Giá trị nhỏ nhất</td>
                        <td><?php echo $min; ?></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td>
                            <input type="submit" value="Thực hiện" name="btnThucHien"/>
                        </td>
                    </tr>
                </table>
            </form>
        </fieldset>
    </body>
</html>
