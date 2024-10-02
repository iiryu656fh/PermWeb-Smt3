<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" type="text/css" href="styleTgs2.css"/>
    </head>
    <body>
        <h1> Data Siswa</h1>
        <table>
            <tr>
                <th>Nama</th>
                <th>Umur</th>
                <th>Kelas</th>
                <th>Alamat</th>
            </tr>
            <?php 
                $siswa = array (
                    array("Andi", 15, "10A", "Malang"), 
                    array("Siti", 16, "10B", "Batu"),
                    array("Budi", 15, "10A", "Dinoyo"),
                    array("Anton", 25, "15A", "Dinoyo"),
                );
                for ($i=0; $i < count($siswa) ; $i++) { 
                    echo "<tr>";
                    for ($j=0; $j < count($siswa[0]) ; $j++) { 
                        echo "<td>". $siswa[$i][$j] . "</td>";
                    }
                    echo "</tr>";
                }
            ?>
        </table>
        <?php 
            for ($i=0; $i < count($siswa); $i++) { 
                $sum += $siswa[$i][1];
            }
            $rata2umur = $sum / count($siswa);
            echo "Rata-rata Umur Siswa = {$rata2umur}";
        ?>
        <!-- <h2>Rata-rata Umur Siswa = {$rata2umur}</h2>        -->
    </body>
</html>