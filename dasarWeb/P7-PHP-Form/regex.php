<?php 
    $pattern = '/[a-z]/'; // cocokkan huruf kecul.
    $text = 'This is a Sample Text';
    if (preg_match($pattern, $text)){
        echo "huruf kecil ditemukan!";
    } else {
        echo "Tidak ada huruf kecil!";
    }
?>