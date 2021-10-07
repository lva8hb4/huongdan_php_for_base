<?php
$str ="";$arr=array(0,0,0);
$vtmin=0;$vtmax=0;
$max=0;$min=0;
$dem=0;
if(isset($_REQUEST['btnThucHien'])){
    $str =$_POST['txtStr'];
    //chuyen chuoi ve mang
     $arr=explode(",",$str);
    // vi tri,giá trị max ,min
    $max =intval($arr[0]);$min =intval($arr[0]);
    for($i = 0; $i < count($arr); $i++)
    {
        $arr[$i] =intval($arr[$i]);
        if($arr[$i] < $min)
        {
            $min = $arr[$i];
            $vtmin = $i+1;
        }

        if($arr[$i] > $max)
        {
            $max = $arr[$i];
            $vtmax = $i+1 ;
        }
    }
    //so lần số 5 xuất hiện trong chuỗi
    for($i=0;$i<strlen($str);$i++){
        if($str[$i]=='5'){
            $dem++;
        }
    }


}

?>
<html>
<head>
    <title>Bài 1</title>
</head>
<body>
<form method="post">
    <fieldset>
        <legend>Nhập thông tin :</legend>
        <table>
            <tr>
                <td> Nhập chuỗi số :</td>
                <td><input type="text" name="txtStr" value="<?php  echo $str;?>"></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" name="btnThucHien" value="Thực Hiện"></td>
            </tr>
            <tr>
                <td></td>
                <td>
                    <?php
                    echo "Mảng  mới được tạo từ chuỗi là : [";
                    foreach ( $arr as $value){echo $value.",  ";} echo"]"."<br>";
                    echo "Phần tử nhỏ nhất là : ".$min." vị trí thứ :  ".$vtmin."<br>";
                    echo "Phần tử lớn nhất  là : ".$max." vị trí thứ :  ".$vtmax."<br>";
                    echo "Mảng  sắp xếp giảm dần  là : [";  rsort($arr);
                    foreach ( $arr as $value1){echo $value1." , ";} echo"]"."<br>";
                    echo "Số lần số 5 xuất hiên : ".$dem."<br>";
                    //lấy 3 phần tử lớn nhất
                    echo "Ba phần tử lớn nhất là : ";
                    rsort($arr);
                    for ($i=0;$i<3;$i++){
                        echo $arr[$i].",";
                    }
                    ?>
                </td>
            </tr>
        </table>
    </fieldset>
</form>
</body>
</html>
