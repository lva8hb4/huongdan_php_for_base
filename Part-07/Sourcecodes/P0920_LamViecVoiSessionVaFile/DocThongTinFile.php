<?php

$file = fopen('Data.txt', 'r') or exit('Không mở được file');

//Đọc thông tin đến khi nào hết thông tin thì thôi
$dong = "";
while(!feof($file))
{
    //Lấy từng dòng
    $dong = fgets($file);

    echo $dong . "<br>";
}

//Đóng luồng
fclose($file);

//Ghi thông tin ra file
$file1 = fopen('Data1.txt', 'w');

fwrite($file1, "Làm việc với File trong PHP - P092001CB, Stanford !");

echo "Ghi file thành công !";

fclose($file1);