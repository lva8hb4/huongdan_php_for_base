<?php

include "NhanVienBusiness.php";
include "MayTinhBusiness.php";
class DataProvider
{
    /*
     * Hàm thực hiện công việc
     */
    public static function thucHien(HanhDong $hanhDong)
    {
        /*if($hanhDong instanceof NhanVienBusiness)
        {
            $hanhDong->danhSach();
            $hanhDong->themMoi();
            $hanhDong->layChiTiet();
        }

        if($hanhDong instanceof MayTinhBusiness)
        {
            $hanhDong->danhSach();
            $hanhDong->themMoi();
            $hanhDong->layChiTiet();
        }*/

        $hanhDong->danhSach();
        $hanhDong->themMoi();
        $hanhDong->layChiTiet();
    }
}