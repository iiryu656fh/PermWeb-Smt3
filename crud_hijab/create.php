<?php
// mengimport kode program yang ada didalam database.php
include 'database.php';

// mengecek apakah ada data bernama 'submit'
if (isset($_POST['submit'])) {
    // memasukkan value bersih dari $_POST ke dalam variabel-variabel
    $nama_hijab = htmlspecialchars($_POST['nama_hijab']);
    $deskripsi_hijab = htmlspecialchars($_POST['deskripsi_hijab']);
    $harga_hijab = htmlspecialchars($_POST['harga_hijab']);
    $stok_hijab = htmlspecialchars($_POST['stok_hijab']);


    // mengecek apakah $nama dan $harga  $stok sudah terisi
    if (isset($nama_hijab) && isset($harga_hijab)  && isset($stok_hijab)) {
        // query sql
        $query = "INSERT INTO hijabs (nama_hijab, deskripsi_hijab, harga_hijab, stok_hijab) VALUES (?, ?, ?, ?)";
        // parameter atau data yang akan dimasukkan ke dalam tanda tanya (?) di query
        $params = [
            $nama_hijab,
            $deskripsi_hijab,
            $harga_hijab, 
            $stok_hijab
        ];
        // eksekusi query
        $sql = sqlsrv_query($conn, $query, $params);

        // jika query berhasil maka akan dikembalikan ke halaman index
        if ($sql) {
            header("Location:index.php?msg=create");
        } else {
            $errors = print_r(sqlsrv_errors(), true);
            echo "<script>alert('$errors');</script>";
        }
    } else {
        echo "<script>alert('Nama, Harga, dan Stok Hijab harus diisi!');</script>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>DAFTAR HIJAB</title>
</head>

<body>
    <h3 class="text-center my-3">CREATE</h3>
    <div class="card mx-5 py-2 px-3">
        <!-- form yang akan menjalankan ulang file create.php dengan method post -->
        <form action="create.php" method="POST">
            <div class="mb-3">
                <label for="nama_hijab" class="form-label">Nama Hijab</label>
                <!-- input nama -->
                <input type="text" class="form-control" id="nama_hijab" name="nama_hijab" required>
            </div>
            <div class="mb-3">
                <label for="deskripsi_hijab" class="form-label">Deskripsi Hijab</label>
                <!-- input deskripsi -->
                <textarea class="form-control" id="deskripsi_hijab" name="deskripsi_hijab" rows="3"></textarea>
            </div>
            <div class="mb-3">
                <label for="harga_hijab" class="form-label">Harga Hijab</label>
                <!-- input harga -->
                <input type="number" class="form-control" id="harga_hijab" name="harga_hijab" required>
            </div>
            <div class="mb-3">
                <label for="stok_hijab" class="form-label">Stok Hijab</label>
                <!-- input stok -->
                <input type="number" class="form-control" id="stok_hijab" name="stok_hijab" min="0" required>
            </div>
            <!-- tombol kirim yang memiliki nama 'submit' -->
            <button class="btn btn-primary" type="submit" name="submit">TAMBAH</button>
            <!-- tombol reset jika ingin menghapus data yang diinputkan ke form -->
            <button class="btn btn-danger" type="reset">RESET</button>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>