<?php

//Khai báo mảng 1 chiều
$arr = array(30, 50, 80, 90, 10, 60);

//Thêm 1 phần tử vào mảng
array_push($arr, 100);
//Lấy giá trị của phần tử tại vị trí 2
echo "Phần tử tại vị trí thứ 2 là: " . $arr[1] . "<br>";

echo "Các phần tử của mảng là: <br>";
for($i = 0; $i < count($arr); $i++)
{
    echo $arr[$i] . "<br>";
}

//Khai báo 1 mảng chuỗi
$khoaHoc = array();
array_push($khoaHoc, "PHP");
array_push($khoaHoc, "Java");
array_push($khoaHoc, "C#");

echo "Các khóa học là: <br>";
foreach($khoaHoc as $giaTri)
{
    echo $giaTri . "<br>";
}

//Khai báo 1 mảng cặp
$arr2 = array("website"=>"stanford.com.vn", "ip"=>"192.168.1.200", "email"=>"daotao@stanford.com.vn");

echo "Phần tử có key ip là: " . $arr2["ip"] . "<br>";

echo "Các phần tử của mảng cặp: <br>";
foreach($arr2 as $k=>$v)
{
    echo $k . ": " . $v . "<br>";
}

//Khai báo mảng nhiều chiều
$arr3 = array(array("SF001", "Lê Anh Tuấn", 32),
    array("SF002", "Trần Thành Công", 25),
    array("SF003", "Trịnh Thu Hà", 30));

echo "Các phần tử là: <br>";
echo "<table border='1' style='border-collapse: collapse;'><tr><th>Mã NV</th><th>Họ tên</th><th>Tuổi</th></tr>";
for($i = 0; $i < 3; $i++)
{
    echo "<tr>";
    for($j=0; $j<3; $j++)
    {
        echo "<td>" . $arr3[$i][$j] . "</td>";
    }
    echo "</tr>";
}

echo "</table>";

$kh1 = ""; $kh2 = "";

//Lấy thông tin từ mảng cho các biến
list($kh1, $kh2) = $khoaHoc;

echo "Khóa học 1: " . $kh1 . "<br>";
echo "Khóa học 2: " . $kh2 . "<br>";

//Sắp xếp tăng dần
sort($arr);

echo "Dãy tăng dần: <br>";
foreach($arr as $giaTri)
{
    echo $giaTri . "<br>";
}

//Sắp xếp mảng cặp
asort($arr2);
echo "Các phần tử của mảng cặp theo giá trị tăng dần: <br>";
foreach($arr2 as $k=>$v)
{
    echo $k . ": " . $v . "<br>";
}

echo "Làm việc với chuỗi trong PHP<br>";

$tenCongTy = "Stanford - Day kinh nghiem lap trinh";

$viTri = strpos($tenCongTy, "t");

echo "Vị trí của t trong chuỗi là: " . $viTri . "<br>";

//Lấy các nội dung bên phải từ Stanford
$solo = stristr($tenCongTy, "-");

echo "Nội dung: " . $solo . "<br>";

//Trả về vị trí đầu tiên của kí tự tìm và ko phân biệt hoa thường
$viTri = stripos($tenCongTy, "T");
echo "Vị trí của t trong chuỗi là: " . $viTri . "<br>";

$data = "85;60;55;90";

//Đưa 1 chuỗi về mảng
$arr4 = explode(";", $data);

echo "Các phần tử lấy được từ việc chia chuỗi là: <br>";
foreach($arr4 as $value)
{
    echo $value . "<br>";
}

//Lấy 1 chuỗi con
$tenVietTat = substr($tenCongTy,0, 8);

echo "Tên viết tắt: " . $tenVietTat . "<br>";

$arr5 = str_split($tenVietTat,1);

echo "Các phần tử lấy được từ việc chia chuỗi là: <br>";
foreach($arr5 as $value)
{
    echo $value . "<br>";
}

$viTri = strrpos($tenCongTy, "t");

echo "Vị trí cuối của kí tự t trong chuỗi là: " . $viTri . "<br>";

echo "Thay thế: " . str_replace("t", "T", $tenCongTy) . "<br>";

//Mã hóa mật khẩu theo thuật toán MD5
echo "Mã hóa MD5: " . md5("123");