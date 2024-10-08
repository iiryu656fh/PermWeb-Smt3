<!DOCTYPE html>
<html>
    <head>
        <title>HTML Injection</title>        
    </head>
    <body>
        <h2>Form Input PHP Injection</h2>
        <?php 
            $inputErr = "";
            $input = "";
            $emailErr = "";
            $email = "";
            
            if ($_SERVER["REQUEST_METHOD"] == "POST"){
                if (empty($_POST["input"])){
                    $inputErr = "Inputan tidak boleh kosong!";
                } else {
                    $input = $_POST['input'];
                    $input = htmlspecialchars($input, ENT_QUOTES, 'UTF-8');
                }

                // Memeriksa apakah input adalah email yang valid
                if (empty($_POST["email"])){
                    $emailErr = "Masukkan email yang valid!";
                } else {
                    $email = $_POST['email'];   
                    $email = htmlspecialchars($email, ENT_QUOTES, 'UTF-8');                     
                    if (filter_var($email, FILTER_VALIDATE_EMAIL)){
                     // lenjutkan dengan pengolahan email yang aman
                        
                    } else {
                        // Tangani input yang tidak valid
                        $emailErr = "Masukkan email yang valid!";
                    }
                    
                    if (empty($inputErr) && empty($emailErr)) {
                        echo "Data berhasil disimpan!<br>";
                        echo "Input: " . $input . "<br>";
                        echo "Email: " . $email;
                    }
                }  
            } 

        ?>
        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
            <label for="input">Input:</label>
            <input type="text" name="input" id="input" value="<?php echo $input; ?>">
            <span class="error"><?php echo $inputErr; ?></span><br><br>
            
            <label for="email">Email:</label>
            <input type="email" name="email" id="email" value="<?php echo $email; ?>">
            <span class="error"><?php echo $emailErr; ?></span><br><br>
            <input type="submit" name="submit" value="Submit">
        </form>
        
        
    </body>
</html>
