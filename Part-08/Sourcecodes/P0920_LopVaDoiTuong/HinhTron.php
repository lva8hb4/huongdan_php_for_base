<?php


class HinhTron
{
    const PI = 3.14;

    private $banKinh = 0;

    /*
     * Hàm khởi tạo được sử dụng để truyền bán kính từ bên ngoài vào lớp
     */
    public function __construct($banKinh)
    {
        $this->banKinh = $banKinh;
    }

    public function chuVi()
    {
        return 2*$this->banKinh * self::PI;
    }

    public function dienTich()
    {
        return self::PI*$this->banKinh * $this->banKinh;
    }
}