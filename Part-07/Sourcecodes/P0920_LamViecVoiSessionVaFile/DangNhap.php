<?php

//Khai báo biến
$tenDangNhap = ""; $matKhau = "";

if(isset($_REQUEST['btnDangNhap']))
{
    $tenDangNhap = $_POST['txtTenDangNhap'];
    $matKhau = $_POST['txtMatKhau'];

    if($tenDangNhap == "admin" && $matKhau == "123")
    {
        //Lưu vào session
        session_start();
        $_SESSION['userCurrent'] = $tenDangNhap;

        //Lưu thông tin vào cookie, tồn tại trong 10 phút
        $expire = time() + 60*10;

        //Lưu vào cookie
        setcookie("userOnline", $tenDangNhap, $expire);

        //Di chuyển sang trang QuanLy
        header("location:QuanLy.php");
    }
}
?>
<html>
<head>
    <title>
        Đăng nhập hệ thống
    </title>
</head>
<form method="post">
    <fieldset>
        <legend>Nhập thông tin đăng nhập</legend>
        <table>
            <tr>
                <td>Tên đăng nhập:</td>
                <td>
                    <input type="text" name="txtTenDangNhap"/>
                </td>
            </tr>

            <tr>
                <td>Mật khẩu:</td>
                <td>
                    <input type="password" name="txtMatKhau"/>
                </td>
            </tr>

            <tr>
                <td></td>
                <td>
                    <input type="submit" value="Đăng nhâp" name="btnDangNhap"/>
                    &nbsp;
                    <input type="button" value="Hủy bỏ"/>
                </td>
            </tr>

        </table>
    </fieldset>
</form>
</html>
