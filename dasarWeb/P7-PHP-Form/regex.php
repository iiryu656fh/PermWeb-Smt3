<?php 
    $pattern = '/[a-z]/'; // cocokkan huruf kecul.
    $text = 'This is a Sample Text';
    if (preg_match($pattern, $text)){
        echo "huruf kecil ditemukan!";
    } else {
        echo "Tidak ada huruf kecil!";
    }

    echo "<hr>";
    $pattern = '/[0-9]+/'; // cocokkan satu datau lebih digit
    $text = 'There are 123 apples';
    if (preg_match($pattern, $text, $matches)){
        echo "Cocokkan: " . $matches[0];
    } else {
        echo "Tidak ada yang cocok!";
    }

    echo "<hr>";
    $pattern = '/apple/';
    $replacement = 'banana';
    $text = 'I Like apple pie.';
    $new_text = preg_replace($pattern, $replacement, $text);
    echo $new_text; // 

?>