<?php


class TinhToan
{

    //Khai báo 1 biến
    private $giaTri = 2;

    /*
     * Dạng 1: Hàm không có giá trị trả về và không có tham số truyền vào
     */
    public function inThongTin()
    {
        echo "Hôm nay trời đẹp quá !";
    }

    /*
     * Dạng 2: Hàm không có giá trị trả về và có 1 tham số truyền vào
     */
    public function inThongTin1($n)
    {
        for($i = 1; $i <= $n; $i++)
        {
            echo "I Love You " . $i . "<br>";
        }
    }

    /*
     * Dạng 3: Hàm có giá trị trả về và không có tham số truyền vào
     */
    public function layTenCongTy()
    {
        return "Stanford - Đào tạo và phát triển công nghệ";
    }

    /*
     * Dạng 4: Hàm có giá trị trả về và có 2 tham số truyền vào
     */
    public function tongHaiSo($a, $b)
    {
        return $a + $b;
    }


}