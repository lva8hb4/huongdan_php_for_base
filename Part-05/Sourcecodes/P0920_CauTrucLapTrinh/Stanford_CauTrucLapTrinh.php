<?php

//Khai báo biến kiểu nguyên
$nam = 2020;
//var_dump($nam);

echo "Năm hiện tại là: " . $nam . "<br>";

//Khai báo kiểu số thực
$trungBinh = 6.8925;
//var_dump($trungBinh);

echo "Điểm trung bình là: " . $trungBinh . "<br>";

//Khai báo 1 chuỗi
$tenCongTy = "Stanford - Dạy kinh nghiệm lập trình";
//var_dump($tenCongTy);

echo "Tên công ty là: " . $tenCongTy . "<br>";

//Khai báo biến
$a = 5; $b = 4; $tong = 0;

$tong = $a + $b;

echo "Tổng của " . $a . " và " . $b . " là: " . $tong . "<br>";

echo "Giá trị của a = " . ($a++) . "<br>";
echo "Giá trị của a = " . (++$a) . "<br>";

//Khai báo biến
$ketQua = true;

if($ketQua)
{
    echo "Thực hiện công việc khi $ketQua = true<br>";
}

$a = 7; $b = 3; $thuong = 0;

if($b != 0)//True
{
    //Thực hiện tính thương
    $thuong = $a/$b;

    echo "Thương của " . $a . "/" . $b . " là: " . number_format($thuong,2) . "<br>";
}
else//False
{
    echo "Bạn cần phải nhập số b khác 0<br>";
}

//Khai báo 1 biến
$duLieu = "";

//In ra 10 câu I Love You
for($i = 1; $i<=10; $i++)
{
    $duLieu .= "<h3>I Love You " . $i . "</h3>";
}

//Tính tổng các số lẻ từ 1-20
$tongDayLe = 0;
for($i = 1; $i<=20; $i++)
{
    if($i%2 != 0)
    {
        $tongDayLe += $i;//$tongDayLe = $tongDayLe + $i
    }
}

?>
<html>
<head>
    <title>Làm việc với cấu trúc lập trình</title>
</head>
<body>
<p>
    <?php echo $duLieu?>
    <?php echo "Tổng các số lẻ từ 1-20 là: " . $tongDayLe . "<br>";

    //Khai báo 1 mảng
    $arr = [20, 50, 60, 80];

    echo "Các giá trị trong mảng: <br>";

    echo "<ul>";
    //Duyệt tuần tự từng phần tử
    foreach($arr as $value)
    {
        echo "<li>" . $value . "</li>";
    }

    echo "</ul>";

    //Các hàm số học trong php
    //Hàm tính căn bậc hai
    $giaTri = sqrt(9);

    echo "Căn bậc hai của 9 là: " . $giaTri . "<br>";

    //Hàm tính số mũ
    $giaTri = pow(2, 3);

    echo "2^3 là: " . $giaTri . "<br>";

    //Chuyển về số nguyên
    $giaTri = intval("25");

    echo "Giá trị là: " . $giaTri . "<br>";
    //Chuyển về dạng số thực
    $giaTri = floatval("25.689");
    echo "Giá trị là: " . $giaTri . "<br>";

    //Làm tròn cận dưới
    $giaTri = floor(3.6);
    echo "Giá trị là: " . $giaTri . "<br>";
    //Làm tròn cận trên
    $giaTri = ceil(3.6);
    echo "Giá trị là: " . $giaTri . "<br>";

    //Lấy 2 số sau dấu phẩy
    $giaTri = round(3.67876, 2);
    echo "Giá trị là: " . $giaTri . "<br>";

    ?>
</p>
</body>
</html>
