<?php
class Tambah {
    public $num1;
    public $num2;

    //constructor
    public function __construct($num1, $num2)
    {
        $this->num1 = $num1;
        $this->num2 = $num2;
    }
    public function handleTambah(){
        $total = $this->num1 + $this->num2;
        return $total;
    }
}