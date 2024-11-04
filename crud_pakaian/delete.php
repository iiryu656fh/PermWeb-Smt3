<?php
include 'koneksi.php';

if (isset($_POST['submit'])) {
    $id_pakaian = htmlspecialchars($_POST['id_pakaian']);

    $query = "DELETE FROM pakaians WHERE id_pakaian = ?";
    $params = [$id_pakaian];
    $sql = sqlsrv_query($koneksi, $query, $params);

    if ($sql) {
        header("Location:index.php?msg=delete");
    } else {
        $errors = print_r(sqlsrv_errors(), true);
        echo "<script>alert('$errors');</script>";
    }
}
