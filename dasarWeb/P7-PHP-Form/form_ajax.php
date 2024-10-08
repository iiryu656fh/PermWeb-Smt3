<!DOCTYPE html>
<html>
    <head>
        <title>Contoh From dengan PHP dan jQuery</title>
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    </head>
    <body>
        <h2>Form Contoh</h2>
        <form id="myForm">
            <label for="buah">Pilih Buah:</label>
            <select name="buah" id="buah">
                <option value="apel">Apel</option>
                <option value="pisang">Pisang</option>
                <option value="mangga">mangga</option>
                <option value="jeruk">Jeruk</option>
            </select>

            <br>

            <label>Pilih Warna Favorit</label><br>
            <input type="checkbox" name="warna[]" value="merah"> Merah<br>
            <input type="checkbox" name="warna[]" value="biru"> Biru<br>
            <input type="checkbox" name="warna[]" value="hijau"> Hijau<br>

            <br>

            <label>Pilih Jenis Kelamin</label><br>
            <input type="radio" name="jenis_kelamin" value="laki-laki"> Laki-laki<br>
            <input type="radio" name="jenis_kelamin" value="perempuan"> Perempuan<br>

            <input type="submit" value="Submit">
        </form>

        <div id="hasil">
            <!-- Hasil akan ditampilkan disini -->
        </div>

        <script>
            $(document).ready(function(){
                $('#myForm').submit(function (e){
                    e.preventDefault(); //mencegah pengiriman form secara default

                    //mengumpulkan data form
                    var formData = $("#myForm").serialize();

                    //kirim data ke server PHP
                    $.ajax({
                        url: "proses_lanjut.php", // Ganti dengan nama file PHP yang sesuai
                        type: "POST",
                        data: formData,
                        success: function (response) {
                            //Tampilkan hasil dari server di div "hasil:
                            $("#hasil").html(response);
                        }
                    })
                })
            })
        </script>
    </body>
</html>