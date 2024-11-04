<?php
include 'koneksi.php';

$query = "SELECT * FROM pakaians";
$sql = sqlsrv_query($koneksi, $query);
$pakaians = [];

if ($sql) {
    while ($row = sqlsrv_fetch_array($sql, SQLSRV_FETCH_ASSOC)) {
        $pakaians[] = $row;
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
    <link rel="stylesheet" href="style.css">
    <title>DAFTAR PAKAIAN</title>
</head>

<body>
    <section class="mx-5 mt-3">
        <?php
        if (isset($_GET['msg'])) {
            $msg = htmlspecialchars($_GET['msg']);
            switch ($msg) {
                case "create":
                    echo "<div class='alert alert-success alert-dismissible fade show'>
                        Pakaian berhasil disimpan!
                        <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='close'></button></div>";
                    break;

                case "update":
                    echo "<div class='alert alert-success alert-dismissible fade show'>
                        Perubahan berhasil disimpan!
                        <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='close'></button></div>";
                    break;

                case "delete":
                    echo "<div class='alert alert-success alert-dismissible fade show'>
                        Pakaian berhasil dihapus!
                        <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='close'></button></div>";
                    break;
            }
        }
        ?>
    </section>
    <h3 class="text-center my-3" style="font-weight: bold;">DAFTAR PAKAIAN</h3>
    <div class="card mx-5 py-2 px-3">
        <section class="card px-3 py-2">
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th style="background-color: #A14D4D; color: #ffffff;">NO</th>
                        <th style="background-color: #A14D4D; color: #ffffff;">NAMA PAKAIAN</th>
                        <th style="background-color: #A14D4D; color: #ffffff;">DESKRIPSI</th>
                        <th style="background-color: #A14D4D; color: #ffffff;">HARGA</th>
                        <th style="background-color: #A14D4D; color: #ffffff;">STOK</th>
                        <th style="background-color: #A14D4D; color: #ffffff;">AKSI</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $i = 1;

                    foreach ($pakaians as $pakaian) { ?>
                        <tr>
                            <th><?= $i++ ?></th>
                            <td><?= $pakaian['nama_pakaian'] ?></td>
                            <td><?= $pakaian['deskripsi_pakaian'] ?></td>
                            <td>Rp <?= number_format($pakaian['harga_pakaian']) ?></td>
                            <td><?= number_format($pakaian['stok_pakaian']) ?></td>
                            <td class="d-flex">
                                <a href="update.php?id_pakaian=<?= $pakaian['id_pakaian'] ?>" class="btn btn-primary">
                                    <i class="fa-solid fa-pen-to-square"></i></a>
                                <div class="mx-1"></div>
                                <form action="delete.php" method="POST">
                                    <input type="hidden" name="id_pakaian" value="<?= $pakaian['id_pakaian'] ?>">
                                    <button type="submit" name="submit" class="btn btn-danger">
                                        <i class="fa-solid fa-trash-can"></i></button>
                                </form>
                            </td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>

        </section>
        <section class="my-2 w-100 ">
            <a href="create.php" class="btn btn-primary">TAMBAH PAKAIAN</a>
        </section>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>