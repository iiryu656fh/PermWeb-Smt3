<?php 
$nilaiNumerik = 92;

if ($nilaiNumerik >= 90 && $nilaiNumerik <= 100) {
    echo "Nilai huruf: A<br>";
} else if ($nilaiNumerik >= 80 && $nilaiNumerik <= 90) {
    echo "Nilai huruf: B<br>";
} else if ($nilaiNumerik >= 70 && $nilaiNumerik <= 80) {
    echo "Nilai huruf: C<br>";
} else if ($nilaiNumerik < 70) {
    echo "Nilai huruf: D<br>";
}

echo "<br>";
$jarakSaatIni = 0;
$jarakTarget = 500;
$peningkatanHarian = 30;
$hari = 0;

echo "Diketahui seorang atlet berlari; <br>";
echo "Jarak saat ini : {$jarakSaatIni}<br>";
echo "Jarak target   : {$jarakTarget}<br>";
echo "Peningkatan harian : {$peningkatanHarian}<br>";
echo "hari           : {$hari}<br>";

while ($jarakSaatIni < $jarakTarget){
    $jarakSaatIni += $peningkatanHarian;
    $hari++;
    echo "Iterasi ke-$hari: $jarakSaatIni <br>";
}

echo "<br>";
echo "Atlet tersebut memerlukan $hari hari untuk mencapai jarak 500 kilometer.";

?>