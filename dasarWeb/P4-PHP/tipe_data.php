<?php 
$a = 10;
$b = 5;
$c = $a + 5;
$d = $b + (10 * 5);
$e = $d - $c;

echo "Variabel a: {$a} <br>";
echo "Variabel b: {$b} <br>";
echo "Variabel c: {$c} <br>";
echo "Variabel d: {$d} <br>";
echo "Variabel d: {$e} <br>";

var_dump($e);

$nilaiMatematika = 5.1;
$nilaiIPA = 6.7;
$nilaiBahasaINdonesia = 9.3;

$rataRata = ($nilaiMatematika + $nilaiIPA + $nilaiBahasaINdonesia) / 3;

echo "Matematika: {$nilaiMatematika} <br>";
echo "IPA: {$nilaiIPA} <br>";
echo "Bahasa Indonesia: {$nilaiBahasaINdonesia} <br>";
echo "Rata-rata: {$rataRata} <br>";

var_dump($rataRata);
?>