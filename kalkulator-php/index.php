<?php
require "Kalkulator.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kalkulator OOP</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <form action="<?= $_SERVER['PHP_SELF']?>" method="POST">
        <input type="number" name="num1" id="num1" placeholder="angka pertama" required>
        <input type="number" name="num2" id="num2" placeholder="angka kedua" required>
        <select name="operator" id="operator">
            <option value="tambah">Tambah</option>
            <option value="kurang">Kurang</option>
            <option value="kali">Kali</option>
            <option value="bagi">Bagi</option>
        </select>
        <button type="submit">Hitung</button>
    </form>
    <h1>Hasil: <?= $total ?? ""?></h1>
</body>
</html>