<?php

class animal
{
    public $soMat;
    public $soChan;
    public $mauLong;
    public  function tiengKeu()
    {
        return "";
    }

    public function inThongTin()
    {
        echo "Số mắt: " . $this->soMat. "<br>";
        echo "Số chân: " . $this->soChan . "<br>";
        echo "Màu lông: " . $this->mauLong . "<br>";
        echo "Tiếng kêu: " . $this->tiengKeu() . "<br>";
    }
}