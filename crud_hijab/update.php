<?php
// mengimport kode program yang ada didalam koneksi.php
include 'database.php';

// mengecek apakah ada value msg di dalam url dengan menggunakan $_get
if (isset($_GET['id_hijab'])) {
    // memasukkan value dari url ke dalam variabel
    $id_hijab = htmlspecialchars($_GET['id_hijab']);
    // query sql
    $query = "SELECT * FROM hijabs WHERE id_hijab = ?";
    // parameter atau data yang akan dimasukkan ke dalam tanda tanya (?) di query
    $params = [$id_hijab];
    // eksekusi query
    $sql = sqlsrv_query($conn, $query, $params);

    // jika query berhasil maka data yang didapat akan dimasukkan ke dalam variabel
    if ($sql) {
        $pakaian = sqlsrv_fetch_array($sql, SQLSRV_FETCH_ASSOC);
    } else {
        header('Location:index.php');
    }
} else {
    header('Location:index.php');
}

// mengecek apakah ada data bernama 'submit'
if (isset($_POST['submit'])) {
    // memasukkan value bersih dari $_POST ke dalam variabel-variabel
    $nama_hijab= htmlspecialchars($_POST['nama_hijab']);   
    $deskripsi_hijab = htmlspecialchars($_POST['deskripsi_hijab']);
    $harga_hijab = htmlspecialchars($_POST['harga_hijab']);
    $stok_hijab = htmlspecialchars($_POST['stok_hijab']);
    $id_hijab = htmlspecialchars($_POST['id_hijab']);

    // mengecek apakah $nama dan $harga sudah terisi
    if (isset($nama_hijab) && isset($harga_hijab) && isset($stok_hijab)) {
        // query sql
        $query = "UPDATE pakaians SET nama_hijab = ?, deskripsi_hijab = ?, harga_hijab = ?, stok_hijab = ? WHERE id_hijab = ?";
        // parameter atau data yang akan dimasukkan ke dalam tanda tanya (?) di query
        $params = [
            $nama_hijab,
            $deskripsi_hijab,
            $harga_hijab,
            $stok_hijab,
            $id_hijab
        ];
        // eksekusi query
        $sql = sqlsrv_query($conn, $query, $params);

        // jika query berhasil maka akan dikembalikan ke halaman index
        if ($sql) {
            header("Location:index.php?msg=update");
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
    <h3 class="text-center my-3">UPDATE</h3>
    <div class="card mx-5 py-2 px-3">
        <form action="update.php" method="POST">
            <div class="mb-3">
                <label for="nama_hijab" class="form-label">Nama Hijab</label>
                <!-- input nama dengan value yang didapatkan dari variabel barang hasil query php diatas -->
                <input type="text" class="form-control" id="nama_hijab" name="nama_hijab" value="<?= $hijab['nama_hijab'] ?>" required>
            </div>
            <div class="mb-3">
                <label for="deskripsi_hijab" class="form-label">Deskripsi Hijab</label>
                <!-- input deskripsi dengan value yang didapatkan dari variabel pakaian hasil query php diatas -->
                <textarea class="form-control" id="deskripsi_hijab" name="deskripsi_hijab" rows="3"><?= $hijab['deskripsi_hijab'] ?></textarea>
            </div>
            <div class="mb-3">
                <label for="harga_hijab" class="form-label">Harga Hijab</label>
                <!-- input harga dengan value yang didapatkan dari variabel pakaian hasil query php diatas -->
                <input type="number" class="form-control" id="harga_hijab" name="harga_hijab" value="<?= $hijab['harga_hijab'] ?>" required>
            </div>
            <div class="mb-3">
                <label for="stok_hijab" class="form-label">Stok Hijab</label>
                <!-- input harga dengan value yang didapatkan dari variabel pakaian hasil query php diatas -->
                <input type="number" class="form-control" id="stok_hijab" name="stok_hijab" value="<?= $hijab['stok_hijab'] ?>" min="0" required>
            </div>
            <!-- mencantumkan id pakaian untuk digunakan dalam query nantinya -->
            <input type="hidden" name="id_hijab" value="<?= $hijab['id_hijab'] ?>">
            <!-- tombol kirim yang memiliki nama 'submit' -->
            <button class="btn btn-primary" type="submit" name="submit">SIMPAN</button>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>