<!DOCTYPE html>
<html>
    <head>
        <title>Tugas Besar Bagian 1</title>
        <style>
            p {
                padding-left: 30px;
            }
        </style>
    </head>
    <body>
        <h1> Data Mahasiswa Array Multi Dimensi<br></h1>
        <p>
            <?php 
                $mhs = array (
                    array("Dina", "123456", "Teknik Kimia", "dina@gmail.com"),
                    array("Dino", "9123124", "Teknik Listrik", "dino@gmail.com"),
                );
                for ($i=0; $i < count($mhs); $i++) {
                    for ($j=0; $j < count($mhs[0]); $j++) { 
                        echo "<li> Nama: ". $mhs[$i][$j] . "<br>";
                    } 
                    echo "<br>";
                }
            
        ?>
        </p>
        
       
    </body>
</html>