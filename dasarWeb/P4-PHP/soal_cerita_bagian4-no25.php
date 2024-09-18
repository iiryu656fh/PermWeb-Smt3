<?php 
echo "Seorang pemain game ingin menghitung total skor mereka dalam permainan. 
        Mereka mendapatkan skor berdasarkan poin yang mereka kumpulkan. 
        Jika mereka memiliki lebih dari 500 poin, maka mereka akan mendapatkan hadiah tambahan. 
        Buat tampilan baris pertama “Total skor pemain adalah: (poin)”. 
        Dan baris kedua “Apakah pemain mendapatkan hadiah tambahan? (YA/TIDAK)”";
echo "<br><br>";

$skor = [120, 100, 80, 75, 100, 90];
$total = 0;

foreach ($skor as $skorGame){
$total += $skorGame; 
}

for($i = 0; $i <6; $i++){
echo "Skor babak ke-" . $i . "= " . $skor[$i] . "<br>";
}
echo "<br>";
echo "Total skor pemain adalah : $total poin<br><br>";

echo "Apakah pemain mendapatkan hadiah tambahan? ";
($total > 500) ? printf("YA.") : printf("TIDAK.");

?> 
