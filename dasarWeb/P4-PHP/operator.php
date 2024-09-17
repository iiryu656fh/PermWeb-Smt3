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

echo "a == b    : {$hasilSama}<br>";
echo "a != b    : {$hasilTidakSama}<br>";
echo "a < b     : {$hasilLebihKecil}<br>";
echo "a > b     : {$hasilLebihBesar}<br>";
echo "a <= b    : {$hasilLebihKecilSama}<br>";
echo "a >= b    : {$hasilLebihBesarSama}<br>";

$hasilAnd = $a && $b;
$hasilOr = $a || $b;
$hasilNotA = !$a;
$hasilNotB = !$b;

echo "a && b    : {$hasilAnd}<br>";
echo "a || b    : {$hasilOr}<br>";
echo "!a        : {$hasilNotA}<br>";
echo "!b        : {$hasilNotB}<br>";
?>