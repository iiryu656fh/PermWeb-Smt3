<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" type="text/css" href="styleTgs3.css"/>
        <script src="jquery-3.7.1.js"></script>
        <script>
            $(document).ready(function(){
                $("#flip").click(function(){
                    $("#kotak2").slideToggle("slow");
                });
            });
        </script>
    </head>
    <body>
        <div id="flip">
            <h1> Data Siswa</h1>
        </div>
        <div id="kotak2">
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
                $sum = 0;
                for ($i=0; $i < count($siswa); $i++) { 
                    $sum += $siswa[$i][1];
                }
                $rata2umur = $sum / count($siswa);
                echo "<h2>Rata-rata Umur Siswa = {$rata2umur}</h2>";
            ?>
        </div>
    
    </body>
</html>