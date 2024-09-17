<?php 
echo "Seorang pelanggan ingin membeli sebuah produk dengan harga Rp 120.000. 
        Toko tersebut menawarkan diskon sebesar 20% untuk pembelian di atas Rp 100.000. 
        Bantu pelanggan ini untuk menghitung harga yang harus dibayar setelah mendapatkan diskon.";
echo "<br><br>";

$harga = 120000;
$diskon = 0.2;
$bayar = $harga;
$potongan = $harga * $diskon;

if ($harga > 100000) {
    $bayar -= $potongan;
}

echo "Harga barang : $harga <br>";
echo "Diskon : " . $diskon * 100 . "%<br>"; 
echo "Total harga yang harus dibayar = $bayar";

?>