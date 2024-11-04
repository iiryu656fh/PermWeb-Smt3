<?php
include 'koneksi.php';

if (isset($_POST['submit'])) {
    $nama_pakaian = htmlspecialchars($_POST['nama_pakaian']);
    $deskripsi_pakaian = htmlspecialchars($_POST['deskripsi_pakaian']);
    $harga_pakaian = htmlspecialchars($_POST['harga_pakaian']);
    $stok_pakaian = htmlspecialchars($_POST['stok_pakaian']);


    if (isset($nama_pakaian) && isset($harga_pakaian)  && isset($stok_pakaian)) {
        $query = "INSERT INTO pakaians (nama_pakaian, deskripsi_pakaian, harga_pakaian, stok_pakaian) VALUES (?, ?, ?, ?)";
        $params = [
            $nama_pakaian,
            $deskripsi_pakaian,
            $harga_pakaian, 
            $stok_pakaian
        ];
        $sql = sqlsrv_query($koneksi, $query, $params);

        if ($sql) {
            header("Location:index.php?msg=create");
        } else {
            $errors = print_r(sqlsrv_errors(), true);
            echo "<script>alert('$errors');</script>";
        }
    } else {
        echo "<script>alert('Nama, Harga, dan Stok Pakaian harus diisi!');</script>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <title>DAFTAR PAKAIAN</title>
</head>

<body>
    <h3 class="text-center my-3" style="font-weight: bold;">TAMBAH DATA PAKAIAN</h3>
    <div class="card mx-5 py-2 px-3">
        <form action="create.php" method="POST">
            <div class="mb-3">
                <label for="nama_pakaian" class="form-label">Nama Pakaian</label>
                <input type="text" class="form-control" id="nama_pakaian" name="nama_pakaian" required>
            </div>
            <div class="mb-3">
                <label for="deskripsi_pakaian" class="form-label">Deskripsi Pakaian</label>
                <textarea class="form-control" id="deskripsi_pakaian" name="deskripsi_pakaian" rows="3"></textarea>
            </div>
            <div class="mb-3">
                <label for="harga_pakaian" class="form-label">Harga Pakaian</label>
                <input type="number" class="form-control" id="harga_pakaian" name="harga_pakaian" required>
            </div>
            <div class="mb-3">
                <label for="stok_pakaian" class="form-label">Stok Pakaian</label>
                <input type="number" class="form-control" id="stok_pakaian" name="stok_pakaian" min="0" required>
            </div>
            <button class="btn btn-primary" type="submit" name="submit">TAMBAH</button>
            <button class="btn btn-danger" type="reset">RESET</button>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>