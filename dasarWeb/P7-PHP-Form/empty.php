<?php 
    $myArray = array(); // array kosong
    if (empty($myArray)) {
        echo "Array tidak terdefinisi atau kosong";
    } else {
        echo "Array terdefinisi dan tidak kosong";
    }
    echo "<hr>";

    if (empty($nonExistentVar)) {
        echo "Array tidak terdefinisi atau kosong";
    } else {
        echo "Array terdefinisi dan tidak kosong";
    }

?>