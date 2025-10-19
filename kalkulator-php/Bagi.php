<?php
class Bagi {
    public $num1;
    public $num2;

    public function __construct($num1, $num2)
    {
        $this->num1 = $num1;
        $this->num2 = $num2;
    }
    public function handleBagi()
    {
        if ($this->num2 == 0) {
            return "penyebut tidak boleh 0 untuk operator pembagian";
        } else {
            return $this->num1 / $this->num2;
        }
    }

}
?>