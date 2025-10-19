<?php
require "Tambah.php";
require "Kurang.php";
require "Kali.php";
require "Bagi.php";

if (isset($_POST['num1'], $_POST['num2'], $_POST['operator']) &&
    trim($_POST['num1']) !== "" &&
    trim($_POST['num2']) !== ""
) {
    $num1 = (float) $_POST['num1']; 
    $num2 = (float) $_POST['num2'];

switch ($_POST['operator']) {
    case "tambah":
        $tambah = new Tambah($num1, $num2);
        $total = $tambah->handleTambah();
        break;
    case "kurang":
        $kurang = new Kurang($num1, $num2);
        $total = $kurang->handleKurang();
        break;
    case "kali":
        $kali = new Kali($num1, $num2);
        $total = $kali->handleKali();
        break;
    case "bagi":
        $bagi = new Bagi($num1, $num2);
        $total = $bagi->handleBagi();
        break;
}
}
?>