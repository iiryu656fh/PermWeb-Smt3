<?php 
// function tampilkanHaloDunia(){
//     echo "Halo Dunia! <br>";

//     tampilkanHaloDunia();
// }

// tampilkanHaloDunia();



//Langkah 3 - Menampilkan Angka dengan perulangan for
echo "Perulangan For";
for ($i = 1; $i <= 25; $i++){
    echo "Perulangan ke-{$i} <br>";
}
echo "<hr>";



// Lengkah 4 - Menampilkan Angka dengan Fungsi Rekursif
function tampilkanAngka(int $jumlah, int $indeks = 1){
    echo "Perulangan ke-{$indeks} <br>";

    //panggil diri sendiri selama $indeks <= $jumlah
    if ($indeks < $jumlah ){
        tampilkanAngka($jumlah, $indeks + 1);
    }
}
tampilkanAngka(20);
