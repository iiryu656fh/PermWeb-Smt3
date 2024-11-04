<?php
// mengimport kode program yang ada didalam database.php
include 'database.php';

// query sql
$query = "SELECT * FROM hijabs";
// parameter atau data yang akan dimasukkan ke dalam tanda tanya (?) di query
$sql = sqlsrv_query($conn, $query);
// deklarasi variabel pakaian
$hijabs = [];

// cek apabila eksekusi berhasil
if ($sql) {
    // looping untuk mengambil baris data dari hasil query dan dikonversi menjadi array asosiatif dan dimasukkan ke dalam variable $row
    while ($row = sqlsrv_fetch_array($sql, SQLSRV_FETCH_ASSOC)) {
        // setiap baris yang didapat akan di masukkan ke dalam array $pakaians
        $hijabs[] = $row;
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
    <title>DAFTAR HIJAB</title>
</head>

<body>
    <section class="mx-5 mt-3">
        <?php
            // mengecek apakah ada value msg di dalam url dengan menggunakan $_get
            if (isset($_GET['msg'])) {
                // nilai tadi dimasukkan ke variabel $msg untuk di seleksi
                $msg = htmlspecialchars($_GET['msg']);
                // seleksi nilai dari variabel, jika sama maka akan di outputkan ke halaman
                switch ($msg) {
                    case "create":
                        echo "<div class='alert alert-success alert-dismissible fade show'>
                        Hijab berhasil disimpan!
                        <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='close'></button></div>";
                        break;

                    case "update":
                        echo "<div class='alert alert-success alert-dismissible fade show'>
                        Perubahan berhasil disimpan!
                        <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='close'></button></div>";
                        break;

                    case "delete":
                        echo "<div class='alert alert-success alert-dismissible fade show'>
                        Hijab berhasil dihapus!
                        <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='close'></button></div>";
                        break;
                }
            }
        ?>
    </section>
    <h3 class="text-center my-3">DAFTAR HIJAB</h3>
    <div class="card mx-5 py-2 px-3">
        <section class="my-2 w-100 d-flex justify-content-between align-items-center">
            <h4>TABEL HIJAB</h4>
            <a href="create.php" class="btn btn-primary">TAMBAH HIJAB</a>
        </section>
        <section class="card px-3 py-2">
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th scope="col">NO</th>
                        <th scope="col">NAMA HIJAB</th>
                        <th scope="col">DESKRIPSI</th>
                        <th scope="col">HARGA</th>
                        <th scope="col">STOK</th>
                        <th scope="col">AKSI</th>
                    </tr>
                </thead>
                <tbody>
                    <?php 
                    // deklarasi variabel i
                    $i = 1;

                    // looping variabel $pakaians dari kode php diatas dan digunakan sebagai variabel $pakaian agar dapat di panggil satu per satu dari kumpulan data
                    foreach ($hijabs as $hijab) { ?>
                        <tr>
                            <!-- mengoutputkan variabel i untuk penomoran -->
                            <th scope="row"><?= $i++ ?></th>
                            <!-- mengoutputkan nilai 'nama' dari variabel pakaian -->
                            <td><?= $hijab['nama_hijab'] ?></td>
                            <!-- mengoutputkan nilai 'deskripsi' dari variabel pakaian -->
                            <td><?= $hijab['deskripsi_hijab'] ?></td>
                            <!-- mengoutputkan nilai 'harga' dari variabel pakaian lalu diformat agar ada komanya -->
                            <td>Rp <?= number_format($hijab['harga_hijab']) ?></td>
                            <!-- mengoutputkan nilai 'stok' dari variabel pakaian lalu diformat agar ada komanya -->
                            <td><?= number_format($hijab['stok_hijab']) ?></td>
                            <td class="d-flex">
                                <!-- link yang menuju ke file update dengan membawa value id di dalam urlnya agar dapat diambil dengan $_GET -->
                                <a href="update.php?id=<?= $hijab['id_hijab'] ?>" class="btn btn-primary">
                                    <i class="fa-solid fa-pen-to-square"></i></a>
                                <div class="mx-1"></div>
                                <form action="delete.php" method="POST">
                                    <input type="hidden" name="id_hijab" value="<?= $hijab['id_hijab'] ?>">
                                    <button type="submit" name="submit" class="btn btn-danger">
                                        <i class="fa-solid fa-trash-can"></i></button>
                                </form>
                            </td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </section>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>