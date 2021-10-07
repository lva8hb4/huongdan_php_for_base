<?php
$chuoi =0;$arr =array();$max =0;$min =0;$vitrimax =0;$vitrimin =0;
    if(isset($_REQUEST['btnth'])) {
        //Chuyển thông tin từ chuỗi nhập vào về dạng mảng với mỗi phần tử là số được chia từ chuỗi
        $chuoi = $_POST['txtchuoi'];
        $arr = explode(',', $chuoi);
        $min = $arr[0];
        $max = $arr[0];
        //Hiển thị vị trí, giá trị của phần tử lớn nhất và nhỏ nhất về mặt giá trị trong mảng lấy được
        for ($i = 0; $i < count($arr); $i++) {
            if ($min > $arr[$i]) {
                $min = $arr[$i];
                $vitrimin = $i;
            }
            if ($max < $arr[$i]) {
                $max = $arr[$i];
                $vitrimax = $i;
            }
        }
        echo "Giá trị min trong mảng: " . $min . " và vị trí min trong mảng: " . $vitrimin . "<br/>";
        echo "giá trị max trong mảng: " . $max . " và vị trí max trong mảng: " . $vitrimax . "<br/>";
        //Thực hiện sắp xếp theo thứ tự giảm dần về mặt giá trị của các phần tử trong mảng lấy được và hiển thị danh sách ra ngoài màn hình
        rsort($arr);
        echo "Mảng giá trị giảm dần là: ";
        for ($i = 0; $i < count($arr); $i++) {
            if ($i == (count($arr) - 1)) echo $arr[$i];
            else
                echo $arr[$i] . ",";
        }
        //Thực hiện thống kê trong danh sách có bao nhiều lần số 5 xuất hiện và lấy top 3 thông tin có giá trị cao nhất trong mảng từ chuỗi đã cho
$arr_timkiem =array();$split_chuoi =$chuoi;$giatri_cat =0;
        while(strlen($split_chuoi)>0){
            $giatri_cat =(int)strpos($split_chuoi,"5")+1;
            $split_chuoi =substr($split_chuoi,$giatri_cat);
            if($giatri_cat==null)break;
            array_push($arr_timkiem,$giatri_cat);
        }
        echo "<br/>Trong danh sách có ".count($arr_timkiem)." lần số 5 xuất hiện<br/>";
        $arr =explode(",",$chuoi);
        echo "<br/>Top 3 thông tin có giá trị cao nhất trong mảng từ chuỗi đã cho: ";
        $arr_3max =array();$vitri_3max =0;
        for($i=0;$i<=2;$i++){
            $max =$arr[0];
            for($j=0;$j<count($arr);$j++) {
                if ($max < $arr[$j]) {
                    $max = $arr[$j];
                    $vitri_3max = $j;
                }
            }
            $arr[$vitri_3max] =0;
            array_push($arr_3max,$max);
        }
        for($i=0;$i<count($arr_3max);$i++){
            if($i==count($arr_3max)-1)echo $arr_3max[$i];
            else
                echo $arr_3max[$i].",";
        }
    }
?>
<html>
    <head>
        <title>Bài1</title>
    </head>
<body>
    <form method="post">
        <table>
            <tr>
                <td>Chuỗi: </td>
                <td><input type="text" name="txtchuoi" value="<?php echo $chuoi; ?>"></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" value="Thực hiện" name="btnth"></td>
            </tr>
        </table>
    </form>
</body>
</html>
