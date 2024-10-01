<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title></title>
        <style>
            table, td, th {
                border: 1px solid;
            }

            table {
                width: 100%;
                border-collapse: collapse;
            }
        </style>
    </head>
    <body>
        <?php 
            $Dosen = [
                'nama' => 'Elok Nur Hamdana',
                'domisili' => 'Malang',
                'jenis_kelamin' => 'Perempuan' 
            ];

            echo "Nama : {$Dosen ['nama']} <br>";
            echo "Domisili : {$Dosen ['domisili']} <br>";
            echo "Jenis Kelamin : {$Dosen ['jenis_kelamin']} <br>";

        ?>
        <table>
            <tr>
                <th>Nama</th>
                <th>Domisili</th>
                <th>Jenis Kelamin</th>
            </tr>
            <tr>
                <td> <?php echo $Dosen ['nama']?></td>
                <td> <?php echo  $Dosen ['domisili']?></td>
                <td> <?php echo $Dosen ['jenis_kelamin']?></td>
            </tr>
        </table>
    </body>
</html>