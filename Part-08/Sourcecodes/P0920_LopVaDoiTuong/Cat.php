<?php

//Khai báo lớp cơ sở
include_once 'animal.php';
class Cat extends animal
{
    public function tiengKeu()
    {
        return "Meo meo";
    }

    public function chay()
    {
        return "Biết trèo";
    }
}