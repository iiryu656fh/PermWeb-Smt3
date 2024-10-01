<?php 
// function perkenalan(){
//     echo "Assalamualaikum, ";
//     echo "Perkenalkan, nama saya Nisa <br/>"; //Tulis sesuai nama kalian
//     echo "Senang berkenalan dengan Anda <br/>";
// }

// //Memanggil fungsi yang sudah dibuat
// perkenalan();
// perkenalan();



//tabel 2 - membuat fungsi dengan parameter
// function perkenalan($nama, $salam){
//     echo $salam.", ";
//     echo "Perkenalkan, nama saya ".$nama."<br/>";
//     echo "Senang berkenalan dengan anda<br/>";
// }

// perkenalan("Hamdana", "Hallo");

// echo "<hr>";

// $saya = "Elok";
// $ucapanSalam = "Selamat pagi";

// perkenalan($saya, $ucapanSalam);



// Tabel 3 - Parameter dengan Nilai Default
function perkenalan ($nama, $salam="Assalamualaikum"){
    echo $salam.", ";
    echo "Perkenalkan, nama saya ".$nama."<br/>";
}

//memanggil fungsi yang sudah dibuat
perkenalan("Nisa","Halo");

echo "<hr>";

$saya = "Iir";
$ucapanSalam = "Selamat pagi";

//Memanggil lagi tanpa mengisi parameter salam
perkenalan($saya);




?>