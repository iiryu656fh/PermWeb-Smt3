<?php 
$a = 10;
$b = 5;

$hasilTambah = $a + $b;
$hasilKurang = $a -$b;
$hasilKali = $a * $b;
$hasilBagi = $a / $b;
$sisaBagi = $a % $b;
$pangkat = $a ** $b;

echo "a = 10, b = 5 <br>";
echo "<br>a + b     : {$hasilTambah}<br>";
echo "a - b     : {$hasilKurang}<br>";
echo "a * b     : {$hasilKali}<br>";
echo "a / b     : {$hasilBagi}<br>";
echo "a % b     : {$sisaBagi}<br>";
echo "a ^ b     : {$pangkat}<br>";


$hasilSama = $a == $b;
$hasilTidakSama = $a != $b;
$hasilLebihKecil = $a < $b;
$hasilLebihBesar = $a > $b;
$hasilLebihKecilSama = $a <= $b;
$hasilLebihBesarSama = $a >= $b;
?>