<?php

//Khai báo biến
$tenDangNhap = ""; $matKhau = "";
$thongBao = "";
//Nếu người dùng nhấn nút đăng nhập
if(isset($_REQUEST['btnDangNhap']))
{
    //Lấy thông tin trên giao diện và gán cho biến
    $tenDangNhap = $_POST['txtTenDangNhap'];
    $matKhau = $_POST['txtMatKhau'];

    if(strlen($tenDangNhap) == 0)
    {
        $thongBao = "Bạn cần phải nhập tên đăng nhập";
    }
    if(strlen($matKhau) == 0)
    {
        $thongBao = "Bạn cần phải nhập mật khẩu đăng nhập";
    }

    if($tenDangNhap == "admin" && $matKhau == "123")
    {
        //Đăng nhập thành công
        $thongBao = "Đăng nhập thành công";
    }
    else
    {
       if(strlen($tenDangNhap) > 0 && strlen($matKhau) > 0)
        $thongBao = "Đăng nhập không thành công. Bạn vui lòng kiểm tra lại thông tin";
    }
}
?>
<html>
<head>
    <title>Đăng nhập hệ thống</title>
</head>
<body>
    <form method="post">
        <fieldset>
            <legend>Nhập thông tin đăng nhập</legend>
            <table>
                <tr>
                    <td>Tên đăng nhập:</td>
                    <td>
                        <input type="text" name="txtTenDangNhap" value="<?php echo $tenDangNhap?>"/>
                    </td>
                </tr>
                <tr>
                    <td>Mật khẩu:</td>
                    <td>
                        <input type="password" name="txtMatKhau" value="<?php echo $matKhau?>"/>
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td>
                        <input type="submit" name="btnDangNhap" value="Đăng nhập"/>
                        &nbsp;
                        <input type="button" name="btnHuyBo" value="Hủy bỏ"/>
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td style="color:red;">
                        <?php echo $thongBao ?>
                    </td>
                </tr>
            </table>
        </fieldset>
    </form>
</body>
</html>
