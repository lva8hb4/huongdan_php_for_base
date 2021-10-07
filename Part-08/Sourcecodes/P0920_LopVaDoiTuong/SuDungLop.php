<?php

//Khai báo lớp cần sử dụng
include 'TinhToan.php';

//Khai báo 1 đối tượng
$tt = new TinhToan();

//Gọi các phương thức để sử dụng
$tt->inThongTin();
echo "<br>";
//Gọi lần 2
$tt->inThongTin();
echo "<br>";
//Gọi in 10 câu I Love You
$tt->inThongTin1(10);
echo "<br>";
echo "Tên công ty là: " . $tt->layTenCongTy() . "<br>";

//Gọi hàm tính tổng
$tong = $tt->tongHaiSo(5,4);
echo "Tổng của hai số 5 và 4 là: " . $tong . "<br>";

//Khai báo lớp
include "HinhTron.php";

//Khai báo 1 đối tượng thuộc lớp
$ht = new HinhTron(3);

$chuVi = $ht->chuVi();
$dienTich = $ht->dienTich();

echo "Chu vi hình tròn là: " . $chuVi . "<br>";
echo "Diện tích hình tròn là: " . $dienTich . "<br>";

//Khai báo lớp
include 'Cat.php';

//Tạo ra 1 đối tượng mèo tom
$tom = new Cat();

$tom->soMat = 2;
$tom->soChan = 4;
$tom->mauLong = "Màu xám";

echo "Thông tin mèo tom là: <br>";

$tom->inThongTin();

//Khai báo lớp
include 'Dog.php';

//Tạo đối tượng
$john = new Dog();
$john->soMat = 2;
$john->soChan = 4;
$john->mauLong = "Màu đen";

echo "Thông tin chó John là: <br>";
$john->inThongTin();


//Gọi hàm thực hiện
include "DataProvider.php";
DataProvider::thucHien(new MayTinhBusiness());

