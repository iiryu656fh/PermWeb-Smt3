<?php 
echo "Seorang guru ingin mencetak daftar nilai siswa dalam ujian matematika. 
        Guru tersebut memiliki data setiap siswa terdrir dari nama dan nilai. 
        Bantu guru ini mencetak daftar nilai siswa yang mencapai nilai di atas rata-rata kelas. 
        Dengan ketentuan nama dan nilai siswa Alice dapat 85, Bob dapat 92, Charlie dapat 78, 
        David dapat 64, Eva dapat 90";
        // Buat kode program untuk langkah 13 dengan array dua dimensi dan tampilkan hasilnya 

echo "<br><br>";

$ujianMTK = [
    ["Alice", 85],
    ["Bob", 92],
    ["Charlie", 78],
    ["David", 64],
    ["Eva", 90]
];

$rataRata = 0;
$sum = 0;

for ($i = 0; $i < count($ujianMTK); $i++) {
    $sum += $ujianMTK[$i][1];
}

$rataRata = $sum / count($ujianMTK);

echo "Rata-rata nilai : $rataRata";
echo "<br><br>";
echo "Daftar siswa yang di atas rata-rata: <br>";

for ($i = 0; $i < count($ujianMTK); $i++) {
    if ($ujianMTK[$i][1] > $rataRata) {
        echo "Nama: " . $ujianMTK[$i][0] . ", nilai : " . $ujianMTK[$i][1] . "<br>";
    }       
}
?>