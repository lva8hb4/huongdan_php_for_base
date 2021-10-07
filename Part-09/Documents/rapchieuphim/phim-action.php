<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<?php
include("connect.php");
$phim_insert_id="";
$tieude = $_POST['txtTieuDe'];
$mota = $_POST['txtMoTa'];
$tacgia = $_POST['txtTacGia'];

$datecreate = date("Y-M-d");

$imagename = $_POST['hfile'];

if($_FILES["file"]["error"]>0)
{
	echo "Không thực hiện tải file được";
}
else
{
	if(file_exists("images/" . $_FILES["file"]["name"]))
	{
		echo "File dữ liệu đã tồn tại " . $_FILES["file"]["name"] . "<br/>";
	}
	else
	{
		move_uploaded_file($_FILES["file"]["tmp_name"], "images/" . $_FILES["file"]["name"]);
		$imagename = $_FILES["file"]["name"];
	}
}

$strInsert = "INSERT INTO thongtinphim(TenPhim,MoTa,AnhDaiDien,TacGia,NgayTao,ChuDeId) values(N'" . $tieude . "',N'" . $mota . "','" . $imagename . "',N'" . $tacgia . "',Now(),1)";

echo "<br>" . $strInsert;
try
{
$row = mysqli_query($conn, $strInsert);

$phim_insert_id = mysqli_insert_id($conn);

mysqli_close($conn);

if(!$row)
{
	echo "Co loi xay ra trong qua trinh thuc hien";
	exit;
}

}
catch(Exception $ex)
{
	echo $ex->getMessage();
}

?>
