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

echo "<br><br>";
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

echo "<br><br><br>";
$jumlahLahan = 10;
$tanamanPerLahan = 5;
$buahPerTanaman = 10;
$jumlahBuah = 0;

echo "Diketahui seorang petani kebun akan memanen buah di lahannya; <br>";
echo "Jummlah Lahan       : {$jumlahLahan}<br>";
echo "Tanaman per Lahan   : {$tanamanPerLahan}<br>";
echo "Buah per Tanaman    : {$buahPerTanaman}<br>";
echo "Jumlah Buah         : {$jumlahBuah}<br>";

for ($i = 1; $i <= $jumlahLahan; $i++){
    $jumlahBuah += ($tanamanPerLahan * $buahPerTanaman);
    echo "Iterasi ke-$i, jumlah buah = $jumlahBuah <br>";
}

echo "<br>";
echo "Jumlah buah yang akan dipanen adalah: $jumlahBuah";

echo "<br><br><br>";
echo "Nilai ujian: 85, 92, 78, 96, 88<br>";
$skorUjian = [85, 92, 78, 96, 88];
$totalSkor = 0;

foreach ($skorUjian as $skor) {
    $totalSkor += $skor;
}
echo "Total skor ujian adalah: $totalSkor";

echo "<br><br><br>";
$nilaiSiswa = [85, 92, 58, 64, 90, 55, 88, 79, 70, 96];


foreach ($nilaiSiswa as $nilai) {
    if ($nilai < 60) {
        echo "Nilai: $nilai (tidak lulus) <br>";
        continue;
    }
    echo "Nilai: $nilai (lulus) <br>";
}
?>