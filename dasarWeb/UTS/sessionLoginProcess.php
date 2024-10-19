<?php
$username = $_POST['username'];
$password = $_POST['password'];

if ($username == "Nisa" && $password == "iir12") {
    session_start();
    $_SESSION["username"] = $username;
    $_SESSION["status"] = 'login';
    echo "Anda berhasil login. Silahkan menuju <a href='main.php'>Halaman Home</a>";
} else {
    echo "Gagal login. Silahkan login lagi <a href='index.html'>Halaman Login</a>";
}
?>