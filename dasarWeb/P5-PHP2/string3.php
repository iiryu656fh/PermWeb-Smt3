<?php 
//langkah 5 - membalikkan string
$pesan = "Saya arek malang";
echo strrev($pesan) .  "<br>";

echo "<hr>";

//langkah 8 - membalikkan string per kata
$pesan2 = "saya arek malang";
# ubah variabel $pesan menjadi array dengan perintah explode
$pesanPerKata = explode(" ", $pesan);
# ubah Setiap kata dalam array menjadi kebalikannya
$pesanPerKata = array_map(fn($pesan) => strrev($pesan), $pesanPerKata);
# gabungkan kembali array menjadi string
$pesan = implode(" ", $pesanPerKata);

echo $pesan . "<br>";
?>