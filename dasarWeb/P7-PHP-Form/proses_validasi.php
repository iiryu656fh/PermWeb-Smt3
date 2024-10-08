<?php 
if ($_SERVER["REQUEST_METHOD"] == "POST"){
    $nama = $_POST['nama'];
    $email = $_POST['email'];
    $errors = array();

    // validasi Nama
    if(empty($nama)){
        $errors[] = 'Nama harus diisi';
    }

    // validasi email
    if(empty($email)){
        $errors[] = "EMail harus diisi";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors[] = "Format email tidak valid";
    }

    //Jika ada kesalahan validasi
    if(!empty($errors)){
        foreach ($errors as $error ) {
            echo $error . "<br>";
        }
    } else {
        //Lanjutkan dengan pemrosesan data jika semua validasi berhasil
        // Misalnya, menyimpan data ke database atau mengirim email
        $to = $email; // Alamat penerima
        $subject = "Konfirmasi Pendaftaran";    
        $message = "Halo $nama,\n\nTerima kasih telah mendaftar. Kami akan segera menghubungi Anda.";
        $headers = "From: web@jobsheet7.com";

        if (mail($to, $subject, $message, $headers)) {
            echo "Data berhasil dikirim: <br>Nama = $nama <br>Email = $email<br>";
        } else {
            echo "Gagal mengirim email.<br>";
        }
        
    }
}
?>