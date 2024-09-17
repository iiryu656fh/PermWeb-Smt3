<?php 
echo "Ada seorang guru ingin menghitung total nilai dari 10 siswa dalam ujian matematika. 
        Guru ini ingin mengabaikan dua nilai tertinggi dan dua nilai terendah. 
        Bantu guru ini menghitung total nilai yang akan digunakan untuk menentukan nilai rata-rata 
        setelah mengabaikan nilai tertinggi dan terendah. Berikut daftar nilai dari 10 siswa 
        (85, 92, 78, 64, 90, 75, 88, 79, 70, 96)";
echo "<br><br>";


$nilaiSiswa = [85, 92, 78, 64, 90, 75, 88, 79, 70, 96];

$nilaiMax = 0;
$nilaiMin = $nilaiSiswa[0];
$sum = 0;

foreach ($nilaiSiswa as $nilai){
    $sum += $nilai;
}

for ($j = 0; $j < 10; $j++) {
    if ($nilaiMax < $nilaiSiswa[$j]){
        $nilaiMax = $nilaiSiswa[$j];
    }
    if ($nilaiMin > $nilaiSiswa[$j]){
        $nilaiMin = $nilaiSiswa[$j];
    }
}

$sum -= ($nilaiMax + $nilaiMin);
$rataRata = $sum / 8;
    
echo "-- Nilai Siswa --<br>";
for ($i = 0; $i < 10; $i++){
    echo "Siswa $i = $nilaiSiswa[$i]<br>";
}
echo "<br>";
echo "Nilai tertinggi = $nilaiMax <br>";
echo "Nilai terendah = $nilaiMin <br>";
echo "Rata-rata nilai (Mengabaikan nilai tertinggi dan terendah) = $rataRata <br>";
?>