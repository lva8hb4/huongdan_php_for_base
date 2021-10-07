<?php

include_once 'HanhDong.php';
class NhanVienBusiness implements HanhDong
{
    public function danhSach()
    {
        // TODO: Lấy danh sách nhân viên
        echo "Lấy danh sách nhân viên<br>";
    }

    public function themMoi()
    {
        // TODO: Thêm mới nhân viên
        echo "Thêm mới nhân viên<br>";
    }

    public function layChiTiet()
    {
        // TODO: Lấy chi tiết nhân viên
        echo "Chi tiết thông tin nhân viên<br>";
    }
}