<?php

//Khai báo interface
include_once 'HanhDong.php';
class MayTinhBusiness implements HanhDong
{
    public function danhSach()
    {
        // TODO: Lấy danh sách máy tính
        echo "Lấy danh sách máy tính<br>";
    }

    public function themMoi()
    {
        // TODO: Thêm mới máy tính
        echo "Thêm mới máy tính<br>";
    }

    public function layChiTiet()
    {
        // TODO: Lấy chi tiết máy tính
        echo "Chi tiết thông tin máy tính<br>";
    }

}