<?php

$tenDangNhap = "";
session_start();
if(isset($_SESSION['userCurrent']))
{
    $tenDangNhap = $_SESSION['userCurrent'];
}
?>
<html>
<head>
    <title>Quản lý thông tin</title>
</head>
<body>
<h2><?php echo "Chào mừng bạn ! " . $tenDangNhap;?></h2>
</body>
</html>
